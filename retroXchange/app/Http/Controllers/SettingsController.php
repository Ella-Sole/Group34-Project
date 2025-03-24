<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\PersonalDetails;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class SettingsController extends Controller
{
    public function updateName(Request $request){

        //validates the required put into form (email is required but other details can be null)
        $s = Validator::make($request->all(),[
            'name' => 'required',
        ]);

        $id = Auth::id();

        $personaldetailsid = UserDetails::where('users_id',$id)->select('personal_details_info')->pluck('personal_details_info')->first();

        //if fails, returns error:
        if ($s->fails()){
            return back()->with('error', 'Please enter a name!');

        } else {
            //find user's personal details by its id then update name
            PersonalDetails::where('personal_details_id', $id)
            ->update([
                'first_name' => $request->name,
            ]);

            //redirect back to page
            return redirect()->intended('/usersettings')->with('success', 'Details updated!');
        }

    }

    public function updateEmail(Request $request){

        //validates the required put into form (email is required but other details can be null)
        $s = Validator::make($request->all(),[
            'email' => 'required',
        ]);

        $id = Auth::id();

        //if fails, returns error:
        if ($s->fails()){
            return back()->with('error', 'Please enter an email!');

        } else {
            User::where('id', $id)
            ->update([
                'email' => $request->email
            ]);

            //redirect back to page
            return redirect()->intended('/usersettings')->with('success', 'Details updated!');
        }

    }

    public function deleteAccount(Request $details){
        $id = Auth::id();
        
        //delete user's personal details table after finding its id
        $pd = UserDetails::where('users_id',$id)->select('personal_details_info')->pluck('personal_details_info')->first();
        PersonalDetails::where('personal_details_id',$pd)->delete();
        

        //find user by its id then delete that row
        //all associated relationships with this parent table are also deleted
        User::where('id',$id)->delete();

        //authorise logout
        Auth::logout();

        $details->session()->regenerate();
        //regenerate csrf token
        $details->session()->regenerateToken();

        //redirect back to page
        return redirect()->intended('/')->with('success', 'Account deleted!');


    }
}
