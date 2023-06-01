<?php

namespace App\Http\Controllers;

use App\Models\lupapassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon; 
use App\Models\User; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class lupapasswordController extends Controller
{
    public function lihatlupapasswordform()
    {
        return view('lupa_password');
    }

    public function storepassword(Request $request)
    {
        $request->validate([
          'email' => 'required|email|exists:users',
        ]);
  
        $token = Str::random(50);
  
        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);

  
        Mail::send('verifikasi', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
  
        return back()->with('success', 'Kami telah mengirim email link reset password Anda!');
    }

    public function lihatResetPassword($token) 
    {
        $email = lupapassword::where('token', $token)->first();
                            
        return view('reset_password', ['token' => $token], compact('email'));
    }

    public function storeResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'email|exists:users',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required'
        ]);
  
        $updatePassword = lupapassword::where('token', $request->token)->first();
  
        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }
  
        $user = User::where('email', $updatePassword->email)
                      ->update(['password' => Hash::make($request->password)]);
 
        $hapusemail = lupapassword::where('email', $updatePassword->email)->delete();
  
        return redirect('/login')->with('success', 'Password Anda telah diubah!');
    }
}