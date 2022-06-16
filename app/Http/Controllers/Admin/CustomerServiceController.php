<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CustomerServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerservice = User::where('role_id',3)->get();
        return view('admin.pages.customerservice.customer',['customerservices'=>$customerservice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.customerservice.addcustomerservice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required',
            'designation' => 'required',
            'logo' => 'nullable',
        ];
        $customMessage = [
            'fname.required' => 'The First Name field is required', 
            'lname.required' => 'The Last Name field is required', 
            'email.required' => 'The Email field is required', 
            'email.unique' => 'The Email field is unique', 
            'phone.required' => 'The Phone field is required', 
            'password.required' => 'The Password field is required', 
            'designation.required' => 'The Designation field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $customerservice = new User();
        $customerservice->role_id = 3; 
        $customerservice->fname = $request->fname; 
        $customerservice->lname = $request->lname;
        $customerservice->email = $request->email;
        $customerservice->phone = $request->phone;
        $customerservice->password = $request->password;
        $customerservice->designation = $request->designation;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('customerservice/logo', $fileName,'public');
            $customerservice->logo = 'logo/'.$fileName;
        }
        if($customerservice->save()){
            try {
                Mail::send('admin.email.customerseraddmail', 
                    [ 'customerservice' => $customerservice],
                     function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Add Customer Service');
                });
                session()->flash('message', 'Successfully Customer Service Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('customerservice.index');
            } catch (\Throwable $th) {
                // return $th;
                session()->flash('message', 'Mail not sent');
                session()->flash('messageType', 'danger');
                return redirect()->route('customerservice.index');
            }
        }else{
            session()->flash('message', 'Customer Service not added');
            session()->flash('messageType', 'danger');
            return redirect()->route('assistant.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customerservice = User::whereHas('roles',function ($q)
        {
            $q->where('name','subadmin');
        })->where('id',$id)->first();
        return view('admin.pages.customerservice.editcustomerservice',['customerservice'=>$customerservice]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required',
            // 'password' => 'required',
            'designation' => 'required',
            'logo' => 'nullable',
        ];
        $customMessage = [
            'fname.required' => 'The First Name field is required', 
            'lname.required' => 'The Last Name field is required', 
            'email.required' => 'The Email field is required', 
            'email.unique' => 'The Email field is unique', 
            'phone.required' => 'The Phone field is required', 
            // 'password.required' => 'The Password field is required', 
            'designation.required' => 'The Designation field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $customerservice = User::where('id',$id)->first();
        $customerservice->role_id = 3; 
        $customerservice->fname = $request->fname; 
        $customerservice->lname = $request->lname;
        $customerservice->email = $request->email;
        $customerservice->phone = $request->phone;
        // $customerservice->password = $request->password;
        $customerservice->designation = $request->designation;
        if($customerservice->save()){
            try {
                Mail::send('admin.email.customerserupdatemail', 
                    ['customerservice' => $customerservice],
                     function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Update Customer Service');
                });
                session()->flash('message', 'Successfully Customer Service Updated!');
                session()->flash('messageType', 'success');
                return redirect()->route('customerservice.index');
            } catch (\Throwable $th) {
                return $th;
                session()->flash('message', 'Mail not sent');
                session()->flash('messageType', 'danger');
                return redirect()->route('customerservice.index');
            }
        }else{
            session()->flash('message', 'Customer Service not Updated');
            session()->flash('messageType', 'danger');
            return redirect()->route('customerservice.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customerservice = User::where('id',$id)->first();
        if(!empty($customerservice)){
            if($customerservice->delete()){
                session()->flash('message', 'Successfully Customer Service Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('customerservice.index');
            }
        }else{
            session()->flash('message', 'Customer Service not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('customerservice.index');
        }  
    }
}
