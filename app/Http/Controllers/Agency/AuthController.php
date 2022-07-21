<?php

namespace App\Http\Controllers\Agency;

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
        return  view('agency.auth.login');
    }
    public function loginProcess(Request $request){
        $validate = Validator::make($request->all(),[
            'email' => 'required|email|exists:users,email',
            'password'=>'required'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        if(auth()->attempt(['email' => $request->email, 'password' => $request->password] + ['role_id'=>7])){
            return redirect()->route('agency.dashboard');
        }elseif(auth()->attempt(['email' => $request->email, 'password' => $request->password] + ['role_id'=>4])){
            return redirect()->route('agent.dashboard');
        }else{
            session()->flash('message', 'Invalid Credentials');
            session()->flash('messageType', 'danger');
            return redirect()->back();
        }
    }
    public function dashboard()
    {
        return view('agency.pages.index');
    }

    public function forgot()
    {
        return view('agency.auth.forgetpass');
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
            Mail::send('agency.email.forgetPassword', 
                ['token' => $token, 'user' => $user],
                 function($message) use($request){
                $message->to($request->email);
                $message->subject('Reset Password');
            });
            session()->flash('message', 'We have e-mailed your password reset link!');
            session()->flash('messageType', 'success');
            return redirect()->route('login');
        } catch (\Throwable $th) {
            // return $th;
            session()->flash('message', 'Mail not sent');
            session()->flash('messageType', 'danger');
            return redirect()->back();
        }
    }

    public function reset($token) { 
        return view('agency.auth.resetpass', ['token' => $token]);
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
            return redirect()->route('login');
         }else{
             session()->flash('message', 'Your Verification link not match');
             session()->flash('messageType', 'danger');
             return redirect()->back();
            }
        }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile($id)
    {
        $agency = User::where('id',$id)->first();
        return view('agency.pages.profile',['allagency'=>$agency]);
    }

    public function agencyRegister(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'number'=>'required',
            'c_name'=>'required',
        ],[],[
            'name'=>'Name',
            'email'=>'Email',
            'number'=>'Phone Number',
            'c_name'=>'Company Name',
        ]);
        $email='icotsolutions@gmail.com';
        try {
            Mail::send(
                'agency.email.agencyRegister',
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'number'=>$request->number,
                    'c_name'=>$request->c_name,
                ],
                function($message) use ($email){
                    $message->from(env('MAIL_USERNAME'));
                    $message->to($email);
                    $message->subject('Agency Register');
                }
            );
                session()->flash('message', 'Email Sent');
                session()->flash('messageType', 'success');
                return redirect()->back();
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message', 'Email not Sent');
            session()->flash('messageType', 'success');
            return redirect()->back();
        }
    }
}
