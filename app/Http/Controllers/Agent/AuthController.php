<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = User::where('role_id',4)->get();
        return view('admin.pages.agent.agent',['agents'=>$agent]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agency = Agency::all();
        return view('admin.pages.agent.addagent',['agencies'=>$agency]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'email' => 'required',
            'password' => 'required',
            'company_name' => 'required',
            'owner_name' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'webiste' => 'nullable',
            'agent_type' => 'required',
            'licence_no' => 'required',
            'permit_no' => 'required',
            'rera_no' => 'required',
            'establishment_date' => 'required',
            'licence_exp_date' => 'required',
            'access_of_agents' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'building' => 'required',
            'office' => 'required',
            'logo' => 'required',
            'licence' => 'required',
            'agent_visa' => 'required',
            'agent_eid' => 'required',
            'rera' => 'required',
            'additional_documents' => 'required',
            'authorized' => 'nullable',
        ];
        $customMessage = [
            'additional_documents.required' => 'The Additional field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $agent = new User();
        $agent->role_id = 4;
        if(!empty($request->agency_id)) $agent->agency_id = $request->agency_id;
        $agent->email = $request->email;
        $agent->password = Hash::make($request->password);
        $agent->company_name = $request->company_name; 
        $agent->owner_name = $request->owner_name;
        $agent->phone = $request->phone;
        $agent->mobile = $request->mobile;
        $agent->webiste = $request->webiste;
        $agent->agent_type = $request->agent_type;
        $agent->licence_no = $request->licence_no;
        $agent->permit_no = $request->permit_no;
        $agent->rera_no = $request->rera_no;
        $agent->establishment_date = $request->establishment_date;
        $agent->licence_exp_date = $request->licence_exp_date;
        $agent->coins_of_agents = $request->coins_of_agents;
        $agent->country = $request->country;
        $agent->city = $request->city;
        $agent->street = $request->street;
        $agent->building = $request->building;
        $agent->office = $request->office;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/logo', $fileName);
            $agent->logo = $fileName;
        }
        if($request->hasFile('licence')){
            $file = $request->file('licence');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/licence', $fileName);
            $agent->licence = $fileName;
        }
        if($request->hasFile('agent_visa')){
            $file = $request->file('agent_visa');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/agent-visa', $fileName);
            $agent->agent_visa = $fileName;
        }
        if($request->hasFile('agent_eid')){
            $file = $request->file('agent_eid');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/agent-eid', $fileName);
            $agent->agent_eid = $fileName;
        }
        if($request->hasFile('rera')){
            $file = $request->file('rera');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/rera', $fileName);
            $agent->rera = $fileName;
        }
        if($request->hasFile('additional_documents')){
            $file = $request->file('additional_documents');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/additional_documents', $fileName);
            $agent->additional_documents = $fileName;
        }
        try {
            $email = "icotsolutions@gmail.com";
            Mail::send(
                'admin.email.agentAddMail',
                [
                    'name'=>$request->owner_name,
                    'email'=>$request->email,
                    'password'=>$request->password,
                ],
                function($message) use ($email){
                    $message->from(env('MAIL_USERNAME'));
                    $message->to($email);
                    $message->subject('Agent Credentials');
                }
            );
            if($agent->save()){
                session()->flash('message', 'Successfully Agent Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('agent.index');
            }else{
                session()->flash('message', 'Agent not Added!');
                session()->flash('messageType', 'danger');
                return redirect()->route('agent.index');
            }
        } catch (\Throwable $th) {
            session()->flash('message', 'Email not Sent');
            session()->flash('messageType', 'success');
            return redirect()->route('agent.index');
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
        $agency = Agency::all();
        $agent = User::whereHas('roles',function ($q)
        {
            $q->where('name','agent');
        })->where('id',$id)->get();
        return view('admin.pages.agent.editagent',['agencies'=>$agency,'agents'=>$agent]);
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
            'email' => 'required',
            'password' => 'required',
            'company_name' => 'required',
            'owner_name' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'webiste' => 'nullable',
            'agent_type' => 'required',
            'licence_no' => 'required',
            'permit_no' => 'required',
            'rera_no' => 'required',
            'establishment_date' => 'required',
            'licence_exp_date' => 'required',
            'access_of_agents' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'building' => 'required',
            'office' => 'required',
            'logo' => 'nullable',
            'licence' => 'nullable',
            'agent_visa' => 'nullable',
            'agent_eid' => 'nullable',
            'rera' => 'nullable',
            'additional_documents' => 'nullable',
            'authorized' => 'nullable',
        ];
        $customMessage = [
            'additional_documents.required' => 'The Additional field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $agent =  User::where('id',$id)->first();
        $agent->role_id = 4;
        if(!empty($request->agency_id)) $agent->agency_id = $request->agency_id;
        $agent->email = $request->email;
        $agent->password = Hash::make($request->password);
        $agent->company_name = $request->company_name; 
        $agent->owner_name = $request->owner_name;
        $agent->phone = $request->phone;
        $agent->mobile = $request->mobile;
        $agent->webiste = $request->webiste;
        $agent->agent_type = $request->agent_type;
        $agent->licence_no = $request->licence_no;
        $agent->permit_no = $request->permit_no;
        $agent->rera_no = $request->rera_no;
        $agent->establishment_date = $request->establishment_date;
        $agent->licence_exp_date = $request->licence_exp_date;
        $agent->coins_of_agents = $request->coins_of_agents;
        $agent->country = $request->country;
        $agent->city = $request->city;
        $agent->street = $request->street;
        $agent->building = $request->building;
        $agent->office = $request->office;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/logo', $fileName);
            $agent->logo = $fileName;
        }
        if($request->hasFile('licence')){
            $file = $request->file('licence');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/licence', $fileName);
            $agent->licence = $fileName;
        }
        if($request->hasFile('agent_visa')){
            $file = $request->file('agent_visa');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/agent-visa', $fileName);
            $agent->agent_visa = $fileName;
        }
        if($request->hasFile('agent_eid')){
            $file = $request->file('agent_eid');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/agent-eid', $fileName);
            $agent->agent_eid = $fileName;
        }
        if($request->hasFile('rera')){
            $file = $request->file('rera');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/rera', $fileName);
            $agent->rera = $fileName;
        }
        if($request->hasFile('additional_documents')){
            $file = $request->file('additional_documents');
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/additional_documents', $fileName);
            $agent->additional_documents = $fileName;
        }
        try {
            $email = "icotsolutions@gmail.com";
            Mail::send(
                'admin.email.agentAddMail',
                [
                    'name'=>$request->owner_name,
                    'email'=>$request->email,
                    'password'=>$request->password,
                ],
                function($message) use ($email){
                    $message->from(env('MAIL_USERNAME'));
                    $message->to($email);
                    $message->subject('Agent Credentials');
                }
            );
            if($agent->save()){
                session()->flash('message', 'Successfully Agent Updated!');
                session()->flash('messageType', 'success');
                return redirect()->route('agent.index');
            }else{
                session()->flash('message', 'Agent not Updated!');
                session()->flash('messageType', 'danger');
                return redirect()->route('agent.index');
            }
        } catch (\Throwable $th) {
            session()->flash('message', 'Email not Sent');
            session()->flash('messageType', 'success');
            return redirect()->route('agent.index');
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
        $agent = User::where('id',$id)->first();
        if(!empty($agent)){
            if($agent->delete()){
                session()->flash('message', 'Successfully Agent Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('agent.index');
            }
        }else{
            session()->flash('message', 'Agent not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('agent.index');
        }   
    }

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
