<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superadmin = User::where('role_id',2)->get();
        return view('admin.pages.assistant.assistantadmin',['superadmins'=>$superadmin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.assistant.addassistantadmin');
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

        $assistant = new User();
        $assistant->role_id = 2; 
        $assistant->fname = $request->fname; 
        $assistant->lname = $request->lname;
        $assistant->email = $request->email;
        $assistant->phone = $request->phone;
        $assistant->password = $request->password;
        $assistant->designation = $request->designation;
        if($assistant->save()){
            session()->flash('message', 'Successfully Assistant Added!');
            session()->flash('messageType', 'success');
            return redirect()->route('assistant.index');
        }else{
            session()->flash('message', 'Assistant not Added!');
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
        $assistant = User::where('id',$id)->first();
        return view('admin.pages.assistant.editassistantadmin',['assistants'=>$assistant]);
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

        $assistant = User::findOrFail($id);
        $assistant->role_id = 2; 
        $assistant->fname = $request->fname; 
        $assistant->lname = $request->lname;
        $assistant->email = $request->email;
        $assistant->phone = $request->phone;
        $assistant->password = $request->password;
        $assistant->designation = $request->designation;
        if($assistant->save()){
            session()->flash('message', 'Successfully Assistant Updated!');
            session()->flash('messageType', 'success');
            return redirect()->route('assistant.index');
        }else{
            session()->flash('message', 'Assistant not Updated!');
            session()->flash('messageType', 'danger');
            return redirect()->route('assistant.index');
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
        $assistant = User::where('id',$id)->first();
        if(!empty($assistant)){
            if($assistant->delete()){
                session()->flash('message', 'Successfully Assistant Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('assistant.index');
            }
        }else{
            session()->flash('message', 'Assistant not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('assistant.index');
        }        
    }
}
