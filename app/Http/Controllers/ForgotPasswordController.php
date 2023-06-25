<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm(){
        return view('auth.forgotPassword');
    }

    public function submitForgotPasswordForm(Request $request){
        $request->validate([
            'email'=>'required|email|exists:students'
        ]);

        $token = Str::random(64);


        DB::table('password_resets')->insert([
            'email'=>$request->input('email'),
            'token'=>$token,
            'created_at'=>Carbon::now()
        ]);

        Mail::send('email.forgotPassword',['token'=>$token],function($message) use($request){
            $message->to($request->input('email'));
            $message->subject('Reset Password');
        });

        return back()->with('message','Nous vous avons envoyé un e-mail Réinitialiser le lien de mot de passe');
    }

    public function showResetPasswordForm($token){
        return view('auth.forgotPasswordLink',['token'=>$token]);
    }

    public function submitResetPasswordForm(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'required'
        ]);

        $password_reset_request = DB::table('password_resets')
        ->where('email',$request->input('email'))
        ->where('token',$request->token)
        ->first();

        if(!$password_reset_request){
            return back()->with('error','Invalid Token!');
        }

        Student::where('email',$request->input('email'))
        ->update(['password'=>Hash::make($request->input('password'))]);

        DB::table('password_resets')
        ->where('email',$request->input('email'))
        ->delete();

        return redirect('/etud')->with('message','Votre mot de passe a été changé!');

    }


    /*----------------change password-------------*/
    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }

    public function updatePassword(Request $request){
       
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

#Match The Old Password
if(!Hash::check($request->old_password, Session::get('password'))){
    return back()->with("error", "Old Password Doesn't match!");
}


#Update the new Password
Student::whereId(Session::get('id'))->update([
    'password' => Hash::make($request->new_password)
]);

return back()->with("status", "Password changed successfully!");
}
}



