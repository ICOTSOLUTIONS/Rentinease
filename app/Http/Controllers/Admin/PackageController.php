<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
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
            'access_of_agents' => 'required',
        ];
        $customMessage = [
            'name.required' => 'The Name field is required', 
            'coins.required' => 'The Coins field is required', 
            'access_of_agents.required' => 'The Access of Agents field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $package = new Package();
        $package->name = $request->name; 
        $package->coins = $request->coins;
        $package->access_of_agents = $request->access_of_agents;
        if($package->save()){
                session()->flash('message', 'Successfully Package Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('package.index');
        }else{
            session()->flash('message', 'Package not added');
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
            'access_of_agents' => 'required',
        ];
        $customMessage = [
            'name.required' => 'The Name field is required', 
            'coins.required' => 'The Coins field is required', 
            'access_of_agents.required' => 'The Access of Agents field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        $package = Package::where('id',$id)->first();
        $package->name = $request->name; 
        $package->coins = $request->coins;
        $package->access_of_agents = $request->access_of_agents;
        if($package->save()){
                session()->flash('message', 'Successfully Package Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('package.index');
        }else{
            session()->flash('message', 'Package not added');
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
