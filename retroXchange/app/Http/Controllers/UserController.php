<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
            return back()->withErrors(
                [
                    'error' => 'Incorrect login details! Please try again'
                ]
                );

        }

    }

    public function signup(Request $details){
        //validates the info put into form
        $s = $details->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        //refer to users model to create a new row in login_details
        User::create([
            'email' => $details->email,
            'password' => Hash::make($details->password),
        ]);

        //redirect to login if successful
        return redirect()->intended('/login')->with('success', 'Signup successful! Please login');

    }

    //logout functionality
    public function logout(Request $details){
        //authorise logout
        Auth::logout();
        //invalidate session
        $details->session()->invalidate();
        //regenerate csrf token
        $details->session()->regenerateToken();

        //return back to login page with a message
        return redirect('/')->with('success', 'Logged out successfully!');

    }
}
