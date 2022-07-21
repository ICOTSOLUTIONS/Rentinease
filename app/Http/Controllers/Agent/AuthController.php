<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function agentRegister(Request $request)
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
                'agency.email.agentRegister',
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'number'=>$request->number,
                    'c_name'=>$request->c_name,
                ],
                function($message) use ($email){
                    $message->from(env('MAIL_USERNAME'));
                    $message->to($email);
                    $message->subject('Agent Register');
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
    public function dashboard()
    {
        return view('agency.agentpages.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile($id)
    {
        $agent = User::where('id',$id)->first();
        return view('agency.agentpages.profile',['allagent'=>$agent]);
    }
}
