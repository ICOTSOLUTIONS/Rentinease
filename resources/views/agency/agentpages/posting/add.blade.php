 @extends('agency.layouts.master')

 @section('content')
     <style>
         .input-group-text,
         select.form-control:not([size]):not([multiple]),
         .form-control:not(.form-control-sm):not(.form-control-lg) {
             font-size: 14px;
             background-color: white;
             padding: 0 15px;
             height: 28px;
         }

         .w-110 {
             width: 105% !important;

         }

         .w-178 {
             width: 170% !important;

         }

         .date {
             width: 125%;

         }

         .input-group input {
             width: 140px !important;
         }

         .dark .input-group-text {
             background-color: #c9c9c9;
             color: #040404;
         }

         .text_area {
             border: 2px solid grey !important;
             outline: none !important;
         }

         .text_area:focus {
             border: 2px solid #1BBE87 !important;
             outline: none !important;
         }

         .save_btn {
             padding: 5px 15px;
             font-size: 15px;
         }
     </style>
     <div class="main-content">
         <section>
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card design">
                             <form action="{{ route('agentposting.store') }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                 <div class="card-header justify-content-center">
                                     <h4 class="text-success">Enter Your Posting Details</h4>
                                 </div>
                                 <div class="card-body">
                                     {{-- Rent, Sale --}}
                                     <div class="row">
                                         <div class="col-md-6 text-center">
                                             <div class="wrapper">
                                                 <input type="radio" name="purpose" value="rent" id="option-1" checked>
                                                 <label for="option-1" class="option option-1">
                                                     <div class="dot"></div>
                                                     <span>Rent</span>
                                                 </label>
                                             </div>
                                         </div>
                                         <div class="col-md-6 text-center">
                                             <div class="wrapper">
                                                 <input type="radio" name="purpose" value="sale" id="option-2">
                                                 <label for="option-2" class="option option-2">
                                                     <div class="dot"></div>
                                                     <span>Sale</span>
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                     {{-- Commercial, Residential --}}
                                     <div class="row">
                                         <div class="col-md-6 text-center">
                                             <div class="wrapper">
                                                 <input type="radio" name="place_type" value="commercial" id="option-3"
                                                     checked>
                                                 <label for="option-3" class="optionnew option-3">
                                                     <div class="dot"></div>
                                                     <span>Commercial</span>
                                                 </label>
                                             </div>
                                         </div>
                                         <div class="col-md-6 text-center">
                                             <div class="wrapper">
                                                 <input type="radio" name="place_type" value="residential" id="option-4">
                                                 <label for="option-4" class="optionnew option-4">
                                                     <div class="dot"></div>
                                                     <span>Residential</span>
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                     {{-- Property type Commercial --}}
                                     <div class="row">
                                         <div class="col-md-12 mt-2" id="p_commercial">
                                             <label for="">Property type Commercial</label>
                                             <select name="p_commercial">
                                                 <option value="">Select Option</option>
                                                 @foreach ($place_types[0]->place as $place_type)
                                                     <option value="{{ $place_type->id }}">{{ $place_type->name }}</option>
                                                 @endforeach
                                             </select>
                                         </div>
                                         {{-- Property type Residential --}}
                                         <div class="col-md-12 mt-2 d-none" id="p_residential">
                                             <label for="">Property type Residential</label>
                                             <select name="p_residential">
                                                 <option value="">Select Option</option>
                                                 @foreach ($place_types[1]->place as $place_type)
                                                     <option value="{{ $place_type->id }}">{{ $place_type->name }}</option>
                                                 @endforeach
                                             </select>
                                         </div>
                                     </div>
                                     <div class="row">
                                         {{-- select layout start --}}
                                         <div class="col-md-6 mt-2 d-none" id="layout">
                                             <label for="">Select Layout</label>
                                             <select name="layout" id="s_layout">
                                                 <option value="">Select Option</option>
                                                 <option value="Studio">Studio</option>
                                                 @for ($i = 1; $i <= 10; $i++)
                                                     <option value="{{ $i }}">{{ $i }}</option>
                                                 @endfor
                                                 <option value="custom">Custom </option>
                                             </select>
                                             <label class="custom_label d-none" id="custom01">Custom
                                                 <input type="number" name="l_custom" id="" class="form-control">
                                             </label>
                                         </div>
                                         {{-- select bath --}}
                                         <div class="col-md-6 mt-2 d-none" id="bath">
                                             <label for="">Select Bath</label>
                                             <select name="bath" id="s_bath">
                                                 <option value="">Select Option</option>
                                                 @for ($i = 1; $i <= 10; $i++)
                                                     <option value="{{ $i }}">{{ $i }}</option>
                                                 @endfor
                                                 <option value="custom">Custom </option>
                                             </select>
                                             <label class="custom_label d-none" id="custom02">Custom
                                                 <input type="number" name="b_custom" id="" class="form-control">
                                             </label>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="row">
                                                 <div class="col-md-6 mt-2">
                                                     <label for="">Size</label>
                                                     <input class="newinput" type="number" name="size">
                                                 </div>
                                                 <div class="col-md-6 select_input_col">
                                                     <select name="size_square">
                                                         <option value="Square Feet">Square Feet</option>
                                                         <option value="Square metre">Square metre</option>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-6 mt-2">
                                             <label class="d-block" for="">
                                                 Building name / No
                                             </label>
                                             <input class="newinput" type="text" placeholder="Building name / No"
                                                 name="building_no">
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 mt-2" id="building_age">
                                             <label>Building age</label>
                                             <select name="building_age" id="s_building_age">
                                                 <option value="Brand New Building">Brand New Building</option>
                                                 @for ($i = 1; $i <= 10; $i++)
                                                     <option value="{{ $i }}">{{ $i }} years old
                                                     </option>
                                                 @endfor
                                                 <option value="custom">Custom</option>
                                             </select>
                                             <label class="custom_label d-none" id="custom03">Custom
                                                 <input type="number" name="build_age_custom" id=""
                                                     class="form-control">
                                             </label>
                                         </div>
                                         <div class="col-md-6 mt-2">
                                             <label>Price</label>
                                             <input class="newinput" placeholder="Enter Price" type="number"
                                                 name="price">
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 mt-2">
                                             <label>City</label>
                                             <select name="city" id="s_city">
                                                 <option value="Dubai">Dubai</option>
                                                 <option value="Abu Dhabi">Abu Dhabi</option>
                                                 <option value="Sharjah">Sharjah</option>
                                                 <option value="Ras al Khaimah">Ras al Khaimah</option>
                                                 <option value="Fujairah">Fujairah</option>
                                                 <option value="Ajman">Ajman</option>
                                                 <option value="Umm Al Quwain">Umm Al Quwain</option>
                                             </select>
                                         </div>
                                         <div class="col-md-6 mt-2">
                                             <label>Area</label>
                                             <select name="area" id="s_area">
                                                 <option>Abu Hail</option>
                                                 <option>Al Awir First</option>
                                                 <option>Al Awir Second</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 mb-3 mt-4">
                                             <label class="file_label">
                                                 <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Add Photos
                                                 <input type="file" size="60" name="photos[]" multiple>
                                             </label>
                                         </div>
                                         <div class="col-md-6 mb-3 mt-4">
                                             <label class="file_label">
                                                 <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Add Video
                                                 <input type="file" size="60" name="video[]" multiple>
                                             </label>
                                         </div>
                                     </div>
                                     {{-- 360 --}}
                                     <div class="row">
                                         <div class="col-md-6 mb-3 mt-1">
                                             <label class="file_label">
                                                 <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; 360
                                                 <input type="file" size="60" name="three_sixty[]" multiple>
                                             </label>
                                         </div>
                                         <div class="col-md-6 mb-3 mt-1">
                                             <label class="file_label">
                                                 <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Floor Plan/Layout
                                                 <input type="file" size="60" name="floor_plan_layout[]"
                                                     multiple>
                                             </label>
                                         </div>
                                     </div>
                                     {{-- furnishing --}}
                                     <div class="row">
                                         <div class="col-md-12">
                                             <label>Furnishing</label>
                                             <select name="furnishing">
                                                 <option>Furnished</option>
                                                 <option>Unfurnished</option>
                                                 <option>Semi</option>
                                                 <option>Furnished</option>
                                             </select>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12 mt-4">
                                                 <fieldset>
                                                     <legend>Amenities</legend>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Central A/C
                                                                 <input type="checkbox" name="central"
                                                                     value="Central A/C">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Maids Room
                                                                 <input type="checkbox" name="maid_room"
                                                                     value="Maids Room">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Balcony
                                                                 <input type="checkbox" name="balcony" value="Balcony">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Pool
                                                                 <input type="checkbox" name="shared_poo"
                                                                     value="Shared Poo">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Spa
                                                                 <input type="checkbox" name="shared_spa"
                                                                     value="Shared Spa">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">Shared
                                                                 <input type="checkbox" name="shared" value="Shared">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Gym
                                                                 <input type="checkbox" name="gym" value="Gym">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Concierge
                                                                 <input type="checkbox" name="concierge"
                                                                     value="Concierge">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Service
                                                                 <input type="checkbox" name="service" value="Service">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Covered Parking
                                                                 <input type="checkbox" name="covered_parking"
                                                                     value="Covered Parking">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>View of Water
                                                                 <input type="checkbox" name="view_of_water"
                                                                     value="View of Water">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">View of Landmark
                                                                 <input type="checkbox" name="view_of_landmark"
                                                                     value="View of Landmark">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Pets
                                                                 <input type="checkbox" name="pets" value="Pets">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Allowed
                                                                 <input type="checkbox" name="allowed" value="Allowed">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Study Room
                                                                 <input type="checkbox" name="study_room"
                                                                     value="Study Room">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Private Garden
                                                                 <input type="checkbox" name="private_garden"
                                                                     value="Private Garden">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Private Poo
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">Private Gym
                                                                 <input type="checkbox">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Private Jacuzzi
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Built in
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Wardrobes
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Walk-in Close
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Built in Kitchen Appliances
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">Maid Service
                                                                 <input type="checkbox">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Children's
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Play Area
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Children's Pool
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Barbecue Area
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Basement Parking
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">Covered Parking
                                                                 <input type="checkbox">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                     <div class="row">
                                                         <div class="col-md-4">
                                                             <label>Garage parking
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-4">
                                                             <label>Community Parking
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-4">
                                                             <label>Street Parking
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                     </div>
                                                 </fieldset>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12 mt-4">
                                                 <fieldset>
                                                     <legend>Facilities</legend>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Central A/C
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Maids Room
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Balcony
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Poo
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Spa
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">Shared
                                                                 <input type="checkbox">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Central A/C
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Maids Room
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Balcony
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Poo
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Spa
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">Shared
                                                                 <input type="checkbox">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Central A/C
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Maids Room
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Balcony
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Poo
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Spa
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">Shared
                                                                 <input type="checkbox">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Central A/C
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Maids Room
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Balcony
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Poo
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Spa
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">Shared
                                                                 <input type="checkbox">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                     <div class="row">
                                                         <div class="col-md-2">
                                                             <label>Central A/C
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Maids Room
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Balcony
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Poo
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label>Shared Spa
                                                                 <input type="checkbox">
                                                             </label>
                                                         </div>
                                                         <div class="col-md-2">
                                                             <label class="container">Shared
                                                                 <input type="checkbox">
                                                                 <span class="checkmark"></span>
                                                             </label>
                                                         </div>
                                                     </div>
                                                 </fieldset>
                                             </div>
                                         </div>
                                         {{-- title description --}}
                                         <div class="row mt-3">
                                             <div class="col-md-6">
                                                 <label>Title</label> <br>
                                                 <input class="newinput" placeholder="Enter Title" type="number">
                                             </div>
                                             <div class="col-md-6">
                                                 <label>Discription</label> <br>
                                                 <textarea class="text_area w-100" name=""></textarea>
                                             </div>
                                         </div>
                                         {{-- listing fields --}}
                                         <div class="row mt-3">
                                             <div class="col-md-6">
                                                 <label>Listing Type</label>
                                                 <select name="listning_type" id="s_listning_type">
                                                     <option value="">Select Listing Type</option>
                                                     @foreach ($coins_deduct as $deduct)
                                                         <option value="{{ $deduct->id }}">
                                                             {{ $deduct->packages->name }}
                                                         </option>
                                                     @endforeach
                                                 </select>
                                             </div>
                                             <div class="col-md-6">
                                                 <label>Cost</label> <br>
                                                 <input class="newinput" id="l_cost" type="text" readonly>
                                             </div>
                                         </div>
                                         <div class="row mt-4">
                                             <div class="col-md-12">
                                                 <button class="btn btn-success save_btn">
                                                     Save
                                                 </button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                         </div>
                         </form>
                     </div>
                 </div>
             </div>
     </div>
     {{-- <div id='map' style='width: 900px; height: 500px;'></div> --}}
     </section>
 @endsection
 @push('scripts')
     <script>
         $(document).ready(function() {
             $('input[type=radio][name=place_type]').change(function() {
                 if (this.value == 'commercial') {
                     $('#p_residential').addClass('d-none');
                     $('#layout').addClass('d-none');
                     $('#bath').addClass('d-none');
                     $('#p_commercial').removeClass('d-none');
                 } else {
                     $('#p_commercial').addClass('d-none');
                     $('#p_residential').removeClass('d-none');
                     $('#layout').removeClass('d-none');
                     $('#bath').removeClass('d-none');
                 }
             });
             $("#s_layout").on('change', function() {
                 var selectedText = $(this).find("option:selected").val();
                 if (selectedText == 'custom') {
                     $('#custom01').removeClass('d-none');
                 } else {
                     $('#custom01').addClass('d-none');
                 }
             });
             $("#s_bath").on('change', function() {
                 var selectedText = $(this).find("option:selected").val();
                 if (selectedText == 'custom') {
                     $('#custom02').removeClass('d-none');
                 } else {
                     $('#custom02').addClass('d-none');
                 }
             });
             $("#s_building_age").on('change', function() {
                 var selectedText = $(this).find("option:selected").val();
                 if (selectedText == 'custom') {
                     $('#custom03').removeClass('d-none');
                 } else {
                     $('#custom03').addClass('d-none');
                 }
             });
             $("#s_listning_type").on('change', function() {
                 var selectedId = $(this).find("option:selected").val();
                 if (selectedId == '') $('#l_cost').val('');
                 $.ajax({
                     type: "GET",
                     url: "{{ route('agent.coins.deduct') }}",
                     data: {
                         id: selectedId,
                     },
                     dataType: "json",
                     cache: false,
                     success: function(response) {
                         $('#l_cost').val(response.data);
                     },
                     error: err => console.log(err)
                 });
             });
         });
     </script>
     <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
     <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
     <script>
         var accessToken = 'pk.eyJ1IjoicmVudGluZWFzZSIsImEiOiJjbDZ6ODRxaDIwMXh5M3FxeXIza2VzZm5mIn0.lXvnhh-TY3UCIKNbUxLLjA';
         mapboxgl.accessToken =
             'pk.eyJ1IjoicmVudGluZWFzZSIsImEiOiJjbDZ6ODRxaDIwMXh5M3FxeXIza2VzZm5mIn0.lXvnhh-TY3UCIKNbUxLLjA';
         var FourSquareApiKey = 'fsq3xvdsfE9OmcUC2/5qjOd5mRDVbqpgtEz8CXnDV+k8xEk=';
        //  fetch_loca('place.7148467886841210')
         //   function fetch_loca(city) {
         //      return fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${city}.json?access_token=${accessToken}`)
         //          .then(response => response.json())
         //          .then(data => {
         //              var latitude = data.features[0].geometry.coordinates[0];
         //              var longtitude = data.features[0].geometry.coordinates[1];
         //              console.log(latitude);
         //              console.log(longtitude);

         //              console.log(data);

         //          })
         //  }
         const options = {
             method: 'GET',
             headers: {
                 Accept: 'application/json',
                 Authorization: FourSquareApiKey,
             }
         };

         fetch('https://api.foursquare.com/v3/places/search?query=dubai', options)
             .then(response => response.json())
             .then(response => console.log(response))
             .catch(err => console.error(err));

         //  var map = new mapboxgl.Map({
         //       container: 'map',
         //       style: 'mapbox://styles/mapbox/streets-v11'
         //   });
     </script>
 @endpush
