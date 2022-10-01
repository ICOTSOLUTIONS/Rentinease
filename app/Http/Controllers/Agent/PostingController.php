<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\CoinDeduction;
use App\Models\PlaceType;
use App\Models\Posting;
use App\Models\PostingFloorPlan;
use App\Models\PostingPhoto;
use App\Models\PostingThreeSixty;
use App\Models\PostingVideo;
use App\Models\Purpose;
use App\Models\UserCoins;
use App\Models\UserPackageCoins;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $areas = Area::all();
        return view('agency.agentpages.posting.add', ['place_types' => $place_type, 'coins_deduct' => $coins_deduct,'areas'=>$areas]);
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
        $rules = [
            'purpose' => 'required',
            'size' => 'required',
            'size_square' => 'required',
            'building_no' => 'required',
            'price' => 'required',
            'price_per' => 'required',
            'furnishing' => 'required',
            'city' => 'required',
            'area' => 'required',
            'title' => 'required',
            'description' => 'required',
            'listning_type' => 'required',
            'amenities.*' => 'required',
            'facilities.*' => 'required',
            'photos' => 'required|array',
            'photos.*' => 'required',
            'video.*' => 'required',
            'three_sixty.*' => 'required',
            'floor_plan_layout.*' => 'required',
        ];
        if($request->place_type == 'commercial'){
            $rules['p_commercial'] = 'required';
        }else{
            $rules['p_residential'] = 'required';
            if($request->layout == 'custom'){
                $rules['l_custom'] = 'required';
            }else{
                $rules['layout'] = 'required';
            }
            if($request->bath == 'custom'){
                $rules['b_custom'] = 'required';
            }else{
                $rules['bath'] = 'required';
            }
        }
        if($request->building_age == 'custom'){
            $rules['build_age_custom'] = 'required';
        }else{
            $rules['building_age'] = 'required';
        }

        $customFields = [
            'title' => 'Title',
            'description' => 'Description',
            'listning_type' => 'Listning Type',
            'p_commercial' => 'Property Type Commercial',
            'p_residential' => 'Property Type Residential',
            'layout' => 'Layout',
            'bath' => 'Bath',
            'size' => 'Size',
            'size_square' => 'Size Square',
            'building_no' => 'Building Number',
            'build_age_custom' => 'Building Age Custom',
            'building_age' => 'Building Age',
            'l_custom' => 'Layout Custom',
            'b_custom' => 'Bath Custom',
            'amenities.*' => 'Amenities',
            'photos.*' => 'Photos',
            'video.*' => 'Video',
            'three_sixty.*' => '360',
            'floor_plan_layout.*' => 'Floor Plan Layout',
        ];

        $valid = Validator::make($request->all(),$rules,[],$customFields);
        if ($valid->fails()) {
            return back()->withErrors($valid->errors())->withInput();
        }
        try {
            DB::beginTransaction();
            $remain_coins = UserPackageCoins::where('user_id', auth()->user()->id)->first();
            if ($remain_coins->remain_coins >= 0) {
                $posting = new Posting();
                if($request->purpose){
                    $purpose = Purpose::where('name', $request->purpose)->first();
                    $posting->purpose_id = $purpose->id;
                }
                if($request->place_type == 'commercial'){
                    $posting->property_type_place_id = $request->p_commercial;
                }else{
                    $posting->property_type_place_id = $request->p_residential;
                    if($request->layout == 'custom'){
                        $posting->layout = $request->l_custom;
                    }else{
                        $posting->layout = $request->layout;
                    }
                    if($request->bath == 'custom'){
                        $posting->bath = $request->b_custom;
                    }else{
                        $posting->bath = $request->bath;
                    }
                }
                $posting->size = $request->size;
                $posting->size_square = $request->size_square;
                $posting->building_name = $request->building_name;
                $posting->furnishing = $request->furnishing;
                if($request->building_age == 'custom'){
                    $posting->building_age = $request->build_age_custom;
                }else{
                    $posting->building_age = $request->building_age;
                }
                $posting->price = $request->price;
                $posting->price_per = $request->price_per;
                $posting->city = $request->city;
                $posting->area = $request->area;
                $posting->lat = $request->a_lat;
                $posting->lng = $request->a_lon;
                $posting->amenities = json_encode($request->amenities);
                $posting->facilities = json_encode($request->facilities);
                $posting->title = $request->title;
                $posting->description = $request->description;
                if (isset($request->listning_type)) {
                    $coins_deduct = CoinDeduction::where('id', $request->listning_type)->first();
                    if ($coins_deduct->coins_deduct > $remain_coins->remain_coins) throw new Error("Please Buy Package First. Your Coins 0!");
                    $remain_coins->remain_Coins = $remain_coins->remain_Coins - $coins_deduct->coins_deduct;
                    $remain_coins->save();
                    $user_coins = new UserCoins();
                    $user_coins->user_package_coins_id =  $remain_coins->id;
                    $user_coins->minus_coins =  $coins_deduct->coins_deduct;
                    $user_coins->save();
                }
                if (!$posting->save()) throw new Error("Posting not Added!");
                if (!empty($request->photos)) {
                    foreach ($request->photos as $key => $image) {
                        $images = new PostingPhoto();
                        $images->posting_id = $posting->id;
                        $filename = "Photo-" . time() . "-" . rand() . "." . $image->getClientOriginalExtension();
                        $image->storeAs('photo', $filename, "public");
                        $images->image = "photo/" . $filename;
                        $images->save();
                    }
                }
                if (!empty($request->video)) {
                    foreach ($request->video as $key => $video) {
                        $videos = new PostingVideo();
                        $videos->posting_id = $posting->id;
                        $filename = "Video-" . time() . "-" . rand() . "." . $video->getClientOriginalExtension();
                        $video->storeAs('video', $filename, "public");
                        $videos->video = "video/" . $filename;
                        $videos->save();
                    }
                }
                if (!empty($request->three_sixty)) {
                    foreach ($request->three_sixty as $key => $three_sixties) {
                        $three_sixties = new PostingThreeSixty();
                        $three_sixties->posting_id = $posting->id;
                        $filename = "ThreeSixty-" . time() . "-" . rand() . "." . $three_sixties->getClientOriginalExtension();
                        $three_sixties->storeAs('threesixty', $filename, "public");
                        $three_sixties->three_sixty = "threesixty/" . $filename;
                        $three_sixties->save();
                    }
                }
                if (!empty($request->floor_plan_layout)) {
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
                session()->flash('message', 'Posting Added Successfully');
                session()->flash('messageType', 'success');
                return redirect()->route('agentposting.index');
            } else throw new Error("Please Buy Package First. Your Coins 0!");
        } catch (\Throwable $th) {
            DB::rollBack();
            session()->flash('message', 'Posting not added');
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

    public function fetch_areas(Request $request)
    {
        if (!empty($request->city_name)) $areas = Area::where('city_name', $request->city_name)->get();
        return response()->json(['message' => 'success', 'data' => $areas]);
    }
}
