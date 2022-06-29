<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = User::where('role_id',4)->where('agency_id',auth()->user()->id)->orderBy('id','DESC')->get();
        return view('agency.pages.agent.agent',['agents'=>$agent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $agency = Agency::all();
        // $package = Package::all();
        return view('agency.pages.agent.addagent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules =[
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'company_name' => 'required',
            'owner_name' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'website' => 'nullable',
            'agent_type' => 'required',
            'licence_no' => 'required',
            'permit_no' => 'required',
            'rera_no' => 'required',
            'establishment_date' => 'required',
            'licence_exp_date' => 'required',
            // 'coins_of_agents' => 'required',
            // 'package' => 'required',
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
            'email.required' => 'The Email field is required', 
            'email.unique' => 'The Email field is unique', 
            'password.required' => 'The Password field is required',
            'company_name.required' => 'The Company Name field is required', 
            'owner_name.required' => 'The Owner Name field is required', 
            'phone.required' => 'The Phone field is required', 
            'mobile.required' => 'The Mobile field is required', 
            'agent_type.required' => 'The Agent Type field is required', 
            'licence_no.required' => 'The Licence no. field is required', 
            'permit_no.required' => 'The Permit no. field is required', 
            'rera_no.required' => 'The Rera no. field is required', 
            'establishment_date.required' => 'The Establishment Date field is required', 
            'licence_exp_date.required' => 'The Licence Expiry Date field is required', 
            // 'coins_of_agents.required' => 'The Coins of Agents field is required', 
            // 'package.required' => 'The Package field is required', 
            'country.required' => 'The Country field is required', 
            'city.required' => 'The City field is required', 
            'street.required' => 'The Street field is required', 
            'building.required' => 'The Building field is required', 
            'office.required' => 'The Office field is required', 
            'logo.required' => 'The Agent Photo field is required', 
            'licence.required' => 'The Licence field is required', 
            'agent_visa.required' => 'The Agent Visa field is required', 
            'agent_eid.required' => 'The Agent EID field is required', 
            'rera.required' => 'The Rera field is required', 
            'additional_documents.required' => 'The Additional Documents field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $agent = new User();
        $agent->role_id = 4;
        // if(!empty($request->package)) $agent->package_id = $request->package;
        $agent->agency_id = auth()->user()->id;
        $agent->email = $request->email;
        $agent->password = Hash::make($request->password);
        $agent->company_name = $request->company_name; 
        $agent->owner_name = $request->owner_name;
        $agent->phone = $request->phone;
        $agent->mobile = $request->mobile;
        $agent->website = $request->website;
        $agent->type = $request->agent_type;
        $agent->licence_no = $request->licence_no;
        $agent->permit_no = $request->permit_no;
        $agent->rera_no = $request->rera_no;
        $agent->establishment_date = $request->establishment_date;
        $agent->licence_exp_date = $request->licence_exp_date;
        // $agent->coins = $request->coins_of_agents;
        $agent->country = $request->country;
        $agent->city = $request->city;
        $agent->street = $request->street;
        $agent->building = $request->building;
        $agent->office = $request->office;
        $agent->authorized = $request->authorized;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/logo', $fileName,'public');
            $agent->logo = 'logo/'.$fileName;
        }
        if($request->hasFile('licence')){
            $file = $request->file('licence');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/licence', $fileName,'public');
            $agent->licence = 'licence/'.$fileName;
        }
        if($request->hasFile('agent_visa')){
            $file = $request->file('agent_visa');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/agent-visa', $fileName,'public');
            $agent->visa = 'agent-visa/'.$fileName;
        }
        if($request->hasFile('agent_eid')){
            $file = $request->file('agent_eid');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/agent-eid', $fileName,'public');
            $agent->eid = 'agent-eid/'.$fileName;
        }
        if($request->hasFile('rera')){
            $file = $request->file('rera');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/rera', $fileName,'public');
            $agent->rera = 'rera/'.$fileName;
        }
        if($request->hasFile('additional_documents')){
            $file = $request->file('additional_documents');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/additional_documents', $fileName,'public');
            $agent->additional_documents = 'additional_documents/'.$fileName;
        }
        try {
            // $email = "icotsolutions@gmail.com";
            Mail::send(
                'agency.email.agentAddMail',
                [
                    // 'name'=>$request->owner_name,
                    'email'=>$request->email,
                    'password'=>$request->password,
                ],
                function($message) use ($request){
                    $message->from(env('MAIL_USERNAME'));
                    $message->to($request->email);
                    $message->subject('Agent Credentials');
                }
            );
            if($agent->save()){
                $log = new ActivityLog();
                $log->user_id = auth()->user()->id;
                $log->title = 'Agent Add';
                $log->logs = auth()->user()->owner_name.' '.auth()->user()->company_name.
                ' recently added a new agent on the date of '.Carbon::now()->format('d-m-Y').
                ' at the time of '.Carbon::now()->format('h:i:s A');
                $log->save();
                session()->flash('message', 'Successfully Agent Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('agencyAgents.index');
            }else{
                session()->flash('message', 'Agent not Added!');
                session()->flash('messageType', 'danger');
                return redirect()->route('agencyAgents.index');
            }
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('message', 'Email not Sent');
            session()->flash('messageType', 'success');
            return redirect()->route('agencyAgents.index');
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
        // $package = Package::all();
        $agent = User::whereHas('roles',function ($q)
        {
            $q->where('name','agent');
        })->where('id',$id)->first();
        return view('agency.pages.agent.viewagent',['agent'=>$agent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $agency = Agency::all();
        // $package = Package::all();
        $agent = User::whereHas('roles',function ($q)
        {
            $q->where('name','agent');
        })->where('id',$id)->first();
        return view('agency.pages.agent.editagent',['agent'=>$agent]);
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
        // dd($request->all());
        $rules = [
            'email' => 'required|email|unique:users,email,'. $id,
            // 'password' => 'required',
            'company_name' => 'required',
            'owner_name' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'website' => 'nullable',
            'agent_type' => 'required',
            'licence_no' => 'required',
            'permit_no' => 'required',
            'rera_no' => 'required',
            'establishment_date' => 'required',
            'licence_exp_date' => 'required',
            // 'coins_of_agents' => 'required',
            // 'package' => 'required',
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
            'email.required' => 'The Email field is required', 
            'email.unique' => 'The Email field is unique', 
            'company_name.required' => 'The Company Name field is required', 
            'owner_name.required' => 'The Owner Name field is required', 
            'phone.required' => 'The Phone field is required', 
            'mobile.required' => 'The Mobile field is required', 
            'agent_type.required' => 'The Agent Type field is required', 
            'licence_no.required' => 'The Licence no. field is required', 
            'permit_no.required' => 'The Permit no. field is required', 
            'rera_no.required' => 'The Rera no. field is required', 
            'establishment_date.required' => 'The Establishment Date field is required', 
            'licence_exp_date.required' => 'The Licence Expiry Date field is required', 
            // 'package.required' => 'The Package field is required', 
            // 'coins_of_agents.required' => 'The Coins of Agents field is required', 
            'country.required' => 'The Country field is required', 
            'city.required' => 'The City field is required', 
            'street.required' => 'The Street field is required', 
            'building.required' => 'The Building field is required', 
            'office.required' => 'The Office field is required', 
            // 'logo.required' => 'The Agent Photo field is required', 
            // 'licence.required' => 'The Licence field is required', 
            // 'agent_visa.required' => 'The Agent Visa field is required', 
            // 'agent_eid.required' => 'The Agent EID field is required', 
            // 'rera.required' => 'The Rera field is required', 
            // 'additional_documents.required' => 'The Additional Documents field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $agent =  User::where('id',$id)->first();
        $agent->role_id = 4;
        // if(!empty($request->package)) $agent->package_id = $request->package;
        // if(!empty($request->agency_id)) $agent->agency_id = $request->agency_id;
        $agent->email = $request->email;
        $agent->password = Hash::make($request->password);
        $agent->company_name = $request->company_name; 
        $agent->owner_name = $request->owner_name;
        $agent->phone = $request->phone;
        $agent->mobile = $request->mobile;
        $agent->website = $request->website;
        $agent->type = $request->agent_type;
        $agent->licence_no = $request->licence_no;
        $agent->permit_no = $request->permit_no;
        $agent->rera_no = $request->rera_no;
        $agent->establishment_date = $request->establishment_date;
        $agent->licence_exp_date = $request->licence_exp_date;
        // $agent->coins = $request->coins_of_agents;
        $agent->country = $request->country;
        $agent->city = $request->city;
        $agent->street = $request->street;
        $agent->building = $request->building;
        $agent->office = $request->office;
        $agent->authorized = $request->authorized;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/logo', $fileName,'public');
            $agent->logo = 'logo/'.$fileName;
        }
        if($request->hasFile('licence')){
            $file = $request->file('licence');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/licence', $fileName,'public');
            $agent->licence = 'licence/'.$fileName;
        }
        if($request->hasFile('agent_visa')){
            $file = $request->file('agent_visa');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/agent-visa', $fileName,'public');
            $agent->visa = 'agent-visa/'.$fileName;
        }
        if($request->hasFile('agent_eid')){
            $file = $request->file('agent_eid');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/agent-eid', $fileName,'public');
            $agent->eid = 'agent-eid/'.$fileName;
        }
        if($request->hasFile('rera')){
            $file = $request->file('rera');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/rera', $fileName,'public');
            $agent->rera = 'rera/'.$fileName;
        }
        if($request->hasFile('additional_documents')){
            $file = $request->file('additional_documents');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agencyAgents/additional_documents', $fileName,'public');
            $agent->additional_documents = 'additional_documents/'.$fileName;
        }
        try {
            // $email = "icotsolutions@gmail.com";
            Mail::send(
                'agency.email.agentUpdateMail',
                [
                    // 'name'=>$request->owner_name,
                    'email'=>$request->email,
                    'password'=>$request->password,
                ],
                function($message) use ($request){
                    $message->from(env('MAIL_USERNAME'));
                    $message->to($request->email);
                    $message->subject('Agent Credentials');
                }
            );
            if($agent->save()){
                $log = new ActivityLog();
                $log->user_id = auth()->user()->id;
                $log->title = 'Agent Update';
                $log->logs = auth()->user()->owner_name.' '.auth()->user()->company_name.
                ' recently upadted a agent on the date of '.Carbon::now()->format('d-m-Y').
                ' at the time of '.Carbon::now()->format('h:i:s A');
                $log->save();
                session()->flash('message', 'Successfully Agent Updated!');
                session()->flash('messageType', 'success');
                return redirect()->route('agencyAgents.index');
            }else{
                session()->flash('message', 'Agent not Updated!');
                session()->flash('messageType', 'danger');
                return redirect()->route('agencyAgents.index');
            }
        } catch (\Throwable $th) {
            session()->flash('message', 'Email not Sent');
            session()->flash('messageType', 'success');
            return redirect()->route('agencyAgents.index');
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
                return redirect()->route('agencyAgents.index');
            }
        }else{
            session()->flash('message', 'Agent not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('agencyAgents.index');
        }   
    }
}

