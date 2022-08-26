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
                                 <div class="row">

                                     {{-- Rent, Sale --}}

                                     <div class="col-md-6 text-center">

                                         <div class="wrapper">
                                             <input type="radio" name="select" id="option-1" checked>
                                             <label for="option-1" class="option option-1">
                                                 <div class="dot"></div>
                                                 <span>Rent</span>
                                             </label>

                                         </div>

                                     </div>
                                     <div class="col-md-6 text-center">
                                         <div class="wrapper">
                                             <input type="radio" name="select" id="option-2">

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
                                             <input type="radio" name="select1" id="option-3" checked>
                                             <label for="option-3" class="optionnew option-3">
                                                 <div class="dot"></div>
                                                 <span>Commercial</span>
                                             </label>
                                         </div>

                                     </div>

                                     <div class="col-md-6 text-center">
                                         <div class="wrapper">
                                             <input type="radio" name="select1" id="option-4">
                                             <label for="option-4" class="optionnew option-4">
                                                 <div class="dot"></div>
                                                 <span>Residential</span>
                                             </label>
                                         </div>
                                     </div>
                                 </div>



                                 {{-- Property type Commercial --}}


                                 <div class="row">
                                     <div class="col-md-6 mt-2">
                                         <label for="">Property type Commercial</label>
                                         <select id="access_agent">
                                             <option>Select Option</option>
                                             <option>1</option>
                                             <option>2 </option>
                                             <option>3</option>
                                             <option>4 </option>
                                             <option>5</option>
                                             <option>6 </option>
                                             <option>7</option>
                                             <option>8 </option>
                                             <option>9</option>
                                             <option>10</option>
                                         </select>

                                     </div>
                                     <div class="col-md-6 mt-2">
                                         <label for="">Property type Residential</label>
                                         <select>
                                             <option>Select Option</option>
                                             <option>1</option>
                                             <option>2 </option>
                                             <option>3</option>
                                             <option>4 </option>
                                             <option>5</option>
                                             <option>6 </option>
                                             <option>7</option>
                                             <option>8 </option>
                                             <option>9</option>
                                             <option>10</option>
                                         </select>
                                     </div>
                                 </div>


                                 {{-- select layout start --}}

                                 <div class="row">

                                     <div class="col-md-6 mt-2">
                                         <label for="">Select Layout</label>
                                         <select>
                                             <option>Select Option</option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option id="customs01" onclick="customs()">Custom </option>
                                         </select>
                                         <label class="custom_label" id="custom02">Custom
                                             <input type="number" name="custom" id="" class="form-control">
                                         </label>
                                     </div>

                                     <div class="col-md-6 mt-2">
                                         <label for="">Select Layout</label>
                                         <select>
                                             <option>Select Option</option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option>Electronics</option>
                                             <option>Sports </option>
                                             <option id="customs01" onclick="customs()">Custom</option>
                                         </select>
                                         <label class="custom_label d-none" id="custom02">Custom
                                             <input type="number" name="custom" id="" class="form-control">
                                         </label>
                                     </div>

                                 </div>


                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="row">
                                             <div class="col-md-6 mt-2">
                                                 <label for="">Size</label>
                                                 <input class="newinput" type="number">
                                             </div>
                                             <div class="col-md-6 select_input_col">
                                                 <select>
                                                     <option>Square Feet</option>
                                                     <option>Square metre</option>
                                                 </select>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6 mt-2">
                                         <label class="d-block" for="">
                                             Building name / No
                                         </label>
                                         <input class="newinput" type="text" placeholder="Building name / No">
                                     </div>
                                 </div>




                                 <div class="row">
                                     <div class="col-md-6 mt-2">
                                         <label>Building age</label>
                                         <select>
                                             <option>Brand New Building</option>
                                             <option>1 Year Old</option>
                                             <option>2 years Old</option>
                                             <option>3 years Old</option>
                                             <option>Custom</option>
                                         </select>
                                     </div>
                                     <div class="col-md-6 mt-2">
                                         <label>Price</label> <br>
                                         <input class="newinput" placeholder="Enter Price" type="number">
                                     </div>
                                 </div>





                                 <div class="row">
                                     <div class="col-md-6 mt-2">
                                         <label>City</label>
                                         <select>
                                             <option>Dubai</option>
                                             <option>Abu Dhabi</option>
                                             <option>Sharjah</option>
                                             <option>Ras al Khaimah</option>
                                             <option>Fujairah</option>
                                             <option>Ajman</option>
                                             <option>Umm Al Quwain</option>
                                         </select>
                                     </div>

                                     <div class="col-md-6 mt-2">
                                         <label>Area</label>
                                         <select>
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
                                             <input type="file" size="60">
                                         </label>
                                     </div>

                                     <div class="col-md-6 mb-3 mt-4">
                                         <label class="file_label">
                                             <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Add Video
                                             <input type="file" size="60">
                                         </label>
                                     </div>
                                 </div>


                                 {{-- 360 wala funda --}}

                                 <div class="row">
                                     <div class="col-md-6 mb-3 mt-1">
                                         <label class="file_label">
                                             <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Add Photos
                                             <input type="file" size="60">
                                         </label>
                                     </div>

                                     <div class="col-md-6 mb-3 mt-1">
                                         <label class="file_label">
                                             <i class="fa fa-upload" aria-hidden="true"></i> &nbsp; Add Video
                                             <input type="file" size="60">
                                         </label>
                                     </div>
                                 </div>



                                 {{-- furnishing --}}





                                 <div class="row">
                                     <div class="col-md-12">
                                         <label>Furnishing</label>
                                         <select>
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
                                             <label>City</label>
                                             <select>
                                                 <option>Standard</option>
                                                 <option>Featured</option>
                                                 <option>Hot</option>
                                                 <option>Offer</option>
                                             </select>
                                         </div>
                                         <div class="col-md-6">
                                             <label>Cost</label> <br>
                                             <input class="newinput" placeholder="Coins" type="number">
                                         </div>
                                     </div>


                                     <div class="row mt-4">
                                         <div class="col-md-12">
                                             <button class="btn btn-success save_btn">
                                                 Save
                                             </button>
                                         </div>
                                     </div>














                                     {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Purpose Type
                                                    <select name="purpose_type" id="" class="form-control w-110">
                                                        <option value="">Select Purpose</option>
                                                        @forelse ($purposes as $purpose)
                                                            <option value="{{ $purpose->id }}"
                                     @if (old('purpose_type') == '{{ $purpose->id }}') selected @endif>
                                     {{ $purpose->name }}
                                     </option>
                                     @empty
                                     @endforelse
                                     </select>
                                     </label>
                                     @error('purpose_type')
                                     <div class="text-danger">{{ $message }}</div>
                                     @enderror
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label>Property Type
                                         <select name="property_type" id="property" class="form-control w-110">
                                             <option value="">Select Property Type</option>
                                             @forelse ($place_types as $property)
                                             <option value="{{ $property->id }}" @if (old('property_type')=='{{ $property->id }}' ) selected @endif>
                                                 {{ $property->name }}
                                             </option>
                                             @empty
                                             @endforelse
                                         </select>
                                     </label>
                                     @error('purpose_type')
                                     <div class="text-danger">{{ $message }}</div>
                                     @enderror
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-3 d-none" id="commercial">
                                     <div class="form-group">
                                         <label>Property type Commercial
                                             <select name="property_type_commercial" id="" class="form-control w-110">
                                                 <option value="">Select Property type Commercial</option>
                                                 @forelse ($place_types[0]->place as $placed_type)
                                                 <option value="{{ $placed_type->id }}" @if (old('property_type_commercial')=='{{ $placed_type->id }}' ) selected @endif>
                                                     {{ $placed_type->name }}
                                                 </option>
                                                 @empty
                                                 <option value="">No Property type Commercial</option>
                                                 @endforelse
                                             </select>
                                         </label>
                                         @error('place_type')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3 d-none" id="residential">
                                     <div class="form-group">
                                         <label>Property type Residential
                                             <select name="property_type_residential" class="form-control w-110">
                                                 <option value="">Select Property type Residential</option>
                                                 @forelse ($place_types[1]->place as $placed_type)
                                                 <option value="{{ $placed_type->id }}" @if (old('property_type_residential')=='{{ $placed_type->id }}' ) selected @endif>
                                                     {{ $placed_type->name }}
                                                 </option>
                                                 @empty
                                                 <option value="">No Property type Residential</option>
                                                 @endforelse
                                             </select>
                                         </label>
                                         @error('place_type')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3 d-none" id="layout">
                                     <div class="form-group">
                                         <label>Select Layout
                                             <input type="number" name="layout" value="{{ old('layout') }}" class="form-control">
                                         </label>
                                         @error('layout')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3 d-none" id="bath">
                                     <div class="form-group">
                                         <label>Bath
                                             <input type="number" name="bath" value="{{ old('bath') }}" class="form-control">
                                         </label>
                                         @error('bath')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Size(Square Feet/Square Meter)
                                             <input type="text" name="size" value="{{ old('size') }}" class="form-control">
                                         </label>
                                         @error('size')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Building Name/No
                                             <input type="text" name="building_name" value="{{ old('building_name') }}" class="form-control">
                                         </label>
                                         @error('building_name')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Building Age
                                             <input type="text" name="building_age" value="{{ old('building_age') }}" class="form-control">
                                         </label>
                                         @error('building_age')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Price:
                                             <input type="number" name="price" value="{{ old('price') }}" class="form-control date">
                                         </label>
                                         @error('price')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Price Per:
                                             <select name="price_per" id="" class="form-control">
                                                 <option value="">No Price Per</option>
                                                 <option value="day" @if (old('price_per')=='day' ) selected @endif>Day</option>
                                                 <option value="week" @if (old('price_per')=='week' ) selected @endif>Week</option>
                                                 <option value="month" @if (old('price_per')=='month' ) selected @endif>Month</option>
                                                 <option value="year" @if (old('price_per')=='year' ) selected @endif>Year</option>
                                             </select>
                                         </label>
                                         @error('price_per')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>City
                                             <select name="city" class="form-control w-110">
                                                 <option value="">Select City</option>
                                                 @forelse ($cities as $city)
                                                 <option value="{{ $city->id }}" @if (old('city')=='{{ $city->id }}' ) selected @endif>
                                                     {{ $city->name }}
                                                 </option>
                                                 @empty
                                                 <option value="">No City</option>
                                                 @endforelse
                                             </select>
                                         </label>
                                         @error('purpose_type')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Area
                                             <select name="area" class="form-control w-110">
                                                 <option value="">Select Area</option>
                                                 @forelse ($cities as $city)
                                                 <option value="{{ $city->id }}" @if (old('city')=='{{ $city->id }}' ) selected @endif>
                                                     {{ $city->name }}
                                                 </option>
                                                 @empty
                                                 <option value="">No City</option>
                                                 @endforelse
                                             </select>
                                         </label>
                                         @error('purpose_type')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>

                             </div>
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Agent EID
                                             <input type="file" name="agent_eid" value="{{ old('agent_eid') }}" class="form-control">
                                         </label>
                                         @error('agent_eid')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Licence
                                             <input type="file" name="licence" value="{{ old('licence') }}" class="form-control">
                                         </label>
                                         @error('licence')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Agent Visa
                                             <input type="file" name="agent_visa" value="{{ old('agent_visa') }}" class="form-control">
                                         </label>
                                         @error('agent_visa')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>RERA
                                             <input type="file" name="rera" value="{{ old('rera') }}" class="form-control">
                                         </label>
                                         @error('rera')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Additional Documents
                                             <input type="file" name="additional_documents" value="{{ old('additional_documents') }}" class="form-control">
                                         </label>
                                         @error('additional_documents')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label>Agent Photo
                                             <input type="file" name="logo" value="{{ old('logo') }}" class="form-control">
                                         </label>
                                         @error('logo')
                                         <div class="text-danger">{{ $message }}</div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12 justify-content-center offset-md-4">
                                     <button type="submit" class="btn btn-success w-100 col-md-4">Save</button>
                                 </div>
                             </div> --}}
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
         $("input[type='radio']").click(function() {
             var radioValue = $("input[name='select1']:checked").val();
             if (radioValue) {
                 alert("Your are a - " + radioValue);
             }
         });
     });
     
 </script>
 @endpush
 {{-- @push('scripts')
    <script>
        $(document).ready(function() {
            $("#property").on('change', function() {
                var selectedText = $(this).find("option:selected").text().trim();
                var selectedValue = $(this).val();
                if (selectedText == 'Commercial' && selectedValue == 1) {
                    $('#residential').addClass('d-none');
                    $('#commercial').removeClass('d-none');
                } else {
                    $('#commercial').addClass('d-none');
                    $('#residential').removeClass('d-none');
                }
            });
        });
    </script>
    @endpush --}}