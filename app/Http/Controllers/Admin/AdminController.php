<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

        $admin = new User();
        $admin->role_id = 1; 
        $admin->fname = $request->fname; 
        $admin->lname = $request->lname;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = Hash::make($request->password);
        $admin->designation = $request->designation;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('admin/logo', $fileName,'public');
            $admin->logo = 'logo/'.$fileName;
        }
        try {
            Mail::send('admin.email.adminaddmail', 
            [
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'password' => $request->password
            ],
                 function($message) use($request){
                $message->to($request->email);
                $message->subject('Add Admin');
            });
            if($admin->save()){
                $log = new ActivityLog();
                $log->user_id = auth()->user()->id;
                $log->title = 'Admin Add';
                $log->logs = auth()->user()->fname.' '.auth()->user()->lname.
                ' recently added a new admin on the date of '.Carbon::now()->format('d-m-Y').
                ' at the time of '.Carbon::now()->format('h:i:s A');
                $log->save();
                session()->flash('message', 'Successfully Admin Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('admin.index');
            }else{
                session()->flash('message', 'Admin not added');
                session()->flash('messageType', 'danger');
                return redirect()->route('admin.index');
            }
        } catch (\Throwable $th) {
            // return $th;
            session()->flash('message', 'Mail not sent');
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
        $admin = User::whereHas('roles',function ($q)
        {
            $q->where('name','admin');
        })->where('id',$id)->first();
        return view('admin.pages.admin.viewadmin',['admin'=>$admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::whereHas('roles',function ($q)
        {
            $q->where('name','admin');
        })->where('id',$id)->first();
        return view('admin.pages.admin.editadmin',['admin'=>$admin]);
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
            'email.unique' => 'The Email field is unique', 
            'email.requicred' => 'The Email field is required', 
            'phone.required' => 'The Phone field is required', 
            // 'password.required' => 'The Password field is required', 
            'designation.required' => 'The Designation field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $admin = User::where('id',$id)->first();
        $admin->role_id = 1; 
        $admin->fname = $request->fname; 
        $admin->lname = $request->lname;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        // $admin->password = $request->password;
        $admin->designation = $request->designation;
        try {
            Mail::send('admin.email.adminupdateemail', 
            [
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
            ],
                 function($message) use($request){
                $message->to($request->email);
                $message->subject('Update Admin');
            });
            if($admin->save()){
                $log = new ActivityLog();
                $log->user_id = auth()->user()->id;
                $log->title = 'Admin Update';
                $log->logs = auth()->user()->fname.' '.auth()->user()->lname.
                ' recently updated a admin on the date of '.Carbon::now()->format('d-m-Y').
                ' at the time of '.Carbon::now()->format('h:i:s A');
                $log->save();
                session()->flash('message', 'Successfully Admin Updated!');
                session()->flash('messageType', 'success');
                return redirect()->route('admin.index');
            }else{
                session()->flash('message', 'Admin not Updated');
                session()->flash('messageType', 'danger');
                return redirect()->route('admin.index');
            }
        } catch (\Throwable $th) {
            return $th;
            session()->flash('message', 'Mail not sent');
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
