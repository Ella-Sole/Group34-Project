<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;



class PasswordResetController extends Controller

    {
        public function requestPasswordReset(Request $request)
        {
            $request->validate(['email' => 'required|email']);
    
            $existingToken = DB::table('password_reset_tokens')->where('email', $request->email)->first();
    
            if ($existingToken) {
                DB::table('password_reset_tokens')->where('email', $request->email)->delete();
            }
    
            $token = Str::random(60);
    
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'token' => Hash::make($token),
                'created_at' => Carbon::now()
            ]);
    
            return response()->json([
                'message' => 'Token generated successfully',
                'token' => $token
            ], 200);
        }
    
        public function resetPassword(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'token' => 'required|string',
                'password' => 'required|string|min:8|confirmed',
            ]);
    
            $passwordReset = DB::table('password_reset_tokens')->where('email', $request->email)->first();
    
            if (!$passwordReset || !Hash::check($request->token, $passwordReset->token)) {
                return response()->json(['message' => 'Invalid token'], 400);
            }
    
            $user = \App\Models\User::where('email', $request->email)->first();
    
            if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }
    
            $user->password = Hash::make($request->password);
            $user->setRememberToken(Str::random(60));
            $user->save();
    
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
    
            return response()->json(['message' => 'Password reset successfully'], 200);
        }
    }

