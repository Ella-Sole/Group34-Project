<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    //passes in the form details
    public function login(Request $details){

        //attempt handles the login attempts
        //validates the email and password and that they've been put in
        $a = $details->validate([
            'email' => 'required',
            'password' => 'required',
        ],
        );

        //check if the authorisation has been successful using Auth
        if (Auth::attempt($a)){
            //regenerate a session as user is now logged in
            $details->session()->regenerate();

            //redirect to homepage if successful
            return redirect()->intended('/')->with('success', 'Login successful!');

        } else {
            return back()->with('error', 'Incorrect login details! Please try again');

        }

    }

    public function signup(Request $details){

        //validates the info put into form
        $s = Validator::make($details->all(),[
            'email' => 'required',
            'password' => 'required',
            'confirm-password' => 'required|same:password',
        ]);

        //if password & confirm password doesnt match, fails and returns error:
        if ($s->fails()){
            return back()->with('error', 'Please enter matching passwords!');

        } else {

            //refer to users model to create a new row in users table
            User::create([
                'email' => $details->email,
                'password' => Hash::make($details->password),
            ]);

            //redirect to login if successful
            return redirect()->intended('/login')->with('success', 'Signup successful! Please login');
                
        }

    }

    public function logout(Request $details){
        //authorise logout
        Auth::logout();

        $details->session()->regenerate();
        //regenerate csrf token
        $details->session()->regenerateToken();

        //return back to login page with a message
        return redirect('/')->with('success', 'Logged out successfully!');

    }
}
