<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\CoinDeduction;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoinsDeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coins_deduct = CoinDeduction::with('packages')->get();
        return view('admin.pages.coinsdeduct.coinsdeduct',['coins_deducts'=>$coins_deduct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package = Package::all();
        return view('admin.pages.coinsdeduct.addcoinsdeduct',['packages'=>$package]);
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
            'package' => 'required',
            'coins' => 'required',
        ];
        $customMessage = [
            'package.required' => 'The Listining Type field is required', 
            'coins.required' => 'The Coins field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $coins_deduct = new CoinDeduction();
        $coins_deduct->package_id = $request->package; 
        $coins_deduct->coins_deduct = $request->coins;
        if($coins_deduct->save()){
            $log = new ActivityLog();
            $log->user_id = auth()->user()->id;
            $log->title = 'Coins Deduction Add';
            $log->logs = auth()->user()->fname.' '.auth()->user()->lname.
            ' recently added a new coins deduction on the date of '.Carbon::now()->format('d-m-Y').
            ' at the time of '.Carbon::now()->format('h:i:s A');
            $log->save();
                session()->flash('message', 'Successfully Coins Deduction Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('coinsdeduct.index');
        }else{
            session()->flash('message', 'Coins Deduction not Added');
            session()->flash('messageType', 'danger');
            return redirect()->route('coinsdeduct.index');
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
        $coins_deduct = CoinDeduction::where('id',$id)->first();
        $package = Package::all();
        return view('admin.pages.coinsdeduct.editcoinsdeduct',['coins_deduct'=>$coins_deduct,'packages'=>$package]);
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
            'package' => 'required',
            'coins' => 'required',
        ];
        $customMessage = [
            'package.required' => 'The Listining Type field is required', 
            'coins.required' => 'The Coins field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $coins_deduct =  CoinDeduction::where('id',$id)->first();
        $coins_deduct->package_id = $request->package; 
        $coins_deduct->coins_deduct = $request->coins;
        if($coins_deduct->save()){
            $log = new ActivityLog();
            $log->user_id = auth()->user()->id;
            $log->title = 'Coins Deduction Updated';
            $log->logs = auth()->user()->fname.' '.auth()->user()->lname.
            ' recently updated a new coins deduction on the date of '.Carbon::now()->format('d-m-Y').
            ' at the time of '.Carbon::now()->format('h:i:s A');
            $log->save();
                session()->flash('message', 'Successfully Coins Deduction Updated!');
                session()->flash('messageType', 'success');
                return redirect()->route('coinsdeduct.index');
        }else{
            session()->flash('message', 'Coins Deduction not Updated');
            session()->flash('messageType', 'danger');
            return redirect()->route('coinsdeduct.index');
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
        $coins_deduct =  CoinDeduction::where('id',$id)->first();
        if(!empty($coins_deduct)){
            if($coins_deduct->delete()){
                session()->flash('message', 'Successfully Coins Deduction Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('coinsdeduct.index');
            }
        }else{
            session()->flash('message', 'Coins Deduction not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('coinsdeduct.index');
        }        
    }
}
