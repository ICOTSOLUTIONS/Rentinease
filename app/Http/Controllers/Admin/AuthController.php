<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return  view('admin.auth.login');
    }
    public function loginProcess(Request $request){
        $validate = Validator::make($request->all(),[
            'email' => 'required|email|exists:users,email',
            'password'=>'required'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        if(auth()->attempt(['email' => $request->email, 'password' => $request->password] + ['role_id'=>1])){
            return redirect()->route('admin.dashboard');
        }elseif(auth()->attempt(['email' => $request->email, 'password' => $request->password] + ['role_id'=>2])){
            return redirect()->route('admin.dashboard');
        }elseif(auth()->attempt(['email' => $request->email, 'password' => $request->password] + ['role_id'=>3])){
            return redirect()->route('admin.dashboard');
        }else{
            session()->flash('message', 'Invalid Credentials');
            session()->flash('messageType', 'danger');
            return redirect()->back();
        }
    }
    public function dashboard()
    {
        return view('admin.pages.index');
    }

    public function forgot()
    {
        return view('admin.auth.forgetpass');
    }

    public function forgotPassword(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $token = Str::random(50);
        $user = User::where('email',$request->email)->first();
        $user->remember_token = $token;
        $user->save();
        try {
            Mail::send('admin.email.forgetPassword', 
                ['token' => $token, 'user' => $user],
                 function($message) use($request){
                $message->to($request->email);
                $message->subject('Reset Password');
            });
            session()->flash('message', 'We have e-mailed your password reset link!');
            session()->flash('messageType', 'success');
            return redirect()->route('admin.login');
        } catch (\Throwable $th) {
            return $th;
            session()->flash('message', 'Mail not sent');
            session()->flash('messageType', 'danger');
            return redirect()->back();
        }
    }

    public function reset($token) { 
        return view('admin.auth.resetpass', ['token' => $token]);
     }

     public function resetPassword(Request $request) { 
        $validate = Validator::make($request->all(),[
            'password' => 'required',
            'confirm_pass' => 'required|same:password',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
         $user = User::where('remember_token',$request->token)->first();
         if(!empty($user)){
             $user->password = Hash::make($request->password);
             $user->remember_token = null;
             $user->save();
             session()->flash('message', 'Successfully Reset Your Password!');
             session()->flash('messageType', 'success');
            return redirect()->route('admin.login');
         }else{
             session()->flash('message', 'Your Verification link not match');
             session()->flash('messageType', 'danger');
             return redirect()->back();
            }
        }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
