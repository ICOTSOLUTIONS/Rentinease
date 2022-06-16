<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = User::where('role_id',5)->orderBy('id','DESC')->get();
        
        return view('admin.pages.visitcustomer.visitor',['customers'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.visitcustomer.addcustomer');
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
            'password' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'mobile' => 'required',
            'website' => 'nullable',
            'rera_no' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'building' => 'required',
            'office' => 'required',
            'logo' => 'required',
            'agent_eid' => 'required',
            'rera' => 'required',
            'additional_documents' => 'required',
            'authorized' => 'nullable',
        ]; 
        $customMessage = [
            'fname.required' => 'The Fisrt Name field is required', 
            'lname.required' => 'The Last Name field is required', 
            'password.required' => 'The Password field is required', 
            'email.required' => 'The Email field is required', 
            'email.unique' => 'The Email field is unique', 
            'phone.required' => 'The Phone field is required', 
            'mobile.required' => 'The Mobile field is required', 
            'rera_no.required' => 'The Rera no. field is required', 
            'country.required' => 'The Country field is required', 
            'city.required' => 'The City field is required', 
            'street.required' => 'The Street field is required', 
            'building.required' => 'The Building field is required', 
            'office.required' => 'The Office field is required', 
            'logo.required' => 'The Agent Photo field is required', 
            'agent_eid.required' => 'The Agent EID field is required', 
            'rera.required' => 'The Rera field is required', 
            'additional_documents.required' => 'The Additional Documents field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $customer = new User();
        $customer->role_id = 5; 
        $customer->fname = $request->fname; 
        $customer->lname = $request->lname;
        $customer->password = Hash::make($request->password);
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->mobile = $request->mobile;
        $customer->website = $request->website;
        $customer->rera_no = $request->rera_no;
        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->street = $request->street;
        $customer->building = $request->building;
        $customer->office = $request->office;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('customer/logo', $fileName,'public');
            $customer->logo = 'logo/'.$fileName;
        }
        if($request->hasFile('agent_eid')){
            $file = $request->file('agent_eid');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('customer/agent-eid', $fileName,'public');
            $customer->eid = 'agent-eid/'.$fileName;
        }
        if($request->hasFile('rera')){
            $file = $request->file('rera');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('customer/rera', $fileName,'public');
            $customer->rera = 'rera/'.$fileName;
        }
        if($request->hasFile('additional_documents')){
            $file = $request->file('additional_documents');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('customer/additional_documents', $fileName,'public');
            $customer->additional_documents = 'additional_documents/'.$fileName;
        }
        if($customer->save()){
            try {
                Mail::send('admin.email.customeraddmail', 
                    [ 'visitor' => $customer],
                     function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Add Customer Visitor');
                });
                session()->flash('message', 'Successfully Customer Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('customer.index');
            } catch (\Throwable $th) {
                // return $th;
                session()->flash('message', 'Mail not sent');
                session()->flash('messageType', 'danger');
                return redirect()->route('customer.index');
            }
        }else{
            session()->flash('message', 'Customer not Added!');
            session()->flash('messageType', 'danger');
            return redirect()->route('customer.index');
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
        $customer = User::whereHas('roles',function ($q)
        {
            $q->where('name','customer');
        })->where('id',$id)->first();
        return view('admin.pages.visitcustomer.editcustomer',['customer'=>$customer]);
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
            'email' => 'required|email|unique:users,email,'. $id,
            'phone' => 'required',
            'mobile' => 'required',
            'website' => 'nullable',
            'rera_no' => 'required',
            'country' => 'required',
            'city' => 'required',
            'street' => 'required',
            'building' => 'required',
            'office' => 'required',
            'logo' => 'nullable',
            'agent_eid' => 'nullable',
            'rera' => 'nullable',
            'additional_documents' => 'nullable',
            'authorized' => 'nullable',
        ]; 
        $customMessage = [
            'fname.required' => 'The Fisrt Name field is required', 
            'lname.required' => 'The Last Name field is required', 
            'email.required' => 'The Email field is required', 
            'email.unique' => 'The Email field is unique', 
            'phone.required' => 'The Phone field is required', 
            'mobile.required' => 'The Mobile field is required', 
            'rera_no.required' => 'The Rera no. field is required', 
            'country.required' => 'The Country field is required', 
            'city.required' => 'The City field is required', 
            'street.required' => 'The Street field is required', 
            'building.required' => 'The Building field is required', 
            'office.required' => 'The Office field is required', 
            // 'logo.required' => 'The Agent Photo field is required', 
            // 'agent_eid.required' => 'The Agent EID field is required', 
            // 'rera.required' => 'The Rera field is required', 
            // 'additional_documents.required' => 'The Additional Documents field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $customer = User::where('id',$id)->first();
        $customer->role_id = 5; 
        $customer->fname = $request->fname; 
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->mobile = $request->mobile;
        $customer->website = $request->website;
        $customer->rera_no = $request->rera_no;
        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->street = $request->street;
        $customer->building = $request->building;
        $customer->office = $request->office;
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('customer/logo', $fileName,'public');
            $customer->logo = 'logo/'.$fileName;
        }
        if($request->hasFile('agent_eid')){
            $file = $request->file('agent_eid');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('customer/agent-eid', $fileName,'public');
            $customer->eid = 'agent-eid/'.$fileName;
        }
        if($request->hasFile('rera')){
            $file = $request->file('rera');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('customer/rera', $fileName,'public');
            $customer->rera = 'rera/'.$fileName;
        }
        if($request->hasFile('additional_documents')){
            $file = $request->file('additional_documents');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('customer/additional_documents', $fileName,'public');
            $customer->additional_documents = 'additional_documents/'.$fileName;
        }
        if($customer->save()){
            try {
                Mail::send('admin.email.customerupdatemail', 
                    [ 'visitor' => $customer],
                     function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Update Customer Visitor');
                });
                session()->flash('message', 'Successfully Customer Updated!');
                session()->flash('messageType', 'success');
                return redirect()->route('customer.index');
            } catch (\Throwable $th) {
                // return $th;
                session()->flash('message', 'Mail not sent');
                session()->flash('messageType', 'danger');
                return redirect()->route('customer.index');
            }
        }else{
            session()->flash('message', 'Customer not Updated!');
            session()->flash('messageType', 'danger');
            return redirect()->route('customer.index');
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
        $customer = User::where('id',$id)->first();
        if(!empty($customer)){
            if($customer->delete()){
                session()->flash('message', 'Successfully Customer Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('customer.index');
            }
        }else{
            session()->flash('message', 'Customer not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('customer.index');
        }   
    }
}
