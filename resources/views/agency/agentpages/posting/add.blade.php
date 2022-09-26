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
                                                 <input type="radio" name="purpose" value="rent" id="option-1"
                                                     @if (old('purpose') == 'rent') checked @endif checked>
                                                 <label for="option-1" class="option option-1">
                                                     <div class="dot"></div>
                                                     <span>Rent</span>
                                                 </label>
                                             </div>

                                         </div>
                                         <div class="col-md-6 text-center">
                                             <div class="wrapper">
                                                 <input type="radio" name="purpose" value="sale" id="option-2"
                                                     @if (old('purpose') == 'sale') checked @endif>
                                                 <label for="option-2" class="option option-2">
                                                     <div class="dot"></div>
                                                     <span>Sale</span>
                                                 </label>
                                             </div>
                                         </div>
                                         @error('purpose')
                                             <span class="text-danger">{{ $message }}</span>
                                         @enderror
                                     </div>
                                     {{-- Commercial, Residential --}}
                                     <div class="row">
                                         <div class="col-md-6 text-center">
                                             <div class="wrapper">
                                                 <input type="radio" name="place_type" value="commercial" id="option-3"
                                                     @if (old('place_type') == 'commercial') checked @endif checked>
                                                 <label for="option-3" class="optionnew option-3">
                                                     <div class="dot"></div>
                                                     <span>Commercial</span>
                                                 </label>
                                             </div>
                                         </div>
                                         <div class="col-md-6 text-center">
                                             <div class="wrapper">
                                                 <input type="radio" name="place_type" value="residential" id="option-4"
                                                     @if (old('place_type') == 'residential') checked @endif>
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
                                                     <option value="{{ $place_type->id }}"
                                                         @if ($place_type->id == old('p_commercial')) selected @endif>
                                                         {{ $place_type->name }}</option>
                                                 @endforeach
                                             </select>
                                             @error('p_commercial')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                         {{-- Property type Residential --}}
                                         <div class="col-md-12 mt-2 d-none" id="p_residential">
                                             <label for="">Property type Residential</label>
                                             <select name="p_residential">
                                                 <option value="">Select Option</option>
                                                 @foreach ($place_types[1]->place as $place_type)
                                                     <option value="{{ $place_type->id }}"
                                                         @if ($place_type->id == old('p_residential')) selected @endif>
                                                         {{ $place_type->name }}</option>
                                                 @endforeach
                                             </select>
                                             @error('p_residential')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="row">
                                         {{-- select layout start --}}
                                         <div class="col-md-6 mt-2 d-none" id="layout">
                                             <label for="">Select Layout</label>
                                             <select name="layout" id="s_layout">
                                                 <option value="">Select Option</option>
                                                 <option value="Studio" @if (old('layout') == 'Studio') selected @endif>
                                                     Studio</option>
                                                 @for ($i = 1; $i <= 10; $i++)
                                                     <option value="{{ $i }}"
                                                         @if ($i == old('layout')) selected @endif>
                                                         {{ $i }}</option>
                                                 @endfor
                                                 <option value="custom" @if (old('layout') == 'custom') selected @endif>
                                                     Custom </option>
                                             </select>
                                             @error('layout')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                             <label class="custom_label d-none" id="custom01">Custom
                                                 <input type="number" name="l_custom" id=""
                                                     value="{{ old('l_custom') }}" class="form-control">
                                             </label>
                                             @error('l_custom')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                         {{-- select bath --}}
                                         <div class="col-md-6 mt-2 d-none" id="bath">
                                             <label for="">Select Bath</label>
                                             <select name="bath" id="s_bath">
                                                 <option value="">Select Option</option>
                                                 @for ($i = 1; $i <= 10; $i++)
                                                     <option value="{{ $i }}"
                                                         @if ($i == old('bath')) selected @endif>
                                                         {{ $i }}</option>
                                                 @endfor
                                                 <option value="custom" @if (old('bath') == 'custom') selected @endif>
                                                     Custom </option>
                                             </select>
                                             @error('bath')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                             <label class="custom_label d-none" id="custom02">Custom
                                                 <input type="number" name="b_custom" id=""
                                                     value="{{ old('b_custom') }}" class="form-control">
                                             </label>
                                             @error('b_custom')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="row">
                                                 <div class="col-md-6 mt-2">
                                                     <label for="">Size</label>
                                                     <input class="newinput" type="number" value="{{ old('size') }}"
                                                         name="size">
                                                     @error('size')
                                                         <span class="text-danger">{{ $message }}</span>
                                                     @enderror
                                                 </div>
                                                 <div class="col-md-6 select_input_col ">
                                                     <select name="size_square">
                                                         <option value="">Select Size Square</option>
                                                         <option value="Square Feet"
                                                             @if (old('size_square') == 'Square Feet') selected @endif>
                                                             Square Feet</option>
                                                         <option value="Square metre"
                                                             @if (old('size_square') == 'Square metre') selected @endif>
                                                             Square metre</option>
                                                     </select>
                                                 </div>
                                                 <div class="row d-flex justify-content-end">
                                                     @error('size_square')
                                                         <span class="text-danger pr-5">{{ $message }}</span>
                                                     @enderror
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-6 mt-2">
                                             <label class="d-block" for="">
                                                 Building name / No
                                             </label>
                                             <input class="newinput" type="text" value="{{ old('building_no') }}"
                                                 placeholder="Building name / No" name="building_no">
                                             @error('building_no')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 mt-2" id="building_age">
                                             <label>Building age</label>
                                             <select name="building_age" id="s_building_age">
                                                 <option value="">Select Building age</option>
                                                 <option value="Brand New Building"
                                                     @if (old('building_age') == 'Brand New Building') selected @endif>
                                                     Brand New Building</option>
                                                 @for ($i = 1; $i <= 10; $i++)
                                                     <option value="{{ $i }}"
                                                         @if (old('building_age') == $i) selected @endif>
                                                         {{ $i }} years old
                                                     </option>
                                                 @endfor
                                                 <option value="custom"
                                                     @if (old('building_age') == 'custom') selected @endif>
                                                     Custom</option>
                                             </select>
                                             @error('building_age')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                             <label class="custom_label d-none" id="custom03">Custom
                                                 <input type="number" name="build_age_custom"
                                                     value="{{ old('build_age_custom') }}" id=""
                                                     class="form-control">
                                             </label>
                                             @error('build_age_custom')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                         <div class="col-md-6 mt-2">
                                             <label>Price</label>
                                             <input class="newinput" value="{{ old('price') }}"
                                                 placeholder="Enter Price" type="number" name="price">
                                             @error('price')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                     </div>
                                     {{-- furnishing --}}
                                     <div class="row">
                                         <div class="col-md-6 mt-2">
                                             <label>Price per</label>
                                             <select name="price_per">
                                                 <option value="">Select Price Per</option>
                                                 <option value="Day"
                                                     @if (old('price_per') == 'Day') selected @endif>Day</option>
                                                 <option value="Week"
                                                     @if (old('price_per') == 'Week') selected @endif>>Week</option>
                                                 <option value="Month"
                                                     @if (old('price_per') == 'Month') selected @endif>>Month</option>
                                                 <option value="Year"
                                                     @if (old('price_per') == 'Year') selected @endif>>Year</option>
                                             </select>
                                             @error('price_per')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                         <div class="col-md-6 mt-2">
                                             <label>Furnishing</label>
                                             <select name="furnishing">
                                                 <option value="">Select Furnishing</option>
                                                 <option value="Furnished"
                                                     @if (old('furnishing') == 'Furnished') selected @endif>Furnished</option>
                                                 <option value="Unfurnished"
                                                     @if (old('furnishing') == 'Unfurnished') selected @endif>Unfurnished
                                                 </option>
                                                 <option value="Semi"
                                                     @if (old('furnishing') == 'Semi') selected @endif>Semi</option>
                                                 <option value="Furnished"
                                                     @if (old('furnishing') == 'Furnished') selected @endif>Furnished</option>
                                             </select>
                                             @error('furnishing')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 mt-2">
                                             <label>City</label>
                                             <select name="city" id="s_city">
                                                 <option value="">Select City</option>
                                                 <option value="Dubai"
                                                     @if (old('city') == 'Dubai') selected @endif>Dubai</option>
                                                 <option value="Abu Dhabi"
                                                     @if (old('city') == 'Abu Dhabi') selected @endif>Abu Dhabi</option>
                                                 <option value="Sharjah"
                                                     @if (old('city') == 'Sharjah') selected @endif>Sharjah</option>
                                                 <option value="Ras al Khaimah"
                                                     @if (old('city') == 'Ras al Khaimah') selected @endif>Ras al Khaimah
                                                 </option>
                                                 <option value="Fujairah"
                                                     @if (old('city') == 'Fujairah') selected @endif>Fujairah</option>
                                                 <option value="Ajman"
                                                     @if (old('city') == 'Ajman') selected @endif>Ajman</option>
                                                 <option value="Umm Al Quwain"
                                                     @if (old('city') == 'Umm Al Quwain') selected @endif>Umm Al Quwain
                                                 </option>
                                             </select>
                                             @error('city')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                         <div class="col-md-6 mt-2">
                                             <label>Area</label>
                                             <select name="area" id="s_area">
                                                 <option value="">Select Area</option>
                                             </select>
                                             @error('area')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                             <input type="hidden" name="a_lat" id="a_lat"
                                                 value="{{ old('a_lat') }}">
                                             <input type="hidden" name="a_lon" id="a_lon"
                                                 value="{{ old('a_lon') }}">
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12 mb-3 mt-4">
                                             <div id='map' style='width: 100%; height: 300px; '></div>
                                         </div>
                                         {{-- <div class="col-md-6 mb-3 mt-4">
                                            <label class="file_label">
                                                <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Add Video
                                                <input type="file" name="video[]" multiple>
                                            </label>
                                        </div> --}}
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6 mb-3 mt-4">
                                             <label class="file_label">
                                                 <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Add Photos
                                                 <input type="file" name="photos[]" multiple>
                                             </label>
                                         </div>
                                         <div class="col-md-6 mb-3 mt-4">
                                             <label class="file_label">
                                                 <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Add Video
                                                 <input type="file" name="video[]" multiple>
                                             </label>
                                         </div>
                                     </div>
                                     {{-- 360 --}}
                                     <div class="row">
                                         <div class="col-md-6 mb-3 mt-1">
                                             <label class="file_label">
                                                 <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; 360
                                                 <input type="file" name="three_sixty[]" multiple>
                                             </label>
                                         </div>
                                         <div class="col-md-6 mb-3 mt-1">
                                             <label class="file_label">
                                                 <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Floor Plan/Layout
                                                 <input type="file" name="floor_plan_layout[]" multiple>
                                             </label>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12 mt-4">
                                             <fieldset>
                                                 <legend>Amenities</legend>
                                                 <div class="row">
                                                     <div class="col-md-2">
                                                         <label>Central A/C
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Central A/C">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Maids Room
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Maids Room">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Balcony
                                                             <input type="checkbox" name="amenities[]" value="Balcony">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Shared Pool
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Shared Poo">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Shared Spa
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Shared Spa">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label class="container">Shared
                                                             <input type="checkbox" name="amenities[]" value="Shared">
                                                             <span class="checkmark"></span>
                                                         </label>
                                                     </div>
                                                 </div>
                                                 <div class="row">
                                                     <div class="col-md-2">
                                                         <label>Gym
                                                             <input type="checkbox" name="amenities[]" value="Gym">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Concierge
                                                             <input type="checkbox" name="amenities[]" value="Concierge">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Service
                                                             <input type="checkbox" name="amenities[]" value="Service">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Covered Parking
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Covered Parking">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>View of Water
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="View of Water">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label class="container">View of Landmark
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="View of Landmark">
                                                             <span class="checkmark"></span>
                                                         </label>
                                                     </div>
                                                 </div>
                                                 <div class="row">
                                                     <div class="col-md-2">
                                                         <label>Pets
                                                             <input type="checkbox" name="amenities[]" value="Pets">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Allowed
                                                             <input type="checkbox" name="amenities[]" value="Allowed">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Study Room
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Study Room">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Private Garden
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Private Garden">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Private Poo
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Private Poo">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label class="container">Private Gym
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Private Gym">
                                                             <span class="checkmark"></span>
                                                         </label>
                                                     </div>
                                                 </div>
                                                 <div class="row">
                                                     <div class="col-md-2">
                                                         <label>Private Jacuzzi
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Private Jacuzzi">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Built in
                                                             <input type="checkbox" name="amenities[]" value="Built in">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Wardrobes
                                                             <input type="checkbox" name="amenities[]" value="Wardrobes">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Walk-in Close
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Walk-in Close">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Built in Kitchen Appliances
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Built in Kitchen Appliances">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label class="container">Maid Service
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Maid Service">
                                                             <span class="checkmark"></span>
                                                         </label>
                                                     </div>
                                                 </div>
                                                 <div class="row">
                                                     <div class="col-md-2">
                                                         <label>Children's
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Children's">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Play Area
                                                             <input type="checkbox" name="amenities[]" value="Play Area">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Children's Pool
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Children's Pool">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Barbecue Area
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Barbecue Area">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label>Basement Parking
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Basement Parking">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-2">
                                                         <label class="container">Covered Parking
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Covered Parking">
                                                             <span class="checkmark"></span>
                                                         </label>
                                                     </div>
                                                 </div>
                                                 <div class="row">
                                                     <div class="col-md-4">
                                                         <label>Garage parking
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Garage parking">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-4">
                                                         <label>Community Parking
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Community Parking">
                                                         </label>
                                                     </div>
                                                     <div class="col-md-4">
                                                         <label>Street Parking
                                                             <input type="checkbox" name="amenities[]"
                                                                 value="Street Parking">
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
                                             <input class="newinput" placeholder="Enter Title"
                                                 value="{{ old('title') }}" type="number" name="title">
                                             @error('title')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                         <div class="col-md-6">
                                             <label>Discription</label> <br>
                                             <textarea class="text_area w-100" name="description" value="{{ old('description') }}"></textarea>
                                             @error('description')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                         </div>
                                     </div>
                                     {{-- listing fields --}}
                                     <div class="row mt-3">
                                         <div class="col-md-6">
                                             <label>Listing Type</label>
                                             <select name="listning_type" id="s_listning_type">
                                                 <option value="">Select Listing Type</option>
                                                 @foreach ($coins_deduct as $deduct)
                                                     <option value="{{ $deduct->id }}"
                                                         @if (old('listning_type') == $deduct->id) selected @endif>
                                                         {{ $deduct->packages->name }}
                                                     </option>
                                                 @endforeach
                                             </select>
                                             @error('listning_type')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
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
                         </form>
                     </div>
                 </div>
             </div>
     </div>

     </section>
 @endsection
 @push('scripts')
     <script>
         $(document).ready(function() {
             var oldvalue = "{{ old('place_type') }}"
             $(window).on('load', function() {
                 $("#s_layout").trigger('change');
                 $("#s_bath").trigger('change');
                 $("#s_building_age").trigger('change');
                 $("#s_listning_type").trigger('change');
             });
             if (oldvalue) {
                 if (oldvalue == 'commercial') {
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
             }
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
     <script>
         var selectedCity;
         var selectedCityId;
         $(document).ready(function() {
             $("#s_city").on('change', function() {
                 selectedCity = $(this).find("option:selected").val();
                 fetch_loca(selectedCity);
             });
             $("#s_area").on('change', function() {
                 selectedArea = $(this).find("option:selected").text();
                 fetch_area(selectedArea);
             });
         });

         //  var accessToken = 'ruxtrh7125';
         //fetch city id
         //  function fetch_loca(selectedCity) {
         //      //13933634117436396

         //      return fetch(`https://catalog.api.2gis.com/3.0/items?q=${selectedCity}&type=adm_div.city&key=${accessToken}`)
         //          .then(response => response.json())
         //          .then(data => {
         //              //   console.log(data.result);
         //              console.log(data.result.items[0].id);
         //              selectedCityId = data.result.items[0].id;
         //              fetch_areas(selectedCityId);
         //          })
         //  }
         //  //fetch area details
         //  function fetch_area(selectedArea) {
         //      return fetch(
         //              `https://catalog.api.2gis.com/3.0/items/geocode?q=${selectedArea}&fields=items.point&key=${accessToken}`
         //          )
         //          .then(response => response.json())
         //          .then(data => {
         //              console.log(data.result);
         //              $('#a_lat').val(data.result.items[0].point.lat)
         //              $('#a_lon').val(data.result.items[0].point.lon)
         //          })
         //  }
         //  //fetch areas
         //  function fetch_areas(selectedCityId) {
         //      return fetch(
         //              `https://catalog.api.2gis.com/3.0/items?q=area&city_id=${selectedCityId}&fields=items.address&key=${accessToken}`
         //          )
         //          .then(response => response.json())
         //          .then(data => {
         //              console.log(data.result);
         //              var html = '';
         //              $.each(data.result.items, function(index, value) {
         //                  //  console.log(value.id);
         //                  var option = '';
         //                  if (value.full_name) {
         //                      option = `<option value="${value.full_name}">${value.full_name}</option>`;
         //                  }
         //                  html += option;
         //              });
         //              var firstOption = `<option value=''>Select Area</option>`;;
         //              $('#s_area').html(firstOption);
         //              $('#s_area').append(html);
         //          });
         //  }
         mapboxgl.accessToken =
             'pk.eyJ1IjoicmVudGluZWFzZSIsImEiOiJjbDZ6ODRxaDIwMXh5M3FxeXIza2VzZm5mIn0.lXvnhh-TY3UCIKNbUxLLjA';
         const map = new mapboxgl.Map({
             container: 'map', // container ID
             style: 'mapbox://styles/mapbox/streets-v11', // style URL
             center: [55.2708, 25.2048], // starting position [lng, lat]
             zoom: 10, // starting zoom
         });
         const marker = new mapboxgl.Marker() // initialize a new marker
             .setLngLat([55.2708, 25.2048]) // Marker [lng, lat] coordinates
             .addTo(map); // Add the marker to the map
         const geocoder = new MapboxGeocoder({
             // Initialize the geocoder
             accessToken: mapboxgl.accessToken, // Set the access token
             mapboxgl: mapboxgl, // Set the mapbox-gl instance
             marker: true // Do not use the default marker style
             //  placeholder: 'Search for places in Dubai', // Placeholder text for the search
             //  bar
             //  bbox: [55.2708, 25.2048, 55.2708, 25.2048], // Boundary for Berkeley
             //  proximity: {
             //      longitude: 55.2708,
             //      latitude: 25.2048
             //  } // Coordinates of UC Berkeley
         });
         // Add the geocoder to the map
         map.addControl(geocoder);
         // After the map style has loaded on the page,
         // add a source layer and default styling for a single point
         map.on('load', () => {
             map.addSource('single-point', {
                 type: 'geojson',
                 data: {
                     type: 'FeatureCollection',
                     features: []
                 }
             });

             map.addLayer({
                 id: 'point',
                 source: 'single-point',
                 type: 'circle',
                 paint: {
                     'circle-radius': 10,
                     'circle-color': '#448ee4'
                 }
             });
         });
         geocoder.on('result', (event) => {
             map.getSource('single-point').setData(event.result.geometry);
         });
         // Listen for the `result` event from the Geocoder
         // `r
     </script>
 @endpush
