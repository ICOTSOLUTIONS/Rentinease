<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function agentRegister(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
        ],[],[
            'name'=>'Name',
            'email'=>'Email',
        ]);
        $email='icotsolutions@gmail.com';
        try {
            Mail::send(
                'admin.email.agentRegisterMail',
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                ],
                function($message) use ($email){
                    $message->from(env('MAIL_USERNAME'));
                    $message->to($email);
                    $message->subject('Contact');
                }
            );
                session()->flash('message', 'Email Sent');
                session()->flash('messageType', 'success');
                return redirect()->back();
        } catch (\Throwable $th) {
            session()->flash('message', 'Email not Sent');
            session()->flash('messageType', 'success');
            return redirect()->back();
        }
    }
}
