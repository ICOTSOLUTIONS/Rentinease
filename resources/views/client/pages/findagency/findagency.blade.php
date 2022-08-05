@extends('client.layout.master')
@section('content')
<style>
    .banneragency {
        background-color: #f4f4f4;
        background-image: url("{{asset('assetsclient/img/close-up-financial-advisor.jpg')}}");
    }

    #profile_img {
        border-radius: 50%;
    }
</style>
<!-- ============================ Page Title Start================================== -->
<div class="page-title banneragency" data-overlay="5">
    <div class="container mt-4">
        <div class="row pt-3">
            <div class="col-lg-12 col-md-12">

                <div class="breadcrumbs-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Agency Detail</li>
                    </ol>
                    <h2 class="breadcrumb-title">California Real Estate - UK</h2>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ About Agency ================================== -->
<section class="gray">
    <div class="container">
        <div class="row">

            <!-- property main detail -->
            <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                <!-- Single Block Wrap -->
                <div class="property_block_wrap">

                    <div class="property_block_wrap_header" q>
                        <h4 class="property_block_title">Agency Info</h4>
                    </div>

                    <div class="block-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Single Block Wrap -->
                <div class="div_wraps">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4>Find Agency</h4>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <!-- Single Property -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <!-- <div class="_exlio_125">Featured</div> -->
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-detail-wrapper">
                                <div class="listing-short-detail-wrap">
                                    <!-- <div class="_card_list_flex mb-2">
                                        <div class="_card_flex_01">
                                            <span class="_list_blickes types">Super Agent</span>
                                            <span class="_list_blickes _netork">Company</span>
                                        </div>
                                        <div class="_card_flex_last">
                                            <h6 class="listing-card-info-price mb-0">$12,000</h6>
                                        </div>
                                    </div> -->
                                    <div class="_card_list_flex">
                                        <div class="_card_flex_01">
                                            <h4 class="listing-name verified text-center"><a href="" class="prt-link-detail">ADNAN</a></h4>
                                            <p class="text-center">5 AGENTS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="price-features-wrapper">
                                <div class="list-fx-features">
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>Nationality
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 sqft
                                    </div>
                                </div>
                            </div> -->

                            <div class="listing-detail-footer">
                                <div class="footer-first text-center">
                                    <div class="foot-location d-flex justify-content-start ">
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For sale </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For rent </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For commercial </h6>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- Single Property -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <!-- <div class="_exlio_125">Featured</div> -->
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-detail-wrapper">
                                <div class="listing-short-detail-wrap">
                                    <!-- <div class="_card_list_flex mb-2">
                                        <div class="_card_flex_01">
                                            <span class="_list_blickes types">Super Agent</span>
                                            <span class="_list_blickes _netork">Company</span>
                                        </div>
                                        <div class="_card_flex_last">
                                            <h6 class="listing-card-info-price mb-0">$12,000</h6>
                                        </div>
                                    </div> -->
                                    <div class="_card_list_flex">
                                        <div class="_card_flex_01">
                                            <h4 class="listing-name verified text-center"><a href="" class="prt-link-detail">ADNAN</a></h4>
                                            <p class="text-center">5 AGENTS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="price-features-wrapper">
                                <div class="list-fx-features">
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>Nationality
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 sqft
                                    </div>
                                </div>
                            </div> -->

                            <div class="listing-detail-footer">
                                <div class="footer-first text-center">
                                    <div class="foot-location d-flex justify-content-start ">
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For sale </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For rent </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For commercial </h6>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Single Property -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <!-- <div class="_exlio_125">Featured</div> -->
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-detail-wrapper">
                                <div class="listing-short-detail-wrap">
                                    <!-- <div class="_card_list_flex mb-2">
                                        <div class="_card_flex_01">
                                            <span class="_list_blickes types">Super Agent</span>
                                            <span class="_list_blickes _netork">Company</span>
                                        </div>
                                        <div class="_card_flex_last">
                                            <h6 class="listing-card-info-price mb-0">$12,000</h6>
                                        </div>
                                    </div> -->
                                    <div class="_card_list_flex">
                                        <div class="_card_flex_01">
                                            <h4 class="listing-name verified text-center"><a href="" class="prt-link-detail">ADNAN</a></h4>
                                            <p class="text-center">5 AGENTS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="price-features-wrapper">
                                <div class="list-fx-features">
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>Nationality
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 sqft
                                    </div>
                                </div>
                            </div> -->

                            <div class="listing-detail-footer">
                                <div class="footer-first text-center">
                                    <div class="foot-location d-flex justify-content-start ">
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For sale </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For rent </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For commercial </h6>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->

                    <!-- Single Property -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <!-- <div class="_exlio_125">Featured</div> -->
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-detail-wrapper">
                                <div class="listing-short-detail-wrap">
                                    <!-- <div class="_card_list_flex mb-2">
                                        <div class="_card_flex_01">
                                            <span class="_list_blickes types">Super Agent</span>
                                            <span class="_list_blickes _netork">Company</span>
                                        </div>
                                        <div class="_card_flex_last">
                                            <h6 class="listing-card-info-price mb-0">$12,000</h6>
                                        </div>
                                    </div> -->
                                    <div class="_card_list_flex">
                                        <div class="_card_flex_01">
                                            <h4 class="listing-name verified text-center"><a href="" class="prt-link-detail">ADNAN</a></h4>
                                            <p class="text-center">5 AGENTS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="price-features-wrapper">
                                <div class="list-fx-features">
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>Nationality
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 sqft
                                    </div>
                                </div>
                            </div> -->

                            <div class="listing-detail-footer">
                                <div class="footer-first text-center">
                                    <div class="foot-location d-flex justify-content-start ">
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For sale </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For rent </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For commercial </h6>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->
                    <!-- Single Property -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <!-- <div class="_exlio_125">Featured</div> -->
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-detail-wrapper">
                                <div class="listing-short-detail-wrap">
                                    <!-- <div class="_card_list_flex mb-2">
                                        <div class="_card_flex_01">
                                            <span class="_list_blickes types">Super Agent</span>
                                            <span class="_list_blickes _netork">Company</span>
                                        </div>
                                        <div class="_card_flex_last">
                                            <h6 class="listing-card-info-price mb-0">$12,000</h6>
                                        </div>
                                    </div> -->
                                    <div class="_card_list_flex">
                                        <div class="_card_flex_01">
                                            <h4 class="listing-name verified text-center"><a href="" class="prt-link-detail">ADNAN</a></h4>
                                            <p class="text-center">5 AGENTS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="price-features-wrapper">
                                <div class="list-fx-features">
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>Nationality
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 sqft
                                    </div>
                                </div>
                            </div> -->

                            <div class="listing-detail-footer">
                                <div class="footer-first text-center">
                                    <div class="foot-location d-flex justify-content-start ">
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For sale </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For rent </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For commercial </h6>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->
                    <!-- Single Property -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <!-- <div class="_exlio_125">Featured</div> -->
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-detail-wrapper">
                                <div class="listing-short-detail-wrap">
                                    <!-- <div class="_card_list_flex mb-2">
                                        <div class="_card_flex_01">
                                            <span class="_list_blickes types">Super Agent</span>
                                            <span class="_list_blickes _netork">Company</span>
                                        </div>
                                        <div class="_card_flex_last">
                                            <h6 class="listing-card-info-price mb-0">$12,000</h6>
                                        </div>
                                    </div> -->
                                    <div class="_card_list_flex">
                                        <div class="_card_flex_01">
                                            <h4 class="listing-name verified text-center"><a href="" class="prt-link-detail">ADNAN</a></h4>
                                            <p class="text-center">5 AGENTS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="price-features-wrapper">
                                <div class="list-fx-features">
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>Nationality
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 sqft
                                    </div>
                                </div>
                            </div> -->

                            <div class="listing-detail-footer">
                                <div class="footer-first text-center">
                                    <div class="foot-location d-flex justify-content-start ">
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For sale </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For rent </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For commercial </h6>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->
                    <!-- Single Property -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <!-- <div class="_exlio_125">Featured</div> -->
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-detail-wrapper">
                                <div class="listing-short-detail-wrap">
                                    <!-- <div class="_card_list_flex mb-2">
                                        <div class="_card_flex_01">
                                            <span class="_list_blickes types">Super Agent</span>
                                            <span class="_list_blickes _netork">Company</span>
                                        </div>
                                        <div class="_card_flex_last">
                                            <h6 class="listing-card-info-price mb-0">$12,000</h6>
                                        </div>
                                    </div> -->
                                    <div class="_card_list_flex">
                                        <div class="_card_flex_01">
                                            <h4 class="listing-name verified text-center"><a href="" class="prt-link-detail">ADNAN</a></h4>
                                            <p class="text-center">5 AGENTS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="price-features-wrapper">
                                <div class="list-fx-features">
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>Nationality
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 sqft
                                    </div>
                                </div>
                            </div> -->

                            <div class="listing-detail-footer">
                                <div class="footer-first text-center">
                                    <div class="foot-location d-flex justify-content-start ">
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For sale </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For rent </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For commercial </h6>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Property -->
                    <!-- Single Property -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <!-- <div class="_exlio_125">Featured</div> -->
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-detail-wrapper">
                                <div class="listing-short-detail-wrap">
                                    <!-- <div class="_card_list_flex mb-2">
                                        <div class="_card_flex_01">
                                            <span class="_list_blickes types">Super Agent</span>
                                            <span class="_list_blickes _netork">Company</span>
                                        </div>
                                        <div class="_card_flex_last">
                                            <h6 class="listing-card-info-price mb-0">$12,000</h6>
                                        </div>
                                    </div> -->
                                    <div class="_card_list_flex">
                                        <div class="_card_flex_01">
                                            <h4 class="listing-name verified text-center"><a href="" class="prt-link-detail">ADNAN</a></h4>
                                            <p class="text-center">5 AGENTS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="price-features-wrapper">
                                <div class="list-fx-features">
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>Nationality
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 sqft
                                    </div>
                                </div>
                            </div> -->

                            <div class="listing-detail-footer">
                                <div class="footer-first text-center">
                                    <div class="foot-location d-flex justify-content-start ">
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For sale </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For rent </h6>
                                        </label>
                                        <label class="text-success m-1 w-100 fw-bolder">04
                                            <h6 class="text-dark">For commercial </h6>
                                        </label>
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
<!-- ============================ About Agency End ================================== -->

<!-- ============================ Call To Action ================================== -->
<section class="theme-bg call_action_wrap-wrap">
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
</section>
<!-- ============================ Call To Action End ================================== -->

@endsection