<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Models\PurchaseHistory;
use App\Models\PurchasedItems;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;


class CheckoutController extends Controller
{
    public function displayCheckout(){
        //put the basket session into its own variable
        $thebasket = Session::get('basket'.Auth::id());

        //return checkout page with the basket items
        return view('checkoutpage', array('thebasket' => $thebasket));

    }

    public function completeCheckout($total, Request $form){
        //validates the info put into form
        $f = Validator::make($form->all(),[
            'emailAddress' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'streetAddress' => 'required',
            'postCode' => 'required',
            'phoneNumber' => 'required',
            'cardDetails' => 'required',
        ]);

        //if the form was not filled in correctly
        if ($f->fails()){
            return back()->with('error', 'Please fill in all fields of the checkout form correctly!');
            
        } else {

            $thebasket = Session::get('basket'.Auth::id());

            //store purchase in database if the user is logged in
            if (Auth::check()){
    
                $purchase = PurchaseHistory::create([
                    //puts in current user's id
                    'users_id' => Auth::id(),
                    'total_price' => $total,
                    //Carbon::now() puts in datetime
                    'date_of_purchase' =>  Carbon::now(),
        
                ]);
        
                //get and store id of the newly created row
                $pid = $purchase->id;
        
                //puts in data into purchased_items
                    //a row for each item in the basket assigned to the same purchase_id
                foreach ($thebasket as $b){
    
                    //add the specific item into table depending on its quantity
                    for ($i = 1; $i <= $b['quantity']; $i++){
                        //reduce the stock of the item by 1
                        Product::where('item_id',$b['item_id'])->decrement('item_stock', 1);
    
                        PurchasedItems::create([
                            'purchase_id' => $pid,
                            'item_id' => $b['item_id'],
            
                        ]);
                        
                    }
                }
    
            }
    
            //empty basket
            Session::put('basket'.Auth::id(), []);
    
            //go back to home page with success message
            return redirect()->intended('/')->with('success', 'Purchase successful!');
    

        }

    }
}
