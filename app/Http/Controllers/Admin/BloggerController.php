<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BloggerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogger = User::where('role_id',6)->get();
        return view('admin.pages.blogger.blogger',['bloggers'=>$blogger]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blogger.bloggeradd');
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

        $blogger = new User();
        $blogger->role_id = 6; 
        $blogger->fname = $request->fname; 
        $blogger->lname = $request->lname;
        $blogger->email = $request->email;
        $blogger->phone = $request->phone;
        $blogger->password = $request->password;
        $blogger->designation = $request->designation;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('blogger/logo', $fileName,'public');
            $blogger->logo = 'logo/'.$fileName;
        }
        if($blogger->save()){
            try {
                Mail::send('admin.email.bloggeraddmail', 
                    [ 'blogger' => $blogger],
                     function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Add Blogger');
                });
                session()->flash('message', 'Successfully Blogger Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('blogger.index');
            } catch (\Throwable $th) {
                // return $th;
                session()->flash('message', 'Mail not sent');
                session()->flash('messageType', 'danger');
                return redirect()->route('blogger.index');
            }
        }else{
            session()->flash('message', 'Blogger not added');
            session()->flash('messageType', 'danger');
            return redirect()->route('blogger.index');
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
        $blogger = User::whereHas('roles',function ($q)
        {
            $q->where('name','blogger');
        })->where('id',$id)->first();
        return view('admin.pages.blogger.bloggeredit',['blogger'=>$blogger]);
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

        $blogger = User::where('id',$id)->first();
        $blogger->role_id = 6; 
        $blogger->fname = $request->fname; 
        $blogger->lname = $request->lname;
        $blogger->email = $request->email;
        $blogger->phone = $request->phone;
        // $blogger->password = $request->password;
        $blogger->designation = $request->designation;
        if($blogger->save()){
            try {
                Mail::send('admin.email.bloggerupdatemail', 
                    ['blogger' => $blogger],
                     function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Update Blogger');
                });
                session()->flash('message', 'Successfully Blogger Updated!');
                session()->flash('messageType', 'success');
                return redirect()->route('blogger.index');
            } catch (\Throwable $th) {
                return $th;
                session()->flash('message', 'Mail not sent');
                session()->flash('messageType', 'danger');
                return redirect()->route('blogger.index');
            }
        }else{
            session()->flash('message', 'Blogger not Updated');
            session()->flash('messageType', 'danger');
            return redirect()->route('blogger.index');
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
        $blogger = User::where('id',$id)->first();
        if(!empty($blogger)){
            if($blogger->delete()){
                session()->flash('message', 'Successfully Blogger Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('blogger.index');
            }
        }else{
            session()->flash('message', 'Blogger not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('blogger.index');
        }        
    }
}
