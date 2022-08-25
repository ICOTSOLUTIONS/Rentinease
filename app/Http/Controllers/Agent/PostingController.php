<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\CoinDeduction;
use App\Models\PlaceType;
use App\Models\Posting;
use App\Models\UserCoins;
use App\Models\UserPackageCoins;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('agency.agentpages.posting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $place_type = PlaceType::with('place')->get();
        $coins_deduct = CoinDeduction::with('packages')->get();
        return view('agency.agentpages.posting.add', ['place_types' => $place_type, 'coins_deduct' => $coins_deduct]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([]);
        $remain_coins = UserPackageCoins::where('user_id', auth()->user()->id)->first();
        if ($remain_coins->remain_coins >= 0) {
            $posting = new Posting();
            $posting->purpose_id = $request->purpose_id;
            $posting->property_type_place_id = $request->property_type_place_id;
            $posting->area_id = $request->area_id;
            $posting->layout = $request->layout;
            $posting->bath = $request->bath;
            $posting->size = $request->size;
            $posting->building_name = $request->building_name;
            $posting->building_age = $request->building_age;
            $posting->price = $request->price;
            $posting->price_per = $request->price_per;
            if (isset($package_coins)) {
                $coins_deduct = CoinDeduction::where('id', $package_coins)->first();
                if ($coins_deduct->coins_deduct > $remain_coins->remain_coins) {
                    session()->flash('message', 'Please Buy Package First. Your Coins 0!');
                    session()->flash('messageType', 'danger');
                    return redirect()->back();
                }
                $remain_coins->remain_Coins = $remain_coins->remain_Coins - $coins_deduct->coins_deduct;
                $remain_coins->save();
                $user_coins = new UserCoins();
                $user_coins->user_package_coins_id =  $remain_coins->id;
                $user_coins->minus_coins =  $coins_deduct->coins_deduct;
                $user_coins->save();
            }
            $posting->save();
        } else {
            session()->flash('message', 'Please Buy Package First. Your Coins 0!');
            session()->flash('messageType', 'danger');
            return redirect()->back();
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
        return view('agency.agentpages.posting.update');
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
        //
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

    public function coins_deduct(Request $request)
    {
        if(!empty($request->id)) $coins_deduct = CoinDeduction::where('id',$request->id)->first();
        return response()->json(['message'=>'success','data'=>$coins_deduct->coins_deduct]);
    }
}
