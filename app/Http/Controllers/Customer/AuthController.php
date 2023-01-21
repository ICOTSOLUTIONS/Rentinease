<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function customerRegister(Request $request)
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
                'agency.email.visitorRegister',
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'number'=>$request->number,
                    'c_name'=>$request->c_name,
                ],
                function($message) use ($email){
                    $message->from(env('MAIL_USERNAME'));
                    $message->to($email);
                    $message->subject('Customer Visitor Register');
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
    public function dashboard()
    {
        return view('agency.customervisitorpages.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile($id)
    {
        $customer = User::where('id',$id)->first();
        return view('agency.customervisitorpages.profile',['allcustomer'=>$customer]);
    }
}
