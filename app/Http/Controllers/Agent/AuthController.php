<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agency = Agency::all();
        return view('',['agencies'=>$agency]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
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
        ]);
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
        if(!empty($request->logo)){
            $file = $request->logo;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/logo', $fileName);
            $agent->logo = $fileName;
        }
        if(!empty($request->licence)){
            $file = $request->licence;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/licence', $fileName);
            $agent->licence = $fileName;
        }
        if(!empty($request->agent_visa)){
            $file = $request->agent_visa;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/agent-visa', $fileName);
            $agent->agent_visa = $fileName;
        }
        if(!empty($request->agent_eid)){
            $file = $request->agent_eid;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/agent-eid', $fileName);
            $agent->agent_eid = $fileName;
        }
        if(!empty($request->rera)){
            $file = $request->rera;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/rera', $fileName);
            $agent->rera = $fileName;
        }
        if(!empty($request->additional_documents)){
            $file = $request->additional_documents;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/additional_documents', $fileName);
            $agent->additional_documents = $fileName;
        }
        if($agent->save()){
            session()->flash('message', 'Successfully Agent Added!');
            session()->flash('messageType', 'success');
            return redirect()->route('agent.index');
        }else{
            session()->flash('message', 'Agent not Added!');
            session()->flash('messageType', 'danger');
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
        return view('',['agencies'=>$agency,'agents'=>$agent]);
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
        $request->validate([
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
        ]);
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
        if(!empty($request->logo)){
            $file = $request->logo;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/logo', $fileName);
            $agent->logo = $fileName;
        }
        if(!empty($request->licence)){
            $file = $request->licence;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/licence', $fileName);
            $agent->licence = $fileName;
        }
        if(!empty($request->agent_visa)){
            $file = $request->agent_visa;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/agent-visa', $fileName);
            $agent->agent_visa = $fileName;
        }
        if(!empty($request->agent_eid)){
            $file = $request->agent_eid;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/agent-eid', $fileName);
            $agent->agent_eid = $fileName;
        }
        if(!empty($request->rera)){
            $file = $request->rera;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/rera', $fileName);
            $agent->rera = $fileName;
        }
        if(!empty($request->additional_documents)){
            $file = $request->additional_documents;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agent/additional_documents', $fileName);
            $agent->additional_documents = $fileName;
        }
        if($agent->save()){
            session()->flash('message', 'Successfully Agent Updated!');
            session()->flash('messageType', 'success');
            return redirect()->route('agent.index');
        }else{
            session()->flash('message', 'Agent not Updated!');
            session()->flash('messageType', 'danger');
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
        //
    }
}
