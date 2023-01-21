@extends('client.layout.master')

@section('content')
<!-- ============================ Hero Banner  Start================================== -->
<div class="image-cover hero_banner bannarimg" data-overlay="0">
    <div class="container">

        <h1 class="big-header-capt mb-0">Search Your Next Home</h1>
        <p class="text-center mb-4">Find new & featured property located in your local city.</p>
        <!-- Type -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="simple_tab_search center">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="true">Buy</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="sell-tab" data-toggle="tab" href="#sell" role="tab" aria-controls="sell" aria-selected="false">Sell</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="false">Rent</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- Tab for Buy -->
                        <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                            <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                                <div class="search_hero_wrapping">

                                    <div class="row">

                                        <div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
                                            <div class="form-group">
                                                <label>Price Range</label>
                                                <input type="text" class="form-control search_input b-0" placeholder="ex. Neighborhood" />
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>City/Street</label>
                                                <div class="input-with-icon">
                                                    <select id="location" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">New York City</option>
                                                        <option value="2">Honolulu, Hawaii</option>
                                                        <option value="3">Rentinease</option>
                                                        <option value="4">New Orleans</option>
                                                        <option value="5">Washington</option>
                                                        <option value="6">Charleston</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Property Type</label>
                                                <div class="input-with-icon">
                                                    <select id="ptypes" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">All categories</option>
                                                        <option value="2">Apartment</option>
                                                        <option value="3">Villas</option>
                                                        <option value="4">Commercial</option>
                                                        <option value="5">Offices</option>
                                                        <option value="6">Garage</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-12">
                                            <div class="form-group none">
                                                <a class="collapsed ad-search" data-toggle="collapse" data-parent="#search" data-target="#advance-search" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h mr-2"></i>Advance Filter</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-12 small-padd">
                                            <div class="form-group none">
                                                <a href="#" class="btn search-btn">Search Property</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Collapse Advance Search Form -->
                                    <div class="collapse" id="advance-search" aria-expanded="false" role="banner">

                                        <!-- row -->
                                        <div class="row">

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="form-group none style-auto">
                                                    <select id="bedrooms" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="form-group none style-auto">
                                                    <select id="bathrooms" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="form-group none">
                                                    <input type="text" class="form-control" placeholder="min sqft" />
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="form-group none">
                                                    <input type="text" class="form-control" placeholder="max sqft" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /row -->

                                        <!-- row -->
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                                                <h6 class="text-dark">Advance Price</h6>
                                                <div class="rg-slider">
                                                    <input type="text" class="js-range-slider" name="my_range" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /row -->

                                        <!-- row -->
                                        <div class="row">

                                            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                <h4 class="text-dark">Amenities & Features</h4>
                                                <ul class="no-ul-list third-row">
                                                    <li>
                                                        <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                                        <label for="a-1" class="checkbox-custom-label">Air Condition</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                                        <label for="a-2" class="checkbox-custom-label">Bedding</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
                                                        <label for="a-3" class="checkbox-custom-label">Heating</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                                        <label for="a-4" class="checkbox-custom-label">Internet</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
                                                        <label for="a-5" class="checkbox-custom-label">Microwave</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                                        <label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                                        <label for="a-7" class="checkbox-custom-label">Terrace</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                                        <label for="a-8" class="checkbox-custom-label">Balcony</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                                        <label for="a-9" class="checkbox-custom-label">Icon</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
                                                        <label for="a-10" class="checkbox-custom-label">Wi-Fi</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
                                                        <label for="a-11" class="checkbox-custom-label">Beach</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
                                                        <label for="a-12" class="checkbox-custom-label">Parking</label>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- /row -->

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tab for Sell -->
                        <!-- <div class="tab-pane fade" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                            <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                                <div class="search_hero_wrapping">

                                    <div class="row">

                                        <div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
                                            <div class="form-group">
                                                <label>Price Range</label>
                                                <input type="text" class="form-control search_input b-0" placeholder="ex. Neighborhood" />
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>City/Street</label>
                                                <div class="input-with-icon">
                                                    <select id="lot-1" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">New York City</option>
                                                        <option value="2">Honolulu, Hawaii</option>
                                                        <option value="3">Rentinease</option>
                                                        <option value="4">New Orleans</option>
                                                        <option value="5">Washington</option>
                                                        <option value="6">Charleston</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Property Type</label>
                                                <div class="input-with-icon">
                                                    <select id="ptype-1" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">All categories</option>
                                                        <option value="2">Apartment</option>
                                                        <option value="3">Villas</option>
                                                        <option value="4">Commercial</option>
                                                        <option value="5">Offices</option>
                                                        <option value="6">Garage</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-12">
                                            <div class="form-group none">
                                                <a class="collapsed ad-search" data-toggle="collapse" data-parent="#search1" data-target="#advance-search-1" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h mr-2"></i>Advance Filter</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-12 small-padd">
                                            <div class="form-group none">
                                                <a href="#" class="btn search-btn">Search Property</a>
                                            </div>
                                        </div>
                                    </div>

                                    Collapse Advance Search Form commit this
                        <div class="collapse" id="advance-search-1" aria-expanded="false" role="banner">

                         row commit this
                            <div class="row">

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group none style-auto">
                                        <select id="bedrooms1" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group none style-auto">
                                        <select id="bathrooms1" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group none">
                                        <input type="text" class="form-control" placeholder="min sqft" />
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group none">
                                        <input type="text" class="form-control" placeholder="max sqft" />
                                    </div>
                                </div>

                            </div>
                            /row commit this line 

                            row commit this line 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                                    <h6 class="text-dark">Advance Price</h6>
                                    <div class="rg-slider">
                                        <input type="text" class="js-range-slider" name="my_range" value="" />
                                    </div>
                                </div>
                            </div>
                            /row commit this line 

                            row commit this line 
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                    <h4 class="text-dark">Amenities & Features</h4>
                                    <ul class="no-ul-list third-row">
                                        <li>
                                            <input id="a-1a" class="checkbox-custom" name="a-1a" type="checkbox">
                                            <label for="a-1a" class="checkbox-custom-label">Air Condition</label>
                                        </li>
                                        <li>
                                            <input id="a-2b" class="checkbox-custom" name="a-2b" type="checkbox">
                                            <label for="a-2b" class="checkbox-custom-label">Bedding</label>
                                        </li>
                                        <li>
                                            <input id="a-3c" class="checkbox-custom" name="a-3c" type="checkbox">
                                            <label for="a-3c" class="checkbox-custom-label">Heating</label>
                                        </li>
                                        <li>
                                            <input id="a-4d" class="checkbox-custom" name="a-4d" type="checkbox">
                                            <label for="a-4d" class="checkbox-custom-label">Internet</label>
                                        </li>
                                        <li>
                                            <input id="a-5e" class="checkbox-custom" name="a-5e" type="checkbox">
                                            <label for="a-5e" class="checkbox-custom-label">Microwave</label>
                                        </li>
                                        <li>
                                            <input id="a-6f" class="checkbox-custom" name="a-6f" type="checkbox">
                                            <label for="a-6f" class="checkbox-custom-label">Smoking Allow</label>
                                        </li>
                                        <li>
                                            <input id="a-7g" class="checkbox-custom" name="a-7g" type="checkbox">
                                            <label for="a-7g" class="checkbox-custom-label">Terrace</label>
                                        </li>
                                        <li>
                                            <input id="a-8h" class="checkbox-custom" name="a-8h" type="checkbox">
                                            <label for="a-8h" class="checkbox-custom-label">Balcony</label>
                                        </li>
                                        <li>
                                            <input id="a-9i" class="checkbox-custom" name="a-9i" type="checkbox">
                                            <label for="a-9i" class="checkbox-custom-label">Icon</label>
                                        </li>
                                        <li>
                                            <input id="a-10j" class="checkbox-custom" name="a-10j" type="checkbox">
                                            <label for="a-10j" class="checkbox-custom-label">Wi-Fi</label>
                                        </li>
                                        <li>
                                            <input id="a-11k" class="checkbox-custom" name="a-11k" type="checkbox">
                                            <label for="a-11k" class="checkbox-custom-label">Beach</label>
                                        </li>
                                        <li>
                                            <input id="a-12l" class="checkbox-custom" name="a-12l" type="checkbox">
                                            <label for="a-12l" class="checkbox-custom-label">Parking</label>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            /row commit this line 

                    </div>

                </div>
            </div>

        </div> -->

                        <!-- Tab for Rent -->
                        <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                            <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                                <div class="search_hero_wrapping">

                                    <div class="row">

                                        <div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
                                            <div class="form-group">
                                                <label>Price Range</label>
                                                <input type="text" class="form-control search_input b-0" placeholder="ex. Neighborhood" />
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>City/Street</label>
                                                <div class="input-with-icon">
                                                    <select id="lot-2" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">New York City</option>
                                                        <option value="2">Honolulu, Hawaii</option>
                                                        <option value="3">Rentinease</option>
                                                        <option value="4">New Orleans</option>
                                                        <option value="5">Washington</option>
                                                        <option value="6">Charleston</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>Property Type</label>
                                                <div class="input-with-icon">
                                                    <select id="ptype-2" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">All categories</option>
                                                        <option value="2">Apartment</option>
                                                        <option value="3">Villas</option>
                                                        <option value="4">Commercial</option>
                                                        <option value="5">Offices</option>
                                                        <option value="6">Garage</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-12">
                                            <div class="form-group none">
                                                <a class="collapsed ad-search" data-toggle="collapse" data-parent="#search" data-target="#advance-search-2" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h mr-2"></i>Advance Filter</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-sm-12 small-padd">
                                            <div class="form-group none">
                                                <a href="#" class="btn search-btn">Search Property</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Collapse Advance Search Form -->
                                    <div class="collapse" id="advance-search-2" aria-expanded="false" role="banner">

                                        <!-- row -->
                                        <div class="row">

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="form-group none style-auto">
                                                    <select id="bedrooms2" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="form-group none style-auto">
                                                    <select id="bathrooms2" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="form-group none">
                                                    <input type="text" class="form-control" placeholder="min sqft" />
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="form-group none">
                                                    <input type="text" class="form-control" placeholder="max sqft" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /row -->

                                        <!-- row -->
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                                                <h6 class="text-dark">Advance Price</h6>
                                                <div class="rg-slider">
                                                    <input type="text" class="js-range-slider" name="my_range" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /row -->

                                        <!-- row -->
                                        <div class="row">

                                            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                <h4 class="text-dark">Amenities & Features</h4>
                                                <ul class="no-ul-list third-row">
                                                    <li>
                                                        <input id="a-a1" class="checkbox-custom" name="a-a1" type="checkbox">
                                                        <label for="a-a1" class="checkbox-custom-label">Air Condition</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-b2" class="checkbox-custom" name="a-b2" type="checkbox">
                                                        <label for="a-b2" class="checkbox-custom-label">Bedding</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-c3" class="checkbox-custom" name="a-c3" type="checkbox">
                                                        <label for="a-c3" class="checkbox-custom-label">Heating</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-d4" class="checkbox-custom" name="a-d4" type="checkbox">
                                                        <label for="a-d4" class="checkbox-custom-label">Internet</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-e5" class="checkbox-custom" name="a-e5" type="checkbox">
                                                        <label for="a-e5" class="checkbox-custom-label">Microwave</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-f6" class="checkbox-custom" name="a-f6" type="checkbox">
                                                        <label for="a-f6" class="checkbox-custom-label">Smoking Allow</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-g7" class="checkbox-custom" name="a-g7" type="checkbox">
                                                        <label for="a-g7" class="checkbox-custom-label">Terrace</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-h8" class="checkbox-custom" name="a-h8" type="checkbox">
                                                        <label for="a-h8" class="checkbox-custom-label">Balcony</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-i9" class="checkbox-custom" name="a-i9" type="checkbox">
                                                        <label for="a-i9" class="checkbox-custom-label">Icon</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-j10" class="checkbox-custom" name="a-j10" type="checkbox">
                                                        <label for="a-j10" class="checkbox-custom-label">Wi-Fi</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-k11" class="checkbox-custom" name="a-k11" type="checkbox">
                                                        <label for="a-k11" class="checkbox-custom-label">Beach</label>
                                                    </li>
                                                    <li>
                                                        <input id="a-l12" class="checkbox-custom" name="a-l12" type="checkbox">
                                                        <label for="a-l12" class="checkbox-custom-label">Parking</label>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <!-- /row -->

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
<!-- ============================ Hero Banner End ================================== -->

<!-- ============================ Our Awards Start ================================== -->
<!-- <section class="p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-12">

                    <div class="_awards_group">
                        <ul class="_awards_lists">
                            single list
                            <li>
                                <div class="_awards_list_wrap">
                                    <div class="_awards_list_thumb"><img src="{{ asset('./assetsclient/img/award-1.png')}}" class="img-fluid"
                                            alt="" /></div>
                                    <div class="_awards_list_caption">
                                        <h5 class="theme-cl">2021</h5>
                                        <span>Annual Awards</span>
                                    </div>
                                </div>
                            </li>
                            single list
                            <li>
                                <div class="_awards_list_wrap">
                                    <div class="_awards_list_thumb"><img src="{{ asset('./assetsclient/img/award-5.png')}}" class="img-fluid"
                                            alt="" /></div>
                                    <div class="_awards_list_caption">
                                        <h5 class="theme-cl-2">2018</h5>
                                        <span>Filka Vivo Award</span>
                                    </div>
                                </div>
                            </li>
                            single list
                            <li>
                                <div class="_awards_list_wrap">
                                    <div class="_awards_list_thumb"><img src="{{ asset('./assetsclient/img/award-2.png')}}" class="img-fluid"
                                            alt="" /></div>
                                    <div class="_awards_list_caption">
                                        <h5 class="text-warning">2017</h5>
                                        <span>IITCA Green Award</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
<!-- ============================ Our Awards End ================================== -->

<!-- ============================ Property Category Start ================================== -->
<!-- <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Choose Your Category</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">

                Single Category
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="{{ asset('./assetsclient/img/f-1.png')}}" class="img-fluid hover" alt="" />
                                    <img src="{{ asset('./assetsclient/img/f-11.png')}}" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>Office & Studio</h5>
                                    <span>22 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                Single Category
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="{{ asset('./assetsclient/img/f-2.png')}}" class="img-fluid hover" alt="" />
                                    <img src="{{ asset('./assetsclient/img/f-22.png')}}" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>Industrial</h5>
                                    <span>22 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                Single Category
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="{{ asset('./assetsclient/img/f-3.png')}}" class="img-fluid hover" alt="" />
                                    <img src="{{ asset('./assetsclient/img/f-33.png')}}" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>Buildings</h5>
                                    <span>85 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                Single Category
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="{{ asset('./assetsclient/img/f-4.png')}}" class="img-fluid hover" alt="" />
                                    <img src="{{ asset('./assetsclient/img/f-44.png')}}" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>Commercial</h5>
                                    <span>79 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                Single Category
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="{{ asset('./assetsclient/img/f-5.png')}}" class="img-fluid hover" alt="" />
                                    <img src="{{ asset('./assetsclient/img/f-55.png')}}" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>Home & Villas</h5>
                                    <span>22 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                Single Category
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="{{ asset('./assetsclient/img/f-6.png')}}" class="img-fluid hover" alt="" />
                                    <img src="{{ asset('./assetsclient/img/f-66.png')}}" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>Garages</h5>
                                    <span>22 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                Single Category
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="{{ asset('./assetsclient/img/f-7.png')}}" class="img-fluid hover" alt="" />
                                    <img src="{{ asset('./assetsclient/img/f-77.png')}}" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>Office & Studio</h5>
                                    <span>72 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                Single Category
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="{{ asset('./assetsclient/img/f-8.png')}}" class="img-fluid hover" alt="" />
                                    <img src="{{ asset('./assetsclient/img/f-88.png')}}" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>Apartment</h5>
                                    <span>102 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section> -->
<!-- ============================ Property Category End ================================== -->

<!-- ============================ Properties Start ================================== -->
<section class="pt-0 min pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h2>Featured Listed Property</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-listing property-2">

                    <div class="listing-img-wrapper">
                        <div class="_exlio_125">For Rent</div>
                        <div class="list-img-slide">
                            <div class="click">
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-1.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-2.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-3.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="_card_list_flex mb-2">
                                <div class="_card_flex_01">
                                    <!-- <span class="_list_blickes _netork">4 Network</span> -->
                                    <span class="_list_blickes types">Condos</span>
                                </div>
                                <div class="_card_flex_last">
                                    <h6 class="listing-card-info-price mb-0">AED 6,700</h6>
                                </div>
                            </div>
                            <div class="_card_list_flex">
                                <div class="_card_flex_01">
                                    <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">7012 Shine Sehu Street, Liverpool ,
                                            LC345AC</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bed.svg')}}" width="13" alt="" /></div>4
                                Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bathtub.svg')}}" width="13" alt="" />
                                </div>2 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/move.svg')}}" width="13" alt="" /></div>
                                820 sqft
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location"><img src="{{ asset('./assetsclient/img/pin.svg')}}" width="18" alt="" />Bur Dubai,
                                Dubai</div>
                        </div>
                        <!-- <div class="footer-flex">
                            <ul class="selio_style">
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="Save property"><input type="checkbox"><i class="ti-heart"></i></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="Compare property"><i class="ti-control-shuffle"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="View Property"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>

                </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-listing property-2">

                    <div class="listing-img-wrapper">
                        <div class="_exlio_125">For Sale</div>
                        <div class="list-img-slide">
                            <div class="click">
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-4.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-5.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-6.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="_card_list_flex mb-2">
                                <div class="_card_flex_01">
                                    <!-- <span class="_list_blickes _netork">5 Network</span> -->
                                    <span class="_list_blickes types">Apartment</span>
                                </div>
                                <div class="_card_flex_last">
                                    <h6 class="listing-card-info-price mb-0">AED 6,900</h6>
                                </div>
                            </div>
                            <div class="_card_list_flex">
                                <div class="_card_flex_01">
                                    <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">425 Vine 012 Street, Bur Dubai Dubai, UHW45Q</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bed.svg')}}" width="13" alt="" /></div>4
                                Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bathtub.svg')}}" width="13" alt="" />
                                </div>2 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/move.svg')}}" width="13" alt="" /></div>
                                700 sqft
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location"><img src="{{ asset('./assetsclient/img/pin.svg')}}" width="18" alt="" />Bur Dubai,
                                Dubai</div>
                        </div>
                        <!-- <div class="footer-flex">
                            <ul class="selio_style">
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="Save property"><input type="checkbox"><i class="ti-heart"></i></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="Compare property"><i class="ti-control-shuffle"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="View Property"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>

                </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-listing property-2">

                    <div class="listing-img-wrapper">
                        <div class="_exlio_125">For Rent</div>
                        <div class="list-img-slide">
                            <div class="click">
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-7.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-8.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-9.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="_card_list_flex mb-2">
                                <div class="_card_flex_01">
                                    <!-- <span class="_list_blickes _netork">4 Network</span> -->
                                    <span class="_list_blickes types">Villas</span>
                                </div>
                                <div class="_card_flex_last">
                                    <h6 class="listing-card-info-price mb-0">AED 8,500</h6>
                                </div>
                            </div>
                            <div class="_card_list_flex">
                                <div class="_card_flex_01">
                                    <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">1244 Vansh Market, Mise Mizkel ,
                                            AU456HA</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bed.svg')}}" width="13" alt="" /></div>3
                                Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bathtub.svg')}}" width="13" alt="" />
                                </div>2 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/move.svg')}}" width="13" alt="" /></div>
                                800 sqft
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location"><img src="{{ asset('./assetsclient/img/pin.svg')}}" width="18" alt="" />Bur Dubai,
                                Dubai</div>
                        </div>
                        <!-- <div class="footer-flex">
                            <ul class="selio_style">
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="Save property"><input type="checkbox"><i class="ti-heart"></i></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="Compare property"><i class="ti-control-shuffle"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="View Property"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>

                </div>
            </div>
            <!-- End Single Property -->
        </div>

    </div>
</section>
<!-- ============================ Properties End ================================== -->

<!-- ============================ Properties Start ================================== -->
<section class="pt-0 min pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h2>Listed Property</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-listing property-2">

                    <div class="listing-img-wrapper">
                        <div class="_exlio_125">For Rent</div>
                        <div class="list-img-slide">
                            <div class="click">
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-1.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-2.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-3.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="_card_list_flex mb-2">
                                <div class="_card_flex_01">
                                    <!-- <span class="_list_blickes _netork">4 Network</span> -->
                                    <span class="_list_blickes types">Condos</span>
                                </div>
                                <div class="_card_flex_last">
                                    <h6 class="listing-card-info-price mb-0">AED 6,700</h6>
                                </div>
                            </div>
                            <div class="_card_list_flex">
                                <div class="_card_flex_01">
                                    <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">7012 Shine Sehu Street, Liverpool ,
                                            LC345AC</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bed.svg')}}" width="13" alt="" /></div>4
                                Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bathtub.svg')}}" width="13" alt="" />
                                </div>2 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/move.svg')}}" width="13" alt="" /></div>
                                820 sqft
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location"><img src="{{ asset('./assetsclient/img/pin.svg')}}" width="18" alt="" />Bur Dubai,
                                Dubai</div>
                        </div>
                        <!-- <div class="footer-flex">
                            <ul class="selio_style">
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="Save property"><input type="checkbox"><i class="ti-heart"></i></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="Compare property"><i class="ti-control-shuffle"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="View Property"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>

                </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-listing property-2">

                    <div class="listing-img-wrapper">
                        <div class="_exlio_125">For Sale</div>
                        <div class="list-img-slide">
                            <div class="click">
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-4.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-5.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-6.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="_card_list_flex mb-2">
                                <div class="_card_flex_01">
                                    <!-- <span class="_list_blickes _netork">5 Network</span> -->
                                    <span class="_list_blickes types">Apartment</span>
                                </div>
                                <div class="_card_flex_last">
                                    <h6 class="listing-card-info-price mb-0">AED 6,900</h6>
                                </div>
                            </div>
                            <div class="_card_list_flex">
                                <div class="_card_flex_01">
                                    <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">425 Vine 012 Street, Bur Dubai Dubai, UHW45Q</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bed.svg')}}" width="13" alt="" /></div>4
                                Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bathtub.svg')}}" width="13" alt="" />
                                </div>2 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/move.svg')}}" width="13" alt="" /></div>
                                700 sqft
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location"><img src="{{ asset('./assetsclient/img/pin.svg')}}" width="18" alt="" />Bur Dubai,
                                Dubai</div>
                        </div>
                        <!-- <div class="footer-flex">
                            <ul class="selio_style">
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="Save property"><input type="checkbox"><i class="ti-heart"></i></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="Compare property"><i class="ti-control-shuffle"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="View Property"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>

                </div>
            </div>
            <!-- End Single Property -->

            <!-- Single Property -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-listing property-2">

                    <div class="listing-img-wrapper">
                        <div class="_exlio_125">For Rent</div>
                        <div class="list-img-slide">
                            <div class="click">
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-7.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-8.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                <div><a href="single-property-1.html"><img src="{{ asset('./assetsclient/img/p-9.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-wrapper">
                        <div class="listing-short-detail-wrap">
                            <div class="_card_list_flex mb-2">
                                <div class="_card_flex_01">
                                    <!-- <span class="_list_blickes _netork">4 Network</span> -->
                                    <span class="_list_blickes types">Villas</span>
                                </div>
                                <div class="_card_flex_last">
                                    <h6 class="listing-card-info-price mb-0">AED 8,500</h6>
                                </div>
                            </div>
                            <div class="_card_list_flex">
                                <div class="_card_flex_01">
                                    <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">1244 Vansh Market, Mise Mizkel ,
                                            AU456HA</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-features-wrapper">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bed.svg')}}" width="13" alt="" /></div>3
                                Beds
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/bathtub.svg')}}" width="13" alt="" />
                                </div>2 Bath
                            </div>
                            <div class="listing-card-info-icon">
                                <div class="inc-fleat-icon"><img src="{{ asset('./assetsclient/img/move.svg')}}" width="13" alt="" /></div>
                                800 sqft
                            </div>
                        </div>
                    </div>

                    <div class="listing-detail-footer">
                        <div class="footer-first">
                            <div class="foot-location"><img src="{{ asset('./assetsclient/img/pin.svg')}}" width="18" alt="" />Bur Dubai,
                                Dubai</div>
                        </div>
                        <!-- <div class="footer-flex">
                            <ul class="selio_style">
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="Save property"><input type="checkbox"><i class="ti-heart"></i></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="Compare property"><i class="ti-control-shuffle"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="prt_saveed_12lk">
                                        <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="View Property"><i class="ti-arrow-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>

                </div>
            </div>
            <!-- End Single Property -->
        </div>

    </div>
</section>
<!-- ============================ Properties End ================================== -->

<!-- ============================ Property By Location ================================== -->
<!-- {{-- <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Top Property Places</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>Rentinease, Dubai</h4>
                                <span>48 Properties</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-right"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: {{ asset('./assetsclient/img/city-6.png')}}"></div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>Barbingham, Dubai</h4>
                                <span>73 Properties</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-right"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: {{ asset('./assetsclient/img/city-7.png')}}"></div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>Denever, Dubai</h4>
                                <span>40 Properties</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-right"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: {{ asset('./assetsclient/img/city-3.png')}}"></div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>Liverpool, </h4>
                                <span>35 Properties</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-right"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: {{ asset('./assetsclient/img/city-4.png')}}></div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>New Orleans, Louisiana</h4>
                                <span>10 Properties</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-right"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: {{ asset('./assetsclient/img/city-5.png')}}"></div>
                    </a>
                </div>

            </div>

        </div>
    </section> --}} -->
<!-- ============================ Property By Location End ================================== -->

<!-- ============================ Smart Testimonials ================================== -->
<!-- <section class="gray-simple">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Good Reviews By Clients</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="item-slide space">

                        Single Item
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/user-1.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Susan D. Murphy</h5>
                                            <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/c-1.png')}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum
                                        tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>

                        Single Item
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/user-2.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Maxine E. Gagliardi</h5>
                                            <div class="_ovr_posts"><span>Apple CEO</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.5
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/c-2.png')}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum
                                        tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>

                        Single Item
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/user-3.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Roy M. Cardona</h5>
                                            <div class="_ovr_posts"><span>Google Founder</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.9
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/c-3.png')}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum
                                        tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>

                        Single Item
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/user-4.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Dorothy K. Shipton</h5>
                                            <div class="_ovr_posts"><span>Linkedin Leader</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/c-4.png')}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum
                                        tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>

                        Single Item
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/user-5.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>Robert P. McKissack</h5>
                                            <div class="_ovr_posts"><span>CEO, Leader</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ asset('./assetsclient/img/c-5.png')}}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum
                                        tellus lorem sem velit nisi non pharetra in dui.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section> -->
<!-- ============================ Smart Testimonials End ================================== -->

<div class="clearfix"></div>

<!-- Log In Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
    <div class="modal-dialog modal-xl login-pop-form" role="document">
        <div class="modal-content overli" id="registermodal">
            <div class="modal-body p-0">
                <div class="resp_log_wrap">
                    <div class="resp_log_thumb bgloginimg"></div>
                    <div class="resp_log_caption">
                        <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                        <div class="edlio_152">
                            <ul class="nav nav-pills tabs_system center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false"><i class="fas fa-user-plus mr-2"></i>Register</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                <div class="login-form">
                                    <form>

                                        <div class="form-group">
                                            <label>User Name</label>
                                            <div class="input-with-icon">
                                                <input type="text" class="form-control">
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-with-icon">
                                                <input type="password" class="form-control">
                                                <i class="ti-unlock"></i>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="eltio_ol9">
                                                <div class="eltio_k1">
                                                    <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                                </div>
                                                <div class="eltio_k2">
                                                    <a href="#">Forget Password?</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md full-width pop-login">Login</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                                <div class="login-form">
                                    <form>

                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <div class="input-with-icon">
                                                <input type="text" class="form-control">
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <div class="input-with-icon">
                                                <input type="email" class="form-control">
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-with-icon">
                                                <input type="password" class="form-control">
                                                <i class="ti-unlock"></i>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="eltio_ol9">
                                                <div class="eltio_k1">
                                                    <input id="dds" class="checkbox-custom" name="dds" type="checkbox">
                                                    <label for="dds" class="checkbox-custom-label">You accept the terms and conditions</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md full-width pop-login">Register</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<!-- ============================ article End ================================== -->

<!-- ============================ Call To Action ================================== -->
<!-- <section class="theme-bg call_action_wrap-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="call_action_wrap">
                        <div class="call_action_wrap-head">
                            <h3>Do You Have Questions ?</h3>
                            <span>We'll help you to grow your career and growth.</span>
                        </div>
                        <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
<!-- ============================ Call To Action End ================================== -->
@endsection