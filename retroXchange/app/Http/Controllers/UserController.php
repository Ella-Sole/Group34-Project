<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use the user model
use App\Models\User;
//use authentication
use Illuminate\Support\Facades\Auth;
//use hash
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //passes in the form details
    public function login(Request $details){

        //attempt handles the login attempts
        //validates the email and password and that they've bee put in
        $a = $details->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        //if the authorisation has been successful using Auth
            //a lot of this checking happens in the background with laravel's built-in features
        if (Auth::attempt($a)){
            //regenerate a session as user is now logged in
            $details->session()->regenerate();

            //redirect to homepage if successful
            //return view('homepage');
            return redirect()->route('homepage');

        }

        //if the details were not correct, go back to the login page with error message
            //*later maybe make a way to check if either password or email was incorrect
        return back()->withErrors([
            'Incorrect login details! Please try again'
        ]);


    }

    public function signup(Request $details){
        //validates the info put into form
        $details->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        //refer to users model to create a new row in login_details
        User::create([
            'email' => $details->email,
            'password' => Hash::make($details->password),
        ]);

        //redirect to login if successful
        return redirect()->route('login');

    }
}
