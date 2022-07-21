<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package::all();
        return view('admin.pages.package.package',['packages'=>$package]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.package.addpackage');
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
            'duration_time' => 'required',
            'duration_period' => 'required',
            'desc' => 'required',
        ];
        $customMessage = [
            'name.required' => 'The Name field is required', 
            'coins.required' => 'The Coins field is required', 
            'duration_time.required' => 'The Duration Time field is required', 
            'duration_period.required' => 'The Duration Period field is required', 
            'desc.required' => 'The Description field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $package = new Package();
        $package->name = $request->name; 
        $package->coins = $request->coins;
        $package->duration_time = $request->duration_time;
        $package->duration_period = $request->duration_period;
        $package->description = $request->desc;
        if($package->save()){
            $log = new ActivityLog();
            $log->user_id = auth()->user()->id;
            $log->title = 'Package Add';
            $log->logs = auth()->user()->fname.' '.auth()->user()->lname.
            ' recently added a new package on the date of '.Carbon::now()->format('d-m-Y').
            ' at the time of '.Carbon::now()->format('h:i:s A');
            $log->save();
                session()->flash('message', 'Successfully Package Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('package.index');
        }else{
            session()->flash('message', 'Package not Added');
            session()->flash('messageType', 'danger');
            return redirect()->route('package.index');
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
        $package = Package::where('id',$id)->first();
        return view('admin.pages.package.editpackage',['package'=>$package]);
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
            'duration_time' => 'required',
            'duration_period' => 'required',
            'desc' => 'required',
        ];
        $customMessage = [
            'name.required' => 'The Name field is required', 
            'coins.required' => 'The Coins field is required', 
            'duration_time.required' => 'The Duration Time field is required', 
            'duration_period.required' => 'The Duration Period field is required', 
            'desc.required' => 'The Description field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $package = Package::where('id',$id)->first();
        $package->name = $request->name; 
        $package->coins = $request->coins;
        $package->duration_time = $request->duration_time;
        $package->duration_period = $request->duration_period;
        $package->description = $request->desc;
        if($package->save()){
            $log = new ActivityLog();
            $log->user_id = auth()->user()->id;
            $log->title = 'Package Update';
            $log->logs = auth()->user()->fname.' '.auth()->user()->lname.
            ' recently upadted a package on the date of '.Carbon::now()->format('d-m-Y').
            ' at the time of '.Carbon::now()->format('h:i:s A');
            $log->save();
                session()->flash('message', 'Successfully Package Updated!');
                session()->flash('messageType', 'success');
                return redirect()->route('package.index');
        }else{
            session()->flash('message', 'Package not Updated');
            session()->flash('messageType', 'danger');
            return redirect()->route('package.index');
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
        $package = Package::where('id',$id)->first();
        if(!empty($package)){
            if($package->delete()){
                session()->flash('message', 'Successfully Package Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('package.index');
            }
        }else{
            session()->flash('message', 'Package not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('package.index');
        }        
    }
}
