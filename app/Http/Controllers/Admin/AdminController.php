<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::where('role_id',1)->get();
        return view('admin.pages.admin.admin',['admins'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.admin.addadmin');
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
            'fname' => 'required|email',
            'lname' => 'required|email',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
            'designation' => 'required',
        ];
        $customMessage = [
            'fname.required' => 'The First Name field is required', 
            'lname.required' => 'The Last Name field is required', 
            'email.required' => 'The Email field is required', 
            'phone.required' => 'The Phone field is required', 
            'password.required' => 'The Password field is required', 
            'designation.required' => 'The Designation field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $admin = new User();
        $admin->role_id = 1; 
        $admin->fname = $request->fname; 
        $admin->lname = $request->lname;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = $request->password;
        $admin->designation = $request->designation;
        if($admin->save()){
            session()->flash('message', 'Successfully Admin Added!');
            session()->flash('messageType', 'success');
            return redirect()->route('admin.index');
        }else{
            session()->flash('message', 'Admin not Added!');
            session()->flash('messageType', 'danger');
            return redirect()->route('admin.index');
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
        $admin = User::where('id',$id)->first();
        return view('admin.pages.admin.editadmin',['admins'=>$admin]);
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
            'fname' => 'required|email',
            'lname' => 'required|email',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
            'designation' => 'required',
        ];
        $customMessage = [
            'fname.required' => 'The First Name field is required', 
            'lname.required' => 'The Last Name field is required', 
            'email.required' => 'The Email field is required', 
            'phone.required' => 'The Phone field is required', 
            'password.required' => 'The Password field is required', 
            'designation.required' => 'The Designation field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $admin = User::findOrFail($id);
        $admin->role_id = 1; 
        $admin->fname = $request->fname; 
        $admin->lname = $request->lname;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = $request->password;
        $admin->designation = $request->designation;
        if($admin->save()){
            session()->flash('message', 'Successfully Admin Updated!');
            session()->flash('messageType', 'success');
            return redirect()->route('admin.index');
        }else{
            session()->flash('message', 'Admin not Updated!');
            session()->flash('messageType', 'danger');
            return redirect()->route('admin.index');
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
        $admin = User::where('id',$id)->first();
        if(!empty($admin)){
            if($admin->delete()){
                session()->flash('message', 'Successfully Admin Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('admin.index');
            }
        }else{
            session()->flash('message', 'Admin not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('admin.index');
        }        
    }
}
