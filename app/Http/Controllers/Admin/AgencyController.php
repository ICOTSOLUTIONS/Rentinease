<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agency = Agency::orderBy('id','DESC')->get();
        return view('admin.pages.agency.agency',['agencies'=>$agency]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.agency.addagency');
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
        $rules = [
            'company_name' => 'required',
            'owner_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'mobile' => 'required',
            'website' => 'nullable',
            'company_type' => 'required',
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
            'owner_visa' => 'required',
            'owner_eid' => 'required',
            'rera' => 'required',
            'additional_documents' => 'required',
            'authorized' => 'nullable',
        ];
        if($request->access_of_agents == "custom"){
            $rules += [
                "custom"=>"required",
            ];
        } 
        $customMessage = [
            'email.required' => 'The Email field is required', 
            'company_name.required' => 'The Company Name field is required', 
            'owner_name.required' => 'The Owner Name field is required', 
            'phone.required' => 'The Phone field is required', 
            'mobile.required' => 'The Mobile field is required', 
            'company_type.required' => 'The Company Type field is required', 
            'licence_no.required' => 'The Licence no. field is required', 
            'permit_no.required' => 'The Permit no. field is required', 
            'rera_no.required' => 'The Rera no. field is required', 
            'establishment_date.required' => 'The Establishment Date field is required', 
            'licence_exp_date.required' => 'The Licence Expiry Date field is required', 
            'access_of_agents.required' => 'The Access of Agents field is required', 
            'country.required' => 'The Country field is required', 
            'city.required' => 'The City field is required', 
            'street.required' => 'The Street field is required', 
            'building.required' => 'The Building field is required', 
            'office.required' => 'The Office field is required', 
            'logo.required' => 'The Agent Photo field is required', 
            'licence.required' => 'The Licence field is required', 
            'owner_visa.required' => 'The Agent Visa field is required', 
            'owner_eid.required' => 'The Agent EID field is required', 
            'rera.required' => 'The Rera field is required', 
            'additional_documents.required' => 'The Additional Documents field is required', 
            'custom.required' => 'The Custom field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $agency = new Agency();
        $agency->company_name = $request->company_name; 
        $agency->owner_name = $request->owner_name;
        $agency->email = $request->email;
        $agency->phone = $request->phone;
        $agency->mobile = $request->mobile;
        $agency->website = $request->website;
        $agency->type = $request->company_type;
        $agency->licence_no = $request->licence_no;
        $agency->permit_no = $request->permit_no;
        $agency->rera_no = $request->rera_no;
        $agency->establishment_date = $request->establishment_date;
        $agency->licence_exp_date = $request->licence_exp_date;
        if($request->access_of_agents == "custom"){
            $agency->access_of_agents = $request->custom;
        }else{
            $agency->access_of_agents = $request->access_of_agents;
        }
        $agency->country = $request->country;
        $agency->city = $request->city;
        $agency->street = $request->street;
        $agency->building = $request->building;
        $agency->office = $request->office;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/logo', $fileName,'public');
            $agency->logo = 'logo/'.$fileName;
        }
        if($request->hasFile('licence')){
            $file = $request->file('licence');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/licence', $fileName,'public');
            $agency->licence = 'licence/'.$fileName;
        }
        if($request->hasFile('owner_visa')){
            $file = $request->file('owner_visa');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/owner-visa', $fileName,'public');
            $agency->visa = 'owner-visa/'.$fileName;
        }
        if($request->hasFile('owner_eid')){
            $file = $request->file('owner_eid');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/owner-eid', $fileName,'public');
            $agency->eid = 'owner-eid/'.$fileName;
        }
        if($request->hasFile('rera')){
            $file = $request->file('rera');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/rera', $fileName,'public');
            $agency->rera = 'rera/'.$fileName;
        }
        if($request->hasFile('additional_documents')){
            $file = $request->file('additional_documents');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/additional_documents', $fileName,'public');
            $agency->additional_documents = 'additional_documents/'.$fileName;
        }
        if($agency->save()){
            session()->flash('message', 'Successfully Agency Added!');
            session()->flash('messageType', 'success');
            return redirect()->route('agency.index');
        }else{
            session()->flash('message', 'Agency not Added!');
            session()->flash('messageType', 'danger');
            return redirect()->route('agency.index');
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
        $agency = Agency::where('id',$id)->first();
        return view('admin.pages.agency.editagency',['agency'=>$agency]);
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
        // dd('umer');
        $rules = [
            'company_name' => 'required',
            'owner_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'mobile' => 'required',
            'website' => 'nullable',
            'company_type' => 'required',
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
            'owner_visa' => 'nullable',
            'owner_eid' => 'nullable',
            'rera' => 'nullable',
            'additional_documents' => 'nullable',
            'authorized' => 'nullable',
        ];
        if($request->access_of_agents == "custom"){
            $rules+= [
                "custom"=>"required",
            ];
        } 
        $customMessage = [
            'email.required' => 'The Email field is required', 
            'company_name.required' => 'The Company Name field is required', 
            'owner_name.required' => 'The Owner Name field is required', 
            'phone.required' => 'The Phone field is required', 
            'mobile.required' => 'The Mobile field is required', 
            'company_type.required' => 'The Company Type field is required', 
            'licence_no.required' => 'The Licence no. field is required', 
            'permit_no.required' => 'The Permit no. field is required', 
            'rera_no.required' => 'The Rera no. field is required', 
            'establishment_date.required' => 'The Establishment Date field is required', 
            'licence_exp_date.required' => 'The Licence Expiry Date field is required', 
            'access_of_agents.required' => 'The Access of Agents field is required', 
            'country.required' => 'The Country field is required', 
            'city.required' => 'The City field is required', 
            'street.required' => 'The Street field is required', 
            'building.required' => 'The Building field is required', 
            'office.required' => 'The Office field is required', 
            'custom.required' => 'The Custom field is required', 
            // 'logo.required' => 'The Agent Photo field is required', 
            // 'licence.required' => 'The Licence field is required', 
            // 'ownervisa.required' => 'The Agent Visa field is required', 
            // 'ownereid.required' => 'The Agent EID field is required', 
            // 'rera.required' => 'The Rera field is required', 
            // 'additional_documents.required' => 'The Additional Documents field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $agency = Agency::where('id',$id)->first();
        $agency->company_name = $request->company_name; 
        $agency->owner_name = $request->owner_name;
        $agency->email = $request->email;
        $agency->phone = $request->phone;
        $agency->mobile = $request->mobile;
        $agency->website = $request->website;
        $agency->type = $request->company_type;
        $agency->licence_no = $request->licence_no;
        $agency->permit_no = $request->permit_no;
        $agency->rera_no = $request->rera_no;
        $agency->establishment_date = $request->establishment_date;
        $agency->licence_exp_date = $request->licence_exp_date;
        if($request->access_of_agents == "custom"){
            $agency->access_of_agents = $request->custom;
        }else{
            $agency->access_of_agents = $request->access_of_agents;
        }
        $agency->country = $request->country;
        $agency->city = $request->city;
        $agency->street = $request->street;
        $agency->building = $request->building;
        $agency->office = $request->office;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/logo', $fileName,'public');
            $agency->logo = 'logo/'.$fileName;
        }
        if($request->hasFile('licence')){
            $file = $request->file('licence');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/licence', $fileName,'public');
            $agency->licence = 'licence/'.$fileName;
        }
        if($request->hasFile('owner_visa')){
            $file = $request->file('owner_visa');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/owner-visa', $fileName,'public');
            $agency->visa = 'owner-visa/'.$fileName;
        }
        if($request->hasFile('owner_eid')){
            $file = $request->file('owner_eid');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/owner-eid', $fileName,'public');
            $agency->eid = 'owner-eid/'.$fileName;
        }
        if($request->hasFile('rera')){
            $file = $request->file('rera');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/rera', $fileName,'public');
            $agency->rera = 'rera/'.$fileName;
        }
        if($request->hasFile('additional_documents')){
            $file = $request->file('additional_documents');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('agency/additional_documents', $fileName,'public');
            $agency->additional_documents = 'additional_documents/'.$fileName;
        }
        if($agency->save()){
            session()->flash('message', 'Successfully Agency Updated!');
            session()->flash('messageType', 'success');
            return redirect()->route('agency.index');
        }else{
            session()->flash('message', 'Agency not Updated!');
            session()->flash('messageType', 'danger');
            return redirect()->route('agency.index');
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
        $agency = Agency::where('id',$id)->first();
        if(!empty($agency)){
            if($agency->delete()){
                session()->flash('message', 'Successfully Agency Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('agency.index');
            }
        }else{
            session()->flash('message', 'Agency not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('agency.index');
        }        
    }
}
