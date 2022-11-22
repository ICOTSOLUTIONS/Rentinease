@extends('client.layout.master')
@section('content')
<style>
    .banneragency {
        /* background-color: #f4f4f4; */
        background-image: url("{{ asset('assetsclient/img/close-up-financial-advisor.jpg') }}");
    }

    #profile_img {
        border-radius: 50%;
    }
</style>
<!-- ============================ Page Title Start================================== -->
<div class="page-title banneragency" data-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 ">

                <div class="breadcrumbs-wrap mt-5">
                    <ol class="breadcrumb d-flex justify-content-center mt-2">
                        <li class="breadcrumb-item active" aria-current="page">Agency Detail</li>
                    </ol>
                    <h2 class="breadcrumb-title text-center">California Real Estate - UK</h2>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ All Property ================================== -->
<section class="gray pt-4">

    <div class="container">
        <!-- Tab for Rent -->
        <div class="tab-pane ">
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
                                        <option value="3">California</option>
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
                                <a class="collapsed ad-search" data-toggle="collapse" data-parent="#search" data-target="#advance-search-2" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h mr-2"></i>Advance
                                    Filter</a>
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

        <div class="row m-0">
            <div class="short_wraping">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-6 col-sm-12  col-sm-6">
                        <ul class="shorting_grid">
                            <li class="list-inline-item"><a href="grid-layout-with-sidebar.html" class="active"><span class="ti-layout-grid2"></span>Grid</a></li>
                            <li class="list-inline-item"><a href="list-layout-with-sidebar.html"><span class="ti-view-list"></span>List</a></li>
                            <li class="list-inline-item"><a href="#"><span class="ti-map-alt"></span>Map</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 order-lg-2 order-md-3 elco_bor col-sm-12">
                        <div class="shorting_pagination">
                            <div class="shorting_pagination_laft">
                                <h5>Showing 1-25 of 72 results</h5>
                            </div>
                            <div class="shorting_pagination_right">
                                <ul>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li><a href="javascript:void(0);">4</a></li>
                                    <li><a href="javascript:void(0);">5</a></li>
                                    <li><a href="javascript:void(0);">6</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 order-lg-3 order-md-2 col-sm-6">
                        <div class="shorting-right">
                            <label>Short By:</label>
                            <div class="dropdown show">
                                <a class="btn btn-filter dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="selection">Most Rated</span>
                                </a>
                                <div class="drp-select dropdown-menu">
                                    <a class="dropdown-item" href="JavaScript:Void(0);">Most Rated</a>
                                    <a class="dropdown-item" href="JavaScript:Void(0);">Most Viewd</a>
                                    <a class="dropdown-item" href="JavaScript:Void(0);">News Listings</a>
                                    <a class="dropdown-item" href="JavaScript:Void(0);">High Rated</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">

            <!-- property Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="page-sidebar p-0">
                    <a class="filter_links" data-toggle="collapse" href="#fltbox" role="button" aria-expanded="false" aria-controls="fltbox">Open Advance Filter<i class="fa fa-sliders-h ml-2"></i></a>
                    <div class="collapse" id="fltbox">
                        <!-- Find New Property -->
                        <div class="sidebar-widgets p-4">

                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Neighborhood">
                                    <i class="ti-search"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Location">
                                    <i class="ti-location-pin"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="simple-input">
                                    <select id="ptype" class="form-control">
                                        <option value="">&nbsp;</option>
                                        <option value="1">Apartment</option>
                                        <option value="2">Condo</option>
                                        <option value="3">Family</option>
                                        <option value="4">Houses</option>
                                        <option value="5">Villa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="simple-input">
                                    <select id="status" class="form-control">
                                        <option value="">&nbsp;</option>
                                        <option value="1">Apartment</option>
                                        <option value="2">Condo</option>
                                        <option value="3">Houses</option>
                                        <option value="4">Villa</option>
                                        <option value="5">Land</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="simple-input">
                                    <select id="price" class="form-control">
                                        <option value="">&nbsp;</option>
                                        <option value="1">Less Then $1000</option>
                                        <option value="2">$1000 - $2000</option>
                                        <option value="3">$2000 - $3000</option>
                                        <option value="4">$3000 - $4000</option>
                                        <option value="5">Above $5000</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="simple-input">
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

                            <div class="form-group">
                                <div class="simple-input">
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

                            <div class="form-group">
                                <div class="simple-input">
                                    <select id="garage" class="form-control">
                                        <option value="">&nbsp;</option>
                                        <option value="1">Any Type</option>
                                        <option value="2">Yes</option>
                                        <option value="3">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="simple-input">
                                    <select id="built" class="form-control">
                                        <option value="">&nbsp;</option>
                                        <option value="1">2010</option>
                                        <option value="2">2011</option>
                                        <option value="3">2012</option>
                                        <option value="4">2013</option>
                                        <option value="5">2014</option>
                                        <option value="6">2015</option>
                                        <option value="7">2016</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="simple-input">
                                            <input type="text" class="form-control" placeholder="Min Area">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="simple-input">
                                            <input type="text" class="form-control" placeholder="Max Area">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
                                    <h6>Choose Price</h6>
                                    <div class="rg-slider">
                                        <input type="text" class="js-range-slider" name="my_range" value="" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                                    <h6>Advance Features</h6>
                                    <ul class="row p-0 m-0">
                                        <li class="col-lg-6 col-md-6 p-0">
                                            <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                            <label for="a-1" class="checkbox-custom-label">Air Condition</label>
                                        </li>
                                        <li class="col-lg-6 col-md-6 p-0">
                                            <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                            <label for="a-2" class="checkbox-custom-label">Bedding</label>
                                        </li>
                                        <li class="col-lg-6 col-md-6 p-0">
                                            <input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
                                            <label for="a-3" class="checkbox-custom-label">Heating</label>
                                        </li>
                                        <li class="col-lg-6 col-md-6 p-0">
                                            <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                            <label for="a-4" class="checkbox-custom-label">Internet</label>
                                        </li>
                                        <li class="col-lg-6 col-md-6 p-0">
                                            <input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
                                            <label for="a-5" class="checkbox-custom-label">Microwave</label>
                                        </li>
                                        <li class="col-lg-6 col-md-6 p-0">
                                            <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                            <label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
                                        </li>
                                        <li class="col-lg-6 col-md-6 p-0">
                                            <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                            <label for="a-7" class="checkbox-custom-label">Terrace</label>
                                        </li>
                                        <li class="col-lg-6 col-md-6 p-0">
                                            <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                            <label for="a-8" class="checkbox-custom-label">Balcony</label>
                                        </li>
                                        <li class="col-lg-6 col-md-6 p-0">
                                            <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                            <label for="a-9" class="checkbox-custom-label">Icon</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                                    <button class="btn theme-bg rounded full-width">Find New Home</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="row justify-content-center">

                    <!-- Single Property -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="property-listing list_view">

                            <div class="listing-img-wrapper">
                                <div class="_exlio_125">For Sale</div>
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="single-property-1.html"><img src="{{ asset('assetsclient/img/house-isolated-field-min.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-2.png" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-3.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="list_view_flex">

                                <div class="listing-detail-wrapper mt-1">
                                    <div class="listing-short-detail-wrap">
                                        <div class="_card_list_flex mb-2">
                                            <div class="_card_flex_01">
                                                <span class="_list_blickes _netork">6 Network</span>
                                                <span class="_list_blickes types">Family</span>
                                            </div>
                                            <div class="_card_flex_last">
                                                <h6 class="listing-card-info-price mb-0">$7,000</h6>
                                            </div>
                                        </div>
                                        <div class="_card_list_flex">
                                            <div class="_card_flex_01">
                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">5689 Resot Relly Market, Montreal
                                                        Canada, HAQC445</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-features-wrapper">
                                    <div class="list-fx-features">
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>3 Beds
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>1 Bath
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 sqft
                                        </div>
                                    </div>
                                </div>

                                <div class="listing-detail-footer">
                                    <div class="footer-first">
                                        <div class="foot-rates">
                                            <span class="elio_rate good">4.2</span>
                                            <div class="_rate_stio">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-flex">
                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->

                    <!-- Single Property -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="property-listing list_view">

                            <div class="listing-img-wrapper">
                                <div class="_exlio_125">For Rent</div>
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="single-property-1.html"><img src="{{ asset('assetsclient/img/house-isolated-field-min.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-5.png" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-6.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="list_view_flex">

                                <div class="listing-detail-wrapper mt-1">
                                    <div class="listing-short-detail-wrap">
                                        <div class="_card_list_flex mb-2">
                                            <div class="_card_flex_01">
                                                <span class="_list_blickes _netork">7 Network</span>
                                                <span class="_list_blickes types">Condos</span>
                                            </div>
                                            <div class="_card_flex_last">
                                                <h6 class="listing-card-info-price mb-0">$10,500</h6>
                                            </div>
                                        </div>
                                        <div class="_card_list_flex">
                                            <div class="_card_flex_01">
                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">9632 New Green Garden, Huwai Denever
                                                        USA, AWE789O</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-features-wrapper">
                                    <div class="list-fx-features">
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>4 Beds
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>1000 sqft
                                        </div>
                                    </div>
                                </div>

                                <div class="listing-detail-footer">
                                    <div class="footer-first">
                                        <div class="foot-rates">
                                            <span class="elio_rate perfect">4.7</span>
                                            <div class="_rate_stio">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-flex">
                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->

                    <!-- Single Property -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="property-listing list_view">

                            <div class="listing-img-wrapper">
                                <div class="_exlio_125">For Sale</div>
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="single-property-1.html"><img src="{{ asset('assetsclient/img/house-isolated-field-min.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-8.png" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-9.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="list_view_flex">

                                <div class="listing-detail-wrapper mt-1">
                                    <div class="listing-short-detail-wrap">
                                        <div class="_card_list_flex mb-2">
                                            <div class="_card_flex_01">
                                                <span class="_list_blickes _netork">8 Network</span>
                                                <span class="_list_blickes types">Apartment</span>
                                            </div>
                                            <div class="_card_flex_last">
                                                <h6 class="listing-card-info-price mb-0">$8,700</h6>
                                            </div>
                                        </div>
                                        <div class="_card_list_flex">
                                            <div class="_card_flex_01">
                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">8512 Red Reveals Market, Montreal
                                                        Canada, SHQT45O</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-features-wrapper">
                                    <div class="list-fx-features">
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>5 Beds
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>900 sqft
                                        </div>
                                    </div>
                                </div>

                                <div class="listing-detail-footer">
                                    <div class="footer-first">
                                        <div class="foot-rates">
                                            <span class="elio_rate good">4.3</span>
                                            <div class="_rate_stio">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-flex">
                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->

                    <!-- Single Property -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="property-listing list_view">

                            <div class="listing-img-wrapper">
                                <div class="_exlio_125">For Rent</div>
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="single-property-1.html"><img src="{{ asset('assetsclient/img/house-isolated-field-min.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-11.png" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-12.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="list_view_flex">

                                <div class="listing-detail-wrapper mt-1">
                                    <div class="listing-short-detail-wrap">
                                        <div class="_card_list_flex mb-2">
                                            <div class="_card_flex_01">
                                                <span class="_list_blickes _netork">10 Network</span>
                                                <span class="_list_blickes types">Villas</span>
                                            </div>
                                            <div class="_card_flex_last">
                                                <h6 class="listing-card-info-price mb-0">$9,100</h6>
                                            </div>
                                        </div>
                                        <div class="_card_list_flex">
                                            <div class="_card_flex_01">
                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">7298 Rani Market Near Saaket, Henever
                                                        Canada, QWUI98</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-features-wrapper">
                                    <div class="list-fx-features">
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>5 Beds
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>900 sqft
                                        </div>
                                    </div>
                                </div>

                                <div class="listing-detail-footer">
                                    <div class="footer-first">
                                        <div class="foot-rates">
                                            <span class="elio_rate perfect">4.8</span>
                                            <div class="_rate_stio">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-flex">
                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->

                    <!-- Single Property -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="property-listing list_view">

                            <div class="listing-img-wrapper">
                                <div class="_exlio_125">For Sale</div>
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="single-property-1.html"><img src="{{ asset('assetsclient/img/house-isolated-field-min.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-14.png" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-15.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="list_view_flex">

                                <div class="listing-detail-wrapper mt-1">
                                    <div class="listing-short-detail-wrap">
                                        <div class="_card_list_flex mb-2">
                                            <div class="_card_flex_01">
                                                <span class="_list_blickes _netork">4 Network</span>
                                                <span class="_list_blickes types">Offices</span>
                                            </div>
                                            <div class="_card_flex_last">
                                                <h6 class="listing-card-info-price mb-0">$7,400</h6>
                                            </div>
                                        </div>
                                        <div class="_card_list_flex">
                                            <div class="_card_flex_01">
                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">5629 Rani Market Near Saaket, Henever
                                                        Canada, QWUI98</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-features-wrapper">
                                    <div class="list-fx-features">
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>4 Beds
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>810 sqft
                                        </div>
                                    </div>
                                </div>

                                <div class="listing-detail-footer">
                                    <div class="footer-first">
                                        <div class="foot-rates">
                                            <span class="elio_rate good">4.5</span>
                                            <div class="_rate_stio">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-flex">
                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->

                    <!-- Single Property -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="property-listing list_view">

                            <div class="listing-img-wrapper">
                                <div class="_exlio_125">For Rent</div>
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="single-property-1.html"><img src="{{ asset('assetsclient/img/house-isolated-field-min.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-17.png" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-18.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="list_view_flex">

                                <div class="listing-detail-wrapper mt-1">
                                    <div class="listing-short-detail-wrap">
                                        <div class="_card_list_flex mb-2">
                                            <div class="_card_flex_01">
                                                <span class="_list_blickes _netork">4 Network</span>
                                                <span class="_list_blickes types">Apartment</span>
                                            </div>
                                            <div class="_card_flex_last">
                                                <h6 class="listing-card-info-price mb-0">$9,700</h6>
                                            </div>
                                        </div>
                                        <div class="_card_list_flex">
                                            <div class="_card_flex_01">
                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">3297 Rani Market Near Saaket, Henever
                                                        Canada, QWUI98</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-features-wrapper">
                                    <div class="list-fx-features">
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>6 Beds
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>3 Bath
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>1200 sqft
                                        </div>
                                    </div>
                                </div>

                                <div class="listing-detail-footer">
                                    <div class="footer-first">
                                        <div class="foot-rates">
                                            <span class="elio_rate perfect">4.8</span>
                                            <div class="_rate_stio">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-flex">
                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->

                </div>
            </div>


        </div>
    </div>
</section>
<!-- ============================ All Property ================================== -->

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