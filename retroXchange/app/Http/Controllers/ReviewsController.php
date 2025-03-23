<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserReviews;
use App\Models\PurchaseHistory;
use App\Models\PurchasedItems;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDetails;


class ReviewsController extends Controller
{
    public function submitReview(Request $request){

        //validates the info put into form
        $s = Validator::make($request->all(),[
            'rating' => 'required',
            'review' => 'required',
        ]);

        //if fails, returns error:
        if ($s->fails()){
            return redirect()->intended('/')->with('error', 'Please complete all sections of the review!');

        } else {

            //check if the user had purchased the item already
            $uid = Auth::id();

            $phistoryid = PurchaseHistory::where('users_id',$uid)->pluck('purchase_id')->first();
            $pitem = PurchasedItems::where('purchase_id',$phistoryid)->where('item_id',$request->pid)->pluck('item_id')->first();


            if(isset($pitem)){

                UserReviews::create([
                    'game_reviewed' => $request->pid,
                    'rating' => $request->rating,
                    'review' => $request->review,
                ]);

                return redirect()->intended('/')->with('success', 'Review submitted!');


            } else {
                return redirect()->intended('/')->with('error', 'You can only submit reviews for previously purchased items!');
            }
        }

    }
    
}
