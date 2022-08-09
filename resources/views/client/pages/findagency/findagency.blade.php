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

                    <div class="property_block_wrap_header" >
                        <h4 class="property_block_title">Agency Info</h4>
                    </div>

                    <div class="block-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>

                <!-- Single Block Wrap -->
                <div class="_prtis_list mb-4">
                    <div class="_prtis_list_header">
                        <ul>
                            <li>
                                <div class="content_thumb"><i class="fa fa-envelope"></i></div>
                                <div class="content">
                                    <span class="dark">svalia.tech@gmail.com</span>
                                    <span class="title">Email</span>
                                </div>
                            </li>
                            <li>
                                <div class="content_thumb"><i class="fa fa-phone"></i></div>
                                <div class="content">
                                    <span class="dark">856 574 2314</span>
                                    <span class="title">Call Me</span>
                                </div>
                            </li>
                            <li>
                                <div class="content_thumb"><i class="fa fa-map-marker-alt"></i></div>
                                <div class="content">
                                    <span class="dark">Montreal, USA</span>
                                    <span class="title">Location</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="_prtis_list_body">
                        <ul class="deatil_features">
                            <li><strong>California Real Estate</strong>Name</li>
                            <li><strong>svalia.tech@gmail.com</strong>Email</li>
                            <li><strong>568 942 5163</strong>Call</li>
                            <li><strong>Liverpool</strong>City</li>
                            <li><strong>London</strong>State</li>
                            <li><strong>United Kingdom</strong>Country</li>
                            <li><strong>+91 256 8547</strong>Fax</li>
                            <li><strong>22 Listed</strong>Property</li>
                        </ul>
                    </div>
                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wraps">

                    <div class="property_block_wrap_header">
                        <ul class="nav nav-pills tabs_system" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-property-tab" data-toggle="pill" href="#pills-property" role="tab" aria-controls="pills-property" aria-selected="true">Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-agent-tab" data-toggle="pill" href="#pills-agent" role="tab" aria-controls="pills-agent" aria-selected="false">Agent</a>
                            </li>
                        </ul>
                    </div>

                    <div class="block-bodys">
                        <div class="sidetab-content">
                            <div class="tab-content" id="pills-tabContent">
                                <!-- Book Now Tab -->
                                <div class="tab-pane fade show active" id="pills-property" role="tabpanel" aria-labelledby="pills-property-tab">
                                    <div class="row justify-content-center">

                                        <!-- Single Property -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="property-listing property-2">

                                                <div class="listing-img-wrapper">
                                                    <div class="_exlio_125">For Sale</div>
                                                    <div class="list-img-slide">
                                                        <div class="click">
                                                            <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/house-isolated-field-min.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-2.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-3.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <div class="_card_list_flex mb-2">
                                                            <div class="_card_flex_01">
                                                                <span class="_list_blickes _netork">6 Network</span>
                                                                <span class="_list_blickes types">Family</span>
                                                            </div>
                                                            <div class="_card_flex_last">
                                                                <div class="prt_saveed_12lk">
                                                                    <label class="toggler toggler-danger"><input type="checkbox"><i class="ti-heart"></i></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="_card_list_flex">
                                                            <div class="_card_flex_01">
                                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">7012 Shine Sehu Street, Liverpool London, LC345AC</a></h4>
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
                                                        <h6 class="listing-card-info-price mb-0 p-0">$7,000</h6>
                                                    </div>
                                                    <div class="footer-flex">
                                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Single Property -->

                                        <!-- Single Property -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="property-listing property-2">

                                                <div class="listing-img-wrapper">
                                                    <div class="_exlio_125">For Rent</div>
                                                    <div class="list-img-slide">
                                                        <div class="click">
                                                            <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/house-isolated-field-min.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-5.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-6.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <div class="_card_list_flex mb-2">
                                                            <div class="_card_flex_01">
                                                                <span class="_list_blickes _netork">4 Network</span>
                                                                <span class="_list_blickes types">Condos</span>
                                                            </div>
                                                            <div class="_card_flex_last">
                                                                <div class="prt_saveed_12lk">
                                                                    <label class="toggler toggler-danger"><input type="checkbox"><i class="ti-heart"></i></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="_card_list_flex">
                                                            <div class="_card_flex_01">
                                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">5689 Resot Relly Market, Montreal Canada, HAQC445</a></h4>
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
                                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>740 sqft
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-footer">
                                                    <div class="footer-first">
                                                        <h6 class="listing-card-info-price mb-0 p-0">$8,200</h6>
                                                    </div>
                                                    <div class="footer-flex">
                                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Single Property -->

                                        <!-- Single Property -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="property-listing property-2">

                                                <div class="listing-img-wrapper">
                                                    <div class="_exlio_125">For Sale</div>
                                                    <div class="list-img-slide">
                                                        <div class="click">
                                                            <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/house-isolated-field-min.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-8.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-9.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <div class="_card_list_flex mb-2">
                                                            <div class="_card_flex_01">
                                                                <span class="_list_blickes _netork">5 Network</span>
                                                                <span class="_list_blickes types">Offices</span>
                                                            </div>
                                                            <div class="_card_flex_last">
                                                                <div class="prt_saveed_12lk">
                                                                    <label class="toggler toggler-danger"><input type="checkbox"><i class="ti-heart"></i></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="_card_list_flex">
                                                            <div class="_card_flex_01">
                                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">9632 New Green Garden, Huwai Denever USA, AWE789O</a></h4>
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
                                                        <h6 class="listing-card-info-price mb-0 p-0">$9,500</h6>
                                                    </div>
                                                    <div class="footer-flex">
                                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Single Property -->

                                        <!-- Single Property -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="property-listing property-2">

                                                <div class="listing-img-wrapper">
                                                    <div class="_exlio_125">For Rent</div>
                                                    <div class="list-img-slide">
                                                        <div class="click">
                                                            <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/house-isolated-field-min.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-11.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-12.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <div class="_card_list_flex mb-2">
                                                            <div class="_card_flex_01">
                                                                <span class="_list_blickes _netork">7 Network</span>
                                                                <span class="_list_blickes types">Apartment</span>
                                                            </div>
                                                            <div class="_card_flex_last">
                                                                <div class="prt_saveed_12lk">
                                                                    <label class="toggler toggler-danger"><input type="checkbox"><i class="ti-heart"></i></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="_card_list_flex">
                                                            <div class="_card_flex_01">
                                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">8512 Red Reveals Market, Montreal Canada, SHQT45O</a></h4>
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
                                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>920 sqft
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-footer">
                                                    <div class="footer-first">
                                                        <h6 class="listing-card-info-price mb-0 p-0">$10,400</h6>
                                                    </div>
                                                    <div class="footer-flex">
                                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Single Property -->

                                        <!-- Single Property -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="property-listing property-2">

                                                <div class="listing-img-wrapper">
                                                    <div class="_exlio_125">For Sale</div>
                                                    <div class="list-img-slide">
                                                        <div class="click">
                                                            <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/house-isolated-field-min.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-14.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-15.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <div class="_card_list_flex mb-2">
                                                            <div class="_card_flex_01">
                                                                <span class="_list_blickes _netork">7 Network</span>
                                                                <span class="_list_blickes types">Villas</span>
                                                            </div>
                                                            <div class="_card_flex_last">
                                                                <div class="prt_saveed_12lk">
                                                                    <label class="toggler toggler-danger"><input type="checkbox"><i class="ti-heart"></i></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="_card_list_flex">
                                                            <div class="_card_flex_01">
                                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">7298 Rani Market Near Saaket, Henever Canada, QWUI98</a></h4>
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
                                                            <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>3 Bath
                                                        </div>
                                                        <div class="listing-card-info-icon">
                                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>850 sqft
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-footer">
                                                    <div class="footer-first">
                                                        <h6 class="listing-card-info-price mb-0 p-0">$9,200</h6>
                                                    </div>
                                                    <div class="footer-flex">
                                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Single Property -->

                                        <!-- Single Property -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="property-listing property-2">

                                                <div class="listing-img-wrapper">
                                                    <div class="_exlio_125">For Rent</div>
                                                    <div class="list-img-slide">
                                                        <div class="click">
                                                            <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/house-isolated-field-min.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-17.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                            <div><a href="single-property-1.html"><img src="assets/img/p-18.png" class="img-fluid mx-auto" alt="" /></a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <div class="_card_list_flex mb-2">
                                                            <div class="_card_flex_01">
                                                                <span class="_list_blickes _netork">10 Network</span>
                                                                <span class="_list_blickes types">Family</span>
                                                            </div>
                                                            <div class="_card_flex_last">
                                                                <div class="prt_saveed_12lk">
                                                                    <label class="toggler toggler-danger"><input type="checkbox"><i class="ti-heart"></i></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="_card_list_flex">
                                                            <div class="_card_flex_01">
                                                                <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">7264 Green Glelcer Street, Barghimbar USA, ERIO098</a></h4>
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
                                                            <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>750 sqft
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="listing-detail-footer">
                                                    <div class="footer-first">
                                                        <h6 class="listing-card-info-price mb-0 p-0">$9,100</h6>
                                                    </div>
                                                    <div class="footer-flex">
                                                        <a href="property-detail.html" class="prt-view">View Detail</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Single Property -->

                                    </div>
                                </div>

                                <!-- Appointment Now Tab -->
                                <div class="tab-pane fade" id="pills-agent" role="tabpanel" aria-labelledby="pills-agent-tab">
                                    <div class="row justify-content-center">

                                        <!-- Single Agent -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="grid_agents">
                                                <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                                <div class="grid_agents-wrap">

                                                    <div class="fr-grid-thumb">
                                                        <a href="agent-page.html">
                                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                                            <img src="assets/img/team-1.jpg" class="img-fluid mx-auto" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="fr-grid-deatil">
                                                        <span><i class="ti-location-pin mr-1"></i>Montreal, USA</span>
                                                        <h5 class="fr-can-name"><a href="agent-page.html">Adam K. Jollio</a></h5>
                                                        <ul class="inline_social">
                                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="fr-infos-deatil">
                                                        <a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <!-- Single Agent -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="grid_agents">
                                                <div class="elio_mx_list theme-bg-2">72 Listings</div>
                                                <div class="grid_agents-wrap">

                                                    <div class="fr-grid-thumb">
                                                        <a href="agent-page.html">
                                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                                            <img src="assets/img/team-2.jpg" class="img-fluid mx-auto" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="fr-grid-deatil">
                                                        <span><i class="ti-location-pin mr-1"></i>Liverpool, Canada</span>
                                                        <h5 class="fr-can-name"><a href="agent-page.html">Sargam S. Singh</a></h5>
                                                        <ul class="inline_social">
                                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="fr-infos-deatil">
                                                        <a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <!-- Single Agent -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="grid_agents">
                                                <div class="elio_mx_list theme-bg-2">22 Listings</div>
                                                <div class="grid_agents-wrap">

                                                    <div class="fr-grid-thumb">
                                                        <a href="agent-page.html">
                                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                                            <img src="assets/img/team-3.jpg" class="img-fluid mx-auto" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="fr-grid-deatil">
                                                        <span><i class="ti-location-pin mr-1"></i>Montreal, Canada</span>
                                                        <h5 class="fr-can-name"><a href="agent-page.html">Harijeet M. Siller</a></h5>
                                                        <ul class="inline_social">
                                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="fr-infos-deatil">
                                                        <a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <!-- Single Agent -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="grid_agents">
                                                <div class="elio_mx_list theme-bg-2">50 Listings</div>
                                                <div class="grid_agents-wrap">

                                                    <div class="fr-grid-thumb">
                                                        <a href="agent-page.html">
                                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                                            <img src="assets/img/team-4.jpg" class="img-fluid mx-auto" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="fr-grid-deatil">
                                                        <span><i class="ti-location-pin mr-1"></i>Denever, USA</span>
                                                        <h5 class="fr-can-name"><a href="agent-page.html">Anna K. Young</a></h5>
                                                        <ul class="inline_social">
                                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="fr-infos-deatil">
                                                        <a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <!-- Single Agent -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="grid_agents">
                                                <div class="elio_mx_list theme-bg-2">42 Listings</div>
                                                <div class="grid_agents-wrap">

                                                    <div class="fr-grid-thumb">
                                                        <a href="agent-page.html">
                                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                                            <img src="assets/img/team-5.jpg" class="img-fluid mx-auto" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="fr-grid-deatil">
                                                        <span><i class="ti-location-pin mr-1"></i>2272 Briarwood Drive</span>
                                                        <h5 class="fr-can-name"><a href="agent-page.html">Michael P. Grimaldo</a></h5>
                                                        <ul class="inline_social">
                                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="fr-infos-deatil">
                                                        <a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <!-- Single Agent -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="grid_agents">
                                                <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                                <div class="grid_agents-wrap">

                                                    <div class="fr-grid-thumb">
                                                        <a href="agent-page.html">
                                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                                            <img src="assets/img/team-1.jpg" class="img-fluid mx-auto" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="fr-grid-deatil">
                                                        <span><i class="ti-location-pin mr-1"></i>Montreal, USA</span>
                                                        <h5 class="fr-can-name"><a href="agent-page.html">Adam K. Jollio</a></h5>
                                                        <ul class="inline_social">
                                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="fr-infos-deatil">
                                                        <a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
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

            </div>

            <!-- property Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="property-sidebar">

                    <div class="agency_gridio_wrap">
                        <div class="agency_gridio_header" style="background:#d2382d url(assets/img/bg2.png)no-repeat">
                            <span class="agents_count">22 Agents</span>
                        </div>
                        <div class="agency_gridio_caption">
                            <div class="agency_gridio_thumb">
                                <a href="agency-page.html"><img id="profile_img" src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="agency_gridio_txt">
                                <h4><a href="agency-page.html">California Real Estate</a></h4>
                                <span class="agt_gridio_ocat">Liverpool. London</span>
                                <a href="#" data-toggle="modal" data-target="#autho-message" class="vew_agency_btn">Send Message</a>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Property -->
                    <div class="sidebar-widgets">

                        <h4>Similar Property</h4>

                        <div class="sidebar-property">

                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="{{asset('assetsclient/img/property-img.jpg')}}" class="img-fluid" alt="" />
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Loss vengel New Apartment</a></h4>
                                    <span><i class="ti-location-pin"></i>Sans Fransico</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix sale">For Sale</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>$4,240</h4>
                                        </div>
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

                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="{{asset('assetsclient/img/property-img.jpg')}}" class="img-fluid" alt="" />
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Curmic Studio For Office</a></h4>
                                    <span><i class="ti-location-pin"></i>Montreal, Canada</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix buy">For Buy</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>$8,730</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="{{asset('assetsclient/img/property-img.jpg')}}" class="img-fluid" alt="" />
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Montreal Quebec City</a></h4>
                                    <span><i class="ti-location-pin"></i>Sreek View, New York</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix">For Rent</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>$6,240</h4>
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