@extends('client.layout.master')
@section('content')
<style>
    .bannaragent {
        background-color: #f4f4f4;
        background-image: url("{{asset('assetsclient/img/close-up-financial-advisor.jpg')}}");
    }

    .bg2 {
        background: #d2382d url("{{asset('assetsclient/img/bg2.png')}}") no-repeat;
    }
</style>

<!-- ============================ Page Title Start================================== -->
<div class="page-title bannaragent" data-overlay="5">
    <div class="container mt-4">
        <div class="row pt-3">
            <div class="col-lg-12 col-md-12">

                <div class="breadcrumbs-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Agent Detail</li>
                    </ol>
                    <h2 class="breadcrumb-title">Dubai - UAE</h2>
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
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Agent Detail -->
                        <!-- <div class="sider_blocks_wrap">
                            <div class="side-booking-body">
                                <div class="agent-_blocks_title">

                                    <div class="agent-_blocks_thumb"><img src="{{asset('assetsclient/img/myimg.jpg')}}" alt=""></div>
                                    <div class="agent-_blocks_caption">
                                        <h4>ADNAN</h4>
                                        <span class="approved-agent"><i class="ti-check"></i>approved</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <a href="#" class="agent-btn-contact" data-toggle="modal" data-target="#autho-message"><i class="ti-comment-alt"></i>Message</a>

                                <span id="number" data-last="+971 555 5555">
                                    <span><i class="ti-headphone-alt"></i><a class="see">++971 (555) 55...Show</a></span>
                                </span>
                            </div>
                        </div> -->


                        <div class="agency_gridio_wrap">
                            <div class="agency_gridio_header bg2">
                                <span class="agents_count">22 Agents</span>
                            </div>
                            <div class="agency_gridio_caption">
                                <div class="agency_gridio_thumb">
                                    <a href="agency-page.html"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid" alt="" /></a>
                                </div>
                                <div class="agency_gridio_txt">
                                    <h4>
                                        <a href="#">ADNAN</a>
                                    </h4>
                                    <span class="agt_gridio_ocat">DUBAI.UAE</span>
                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="vew_agency_btn">Send Message</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8 col-md-12 col-sm-12 ">
                        <!-- Single Block Wrap -->
                        <div class="_prtis_list mb-4">
                            <div class="_prtis_list_header">
                                <ul>
                                    <li>
                                        <div class="content_thumb"><i class="fa fa-envelope"></i></div>
                                        <div class="content">
                                            <span class="dark">adnan@gmail.com</span>
                                            <span class="title">Email</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content_thumb"><i class="fa fa-phone"></i></div>
                                        <div class="content">
                                            <span class="dark">000 000 0000</span>
                                            <span class="title">Call Me</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content_thumb"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="content">
                                            <span class="dark">DUBAI,UAE</span>
                                            <span class="title">Location</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="_prtis_list_body">
                                <ul class="deatil_features">
                                    <li><strong>ADNAN</strong>Name</li>
                                    <li><strong>adnan@gmail.com</strong>Email</li>
                                    <li><strong>000 000 0000</strong>Call</li>
                                    <li><strong>BUR DUBAI</strong>City</li>
                                    <li><strong>Lorem</strong>State</li>
                                    <li><strong>UNITED ARAB EMIRATES </strong>Country</li>
                                    <li><strong>+971 555 5555</strong>Fax</li>
                                    <li><strong>22 Listed</strong>Property</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Block Wrap -->
                <div class="property_block_wrap">

                    <div class="property_block_wrap_header">
                        <h4 class="property_block_title">Agent Info</h4>
                    </div>

                    <div class="block-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="lni-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="lni-twitter"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-instagram"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-linkedin"></i></a></li>
                        </ul>
                    </div>
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
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="property-listing property-2">

                                            <div class="listing-img-wrapper">
                                                <div class="_exlio_125">Featured</div>
                                                <div class="list-img-slide">
                                                    <div class="click">
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-1.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-2.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-3.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
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
                                                            <h6 class="listing-card-info-price mb-0">$6,700</h6>
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
                                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>4 Beds
                                                    </div>
                                                    <div class="listing-card-info-icon">
                                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                                    </div>
                                                    <div class="listing-card-info-icon">
                                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 sqft
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-footer">
                                                <div class="footer-first">
                                                    <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />Montreal, Canada</div>
                                                </div>
                                                <div class="footer-flex">
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
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Single Property -->

                                    <!-- Single Property -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="property-listing property-2">

                                            <div class="listing-img-wrapper">
                                                <div class="_exlio_125">Featured</div>
                                                <div class="list-img-slide">
                                                    <div class="click">
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-4.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-5.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-6.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail-wrap">
                                                    <div class="_card_list_flex mb-2">
                                                        <div class="_card_flex_01">
                                                            <span class="_list_blickes _netork">5 Network</span>
                                                            <span class="_list_blickes types">Apartment</span>
                                                        </div>
                                                        <div class="_card_flex_last">
                                                            <h6 class="listing-card-info-price mb-0">$6,900</h6>
                                                        </div>
                                                    </div>
                                                    <div class="_card_list_flex">
                                                        <div class="_card_flex_01">
                                                            <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">425 Vine 012 Street, Montreal Canada, UHW45Q</a></h4>
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
                                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>700 sqft
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-footer">
                                                <div class="footer-first">
                                                    <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />Montreal, Canada</div>
                                                </div>
                                                <div class="footer-flex">
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
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Single Property -->

                                    <!-- Single Property -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="property-listing property-2">

                                            <div class="listing-img-wrapper">
                                                <div class="_exlio_125">Featured</div>
                                                <div class="list-img-slide">
                                                    <div class="click">
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-7.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-8.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-9.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail-wrap">
                                                    <div class="_card_list_flex mb-2">
                                                        <div class="_card_flex_01">
                                                            <span class="_list_blickes _netork">4 Network</span>
                                                            <span class="_list_blickes types">Villas</span>
                                                        </div>
                                                        <div class="_card_flex_last">
                                                            <h6 class="listing-card-info-price mb-0">$8,500</h6>
                                                        </div>
                                                    </div>
                                                    <div class="_card_list_flex">
                                                        <div class="_card_flex_01">
                                                            <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">1244 Vansh Market, Mise Mizkel Australia, AU456HA</a></h4>
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
                                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                                    </div>
                                                    <div class="listing-card-info-icon">
                                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 sqft
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-footer">
                                                <div class="footer-first">
                                                    <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />Montreal, Canada</div>
                                                </div>
                                                <div class="footer-flex">
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
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Single Property -->

                                    <!-- Single Property -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="property-listing property-2">

                                            <div class="listing-img-wrapper">
                                                <div class="_exlio_125">Featured</div>
                                                <div class="list-img-slide">
                                                    <div class="click">
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-10.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-11.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-12.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
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
                                                            <h6 class="listing-card-info-price mb-0">$7,900</h6>
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
                                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>4 Beds
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
                                                    <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />Montreal, Canada</div>
                                                </div>
                                                <div class="footer-flex">
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
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Single Property -->

                                    <!-- Single Property -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="property-listing property-2">

                                            <div class="listing-img-wrapper">
                                                <div class="_exlio_125">Featured</div>
                                                <div class="list-img-slide">
                                                    <div class="click">
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-13.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-14.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-15.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail-wrap">
                                                    <div class="_card_list_flex mb-2">
                                                        <div class="_card_flex_01">
                                                            <span class="_list_blickes _netork">5 Network</span>
                                                            <span class="_list_blickes types">Family</span>
                                                        </div>
                                                        <div class="_card_flex_last">
                                                            <h6 class="listing-card-info-price mb-0">$8,500</h6>
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
                                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>5 Beds
                                                    </div>
                                                    <div class="listing-card-info-icon">
                                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>3 Bath
                                                    </div>
                                                    <div class="listing-card-info-icon">
                                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>920 sqft
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-footer">
                                                <div class="footer-first">
                                                    <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />California, USA</div>
                                                </div>
                                                <div class="footer-flex">
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
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Single Property -->
                                    <!-- Single Property -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="property-listing property-2">

                                            <div class="listing-img-wrapper">
                                                <div class="_exlio_125">Featured</div>
                                                <div class="list-img-slide">
                                                    <div class="click">
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-16.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-17.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/p-18.png')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail-wrap">
                                                    <div class="_card_list_flex mb-2">
                                                        <div class="_card_flex_01">
                                                            <span class="_list_blickes _netork">7 Network</span>
                                                            <span class="_list_blickes types">Condos</span>
                                                        </div>
                                                        <div class="_card_flex_last">
                                                            <h6 class="listing-card-info-price mb-0">$1,200</h6>
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
                                                        <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 Bath
                                                    </div>
                                                    <div class="listing-card-info-icon">
                                                        <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>950 sqft
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="listing-detail-footer">
                                                <div class="footer-first">
                                                    <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />Denever, New York</div>
                                                </div>
                                                <div class="footer-flex">
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
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Single Property -->

                                </div>
                            </div>

                            <!-- Appointment Now Tab -->
                            <div class="tab-pane fade" id="pills-agent" role="tabpanel" aria-labelledby="pills-agent-tab">
                                <div class="row justify-content-center pt-5">

                                    <!-- Single Agent -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="grid_agents">
                                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                            <div class="grid_agents-wrap">

                                                <div class="fr-grid-thumb">
                                                    <a href="{{url('/agentproperty')}}">
                                                        <span class="verified"><img src="{{asset('assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                                        <img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="">
                                                    </a>
                                                </div>

                                                <div class="fr-grid-deatil">
                                                    <span><i class="ti-location-pin mr-1"></i>DUBAI, UAE</span>
                                                    <h5 class="fr-can-name"><a href="{{url('/agentproperty')}}">ADNAN</a></h5>
                                                    <ul class="inline_social">
                                                        <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="fr-infos-deatil">
                                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                    <!-- Single Agent -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="grid_agents">
                                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                            <div class="grid_agents-wrap">

                                                <div class="fr-grid-thumb">
                                                    <a href="{{url('/agentproperty')}}">
                                                        <span class="verified"><img src="{{asset('assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                                        <img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="">
                                                    </a>
                                                </div>

                                                <div class="fr-grid-deatil">
                                                    <span><i class="ti-location-pin mr-1"></i>DUBAI, UAE</span>
                                                    <h5 class="fr-can-name"><a href="{{url('/agentproperty')}}">ADNAN</a></h5>
                                                    <ul class="inline_social">
                                                        <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="fr-infos-deatil">
                                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Single Agent -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="grid_agents">
                                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                            <div class="grid_agents-wrap">

                                                <div class="fr-grid-thumb">
                                                    <a href="{{url('/agentproperty')}}">
                                                        <span class="verified"><img src="{{asset('assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                                        <img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="">
                                                    </a>
                                                </div>

                                                <div class="fr-grid-deatil">
                                                    <span><i class="ti-location-pin mr-1"></i>DUBAI, UAE</span>
                                                    <h5 class="fr-can-name"><a href="{{url('/agentproperty')}}">ADNAN</a></h5>
                                                    <ul class="inline_social">
                                                        <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="fr-infos-deatil">
                                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Single Agent -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="grid_agents">
                                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                            <div class="grid_agents-wrap">

                                                <div class="fr-grid-thumb">
                                                    <a href="{{url('/agentproperty')}}">
                                                        <span class="verified"><img src="{{asset('assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                                        <img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="">
                                                    </a>
                                                </div>

                                                <div class="fr-grid-deatil">
                                                    <span><i class="ti-location-pin mr-1"></i>DUBAI, UAE</span>
                                                    <h5 class="fr-can-name"><a href="{{url('/agentproperty')}}">ADNAN</a></h5>
                                                    <ul class="inline_social">
                                                        <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="fr-infos-deatil">
                                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Single Agent -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="grid_agents">
                                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                            <div class="grid_agents-wrap">

                                                <div class="fr-grid-thumb">
                                                    <a href="{{url('/agentproperty')}}">
                                                        <span class="verified"><img src="{{asset('assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                                        <img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="">
                                                    </a>
                                                </div>

                                                <div class="fr-grid-deatil">
                                                    <span><i class="ti-location-pin mr-1"></i>DUBAI, UAE</span>
                                                    <h5 class="fr-can-name"><a href="{{url('/agentproperty')}}">ADNAN</a></h5>
                                                    <ul class="inline_social">
                                                        <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="fr-infos-deatil">
                                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Single Agent -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="grid_agents">
                                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                            <div class="grid_agents-wrap">

                                                <div class="fr-grid-thumb">
                                                    <a href="{{url('/agentproperty')}}">
                                                        <span class="verified"><img src="{{asset('assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                                        <img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="">
                                                    </a>
                                                </div>

                                                <div class="fr-grid-deatil">
                                                    <span><i class="ti-location-pin mr-1"></i>DUBAI, UAE</span>
                                                    <h5 class="fr-can-name"><a href="{{url('/agentproperty')}}">ADNAN</a></h5>
                                                    <ul class="inline_social">
                                                        <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="fr-infos-deatil">
                                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Single Agent -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="grid_agents">
                                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                            <div class="grid_agents-wrap">

                                                <div class="fr-grid-thumb">
                                                    <a href="{{url('/agentproperty')}}">
                                                        <span class="verified"><img src="{{asset('assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                                        <img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="">
                                                    </a>
                                                </div>

                                                <div class="fr-grid-deatil">
                                                    <span><i class="ti-location-pin mr-1"></i>DUBAI, UAE</span>
                                                    <h5 class="fr-can-name"><a href="{{url('/agentproperty')}}">ADNAN</a></h5>
                                                    <ul class="inline_social">
                                                        <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="fr-infos-deatil">
                                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Single Agent -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="grid_agents">
                                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                            <div class="grid_agents-wrap">

                                                <div class="fr-grid-thumb">
                                                    <a href="{{url('/agentproperty')}}">
                                                        <span class="verified"><img src="{{asset('assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                                        <img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="">
                                                    </a>
                                                </div>

                                                <div class="fr-grid-deatil">
                                                    <span><i class="ti-location-pin mr-1"></i>DUBAI, UAE</span>
                                                    <h5 class="fr-can-name"><a href="{{url('/agentproperty')}}">ADNAN</a></h5>
                                                    <ul class="inline_social">
                                                        <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="fr-infos-deatil">
                                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Single Agent -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="grid_agents">
                                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                                            <div class="grid_agents-wrap">

                                                <div class="fr-grid-thumb">
                                                    <a href="{{url('/agentproperty')}}">
                                                        <span class="verified"><img src="{{asset('assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                                        <img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-auto" alt="">
                                                    </a>
                                                </div>

                                                <div class="fr-grid-deatil">
                                                    <span><i class="ti-location-pin mr-1"></i>DUBAI, UAE</span>
                                                    <h5 class="fr-can-name"><a href="{{url('/agentproperty')}}">ADNAN</a></h5>
                                                    <ul class="inline_social">
                                                        <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                                        <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                                        <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                                        <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="fr-infos-deatil">
                                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
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
<!-- Send Message -->
<div class="modal fade" id="autho-message" tabindex="-1" role="dialog" aria-labelledby="authomessage" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content" id="authomessage">
            <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
            <div class="modal-body">
                <h4 class="modal-header-title">Drop Message</h4>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>Subject</label>
                            <div class="input-with-icons">
                                <input type="text" class="form-control" placeholder="Message Title" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Messages</label>
                            <div class="input-with-icons">
                                <textarea class="form-control ht-80"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width pop-login">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
@endsection