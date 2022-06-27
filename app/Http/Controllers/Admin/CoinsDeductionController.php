<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\CoinDeduction;
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
        $coins_deduct = CoinDeduction::all();
        return view('admin.pages.coinsdeduct.coinsdeduct',['coins_deducts'=>$coins_deduct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.coinsdeduct.addcoinsdeduct');
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
            'name' => 'required',
            'coins' => 'required',
            // 'duration' => 'required',
            'desc' => 'required',
        ];
        $customMessage = [
            'name.required' => 'The Name field is required', 
            'coins.required' => 'The Coins field is required', 
            // 'duration.required' => 'The Duration field is required', 
            'desc.required' => 'The Description field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $coins_deduct = new CoinDeduction();
        $coins_deduct->name = $request->name; 
        $coins_deduct->coins_deduct = $request->coins;
        // $coins_deduct->duration = $request->duration;
        $coins_deduct->description = $request->desc;
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
        return view('admin.pages.coinsdeduct.editcoinsdeduct',['coins_deduct'=>$coins_deduct]);
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
            'name' => 'required',
            'coins' => 'required',
            // 'duration' => 'required',
            'desc' => 'required',
        ];
        $customMessage = [
            'name.required' => 'The Name field is required', 
            'coins.required' => 'The Coins field is required', 
            // 'duration.required' => 'The Duration field is required', 
            'desc.required' => 'The Description field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $coins_deduct =  CoinDeduction::where('id',$id)->first();
        $coins_deduct->name = $request->name; 
        $coins_deduct->coins_deduct = $request->coins;
        // $coins_deduct->duration = $request->duration;
        $coins_deduct->description = $request->desc;
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
