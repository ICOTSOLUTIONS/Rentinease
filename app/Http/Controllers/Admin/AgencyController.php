<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agency;
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
        $agency = Agency::all();
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
        $request->validate([
            'company_name' => 'required',
            'owner_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'webiste' => 'nullable',
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
        ]);
        $agency = new Agency();
        $agency->company_name = $request->company_name; 
        $agency->owner_name = $request->owner_name;
        $agency->email = $request->email;
        $agency->phone = $request->phone;
        $agency->mobile = $request->mobile;
        $agency->webiste = $request->webiste;
        $agency->company_type = $request->company_type;
        $agency->licence_no = $request->licence_no;
        $agency->permit_no = $request->permit_no;
        $agency->rera_no = $request->rera_no;
        $agency->establishment_date = $request->establishment_date;
        $agency->licence_exp_date = $request->licence_exp_date;
        $agency->access_of_agents = $request->access_of_agents;
        $agency->country = $request->country;
        $agency->city = $request->city;
        $agency->street = $request->street;
        $agency->building = $request->building;
        $agency->office = $request->office;
        if(!empty($request->logo)){
            $file = $request->logo;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/logo', $fileName);
            $agency->logo = $fileName;
        }
        if(!empty($request->licence)){
            $file = $request->licence;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/licence', $fileName);
            $agency->licence = $fileName;
        }
        if(!empty($request->owner_visa)){
            $file = $request->owner_visa;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/owner-visa', $fileName);
            $agency->owner_visa = $fileName;
        }
        if(!empty($request->owner_eid)){
            $file = $request->owner_eid;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/owner-eid', $fileName);
            $agency->owner_eid = $fileName;
        }
        if(!empty($request->rera)){
            $file = $request->rera;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/rera', $fileName);
            $agency->rera = $fileName;
        }
        if(!empty($request->additional_documents)){
            $file = $request->additional_documents;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/additional_documents', $fileName);
            $agency->additional_documents = $fileName;
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
        return view('admin.pages.editagency',['agencies'=>$agency]);
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
            'company_name' => 'required',
            'owner_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'webiste' => 'nullable',
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
        ]);
        $agency = Agency::where('id',$id)->first();
        $agency->company_name = $request->company_name; 
        $agency->owner_name = $request->owner_name;
        $agency->email = $request->email;
        $agency->phone = $request->phone;
        $agency->mobile = $request->mobile;
        $agency->webiste = $request->webiste;
        $agency->company_type = $request->company_type;
        $agency->licence_no = $request->licence_no;
        $agency->permit_no = $request->permit_no;
        $agency->rera_no = $request->rera_no;
        $agency->establishment_date = $request->establishment_date;
        $agency->licence_exp_date = $request->licence_exp_date;
        $agency->access_of_agents = $request->access_of_agents;
        $agency->country = $request->country;
        $agency->city = $request->city;
        $agency->street = $request->street;
        $agency->building = $request->building;
        $agency->office = $request->office;
        if(!empty($request->logo)){
            $file = $request->logo;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/logo', $fileName);
            $agency->logo = $fileName;
        }
        if(!empty($request->licence)){
            $file = $request->licence;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/licence', $fileName);
            $agency->licence = $fileName;
        }
        if(!empty($request->owner_visa)){
            $file = $request->owner_visa;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/owner-visa', $fileName);
            $agency->owner_visa = $fileName;
        }
        if(!empty($request->owner_eid)){
            $file = $request->owner_eid;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/owner-eid', $fileName);
            $agency->owner_eid = $fileName;
        }
        if(!empty($request->rera)){
            $file = $request->rera;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/rera', $fileName);
            $agency->rera = $fileName;
        }
        if(!empty($request->additional_documents)){
            $file = $request->additional_documents;
            $fileName = 'IMG-'.time().'.'.rand().'.'.$file->getClientOriginalExtention();
            $file->storeAs('agency/additional_documents', $fileName);
            $agency->additional_documents = $fileName;
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
