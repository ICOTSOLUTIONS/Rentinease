<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\CoinDeduction;
use App\Models\PlaceType;
use App\Models\Posting;
use App\Models\PostingFloorPlan;
use App\Models\PostingPhoto;
use App\Models\PostingThreeSixty;
use App\Models\PostingVideo;
use App\Models\UserCoins;
use App\Models\UserPackageCoins;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        try {
            DB::beginTransaction();
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
                if (!$posting->save()) throw new Error("Posting not Added!");
                if(!empty($request->photos)){
                    foreach ($request->photos as $key => $image) {
                        $images = new PostingPhoto();
                        $images->posting_id = $posting->id; 
                        $filename = "Photo-" . time() . "-" . rand() . "." . $image->getClientOriginalExtension();
                        $image->storeAs('photo', $filename, "public");
                        $images->image = "photo/" . $filename;
                        $images->save();
                    }
                }
                if(!empty($request->video)){
                    foreach ($request->video as $key => $video) {
                        $videos = new PostingVideo();
                        $videos->posting_id = $posting->id; 
                        $filename = "Video-" . time() . "-" . rand() . "." . $video->getClientOriginalExtension();
                        $video->storeAs('video', $filename, "public");
                        $videos->video = "video/" . $filename;
                        $videos->save();
                    }
                }
                if(!empty($request->three_sixty)){
                    foreach ($request->three_sixty as $key => $three_sixties) {
                        $three_sixties = new PostingThreeSixty();
                        $three_sixties->posting_id = $posting->id; 
                        $filename = "ThreeSixty-" . time() . "-" . rand() . "." . $three_sixties->getClientOriginalExtension();
                        $three_sixties->storeAs('threesixty', $filename, "public");
                        $three_sixties->three_sixty = "threesixty/" . $filename;
                        $three_sixties->save();
                    }
                }
                if(!empty($request->floor_plan_layout)){
                    foreach ($request->floor_plan_layout as $key => $floor_plan_layout) {
                        $floor_plan_layouts = new PostingFloorPlan();
                        $floor_plan_layouts->posting_id = $posting->id; 
                        $filename = "FloorPlan-" . time() . "-" . rand() . "." . $floor_plan_layout->getClientOriginalExtension();
                        $floor_plan_layout->storeAs('floorplan', $filename, "public");
                        $floor_plan_layouts->floor_plan_layout = "floorplan/" . $filename;
                        $floor_plan_layouts->save();
                    }
                }
                DB::commit();
            } else throw new Error("Please Buy Package First. Your Coins 0!");
        } catch (\Throwable $th) {
            DB::rollBack();
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
        if (!empty($request->id)) $coins_deduct = CoinDeduction::where('id', $request->id)->first();
        return response()->json(['message' => 'success', 'data' => $coins_deduct->coins_deduct]);
    }
}
