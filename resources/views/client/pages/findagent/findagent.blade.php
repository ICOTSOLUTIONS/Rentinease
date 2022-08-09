@extends('client.layout.master')
@section('content')
<style>
    .bannaragent {
        background-color: #f4f4f4;
        background-image: url("{{asset('assetsclient/img/close-up-financial-advisor.jpg')}}");
    }
</style>
<!-- ============================ Page Title Start================================== -->
<div class="page-title bannaragent" data-overlay="5">
    <div class="container mt-4">
        <div class="row pt-3">
            <div class="col-lg-12 col-md-12">

                <div class="breadcrumbs-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">All Agents</li>
                    </ol>
                    <h2 class="breadcrumb-title text-light">Agents - Meet All Agents</h2>
                </div>
                <div class="property_block_wrap_header">
                    <ul class="nav nav-pills tabs_system" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="agent-tab" data-toggle="pill" href="#agent" role="tab" aria-controls="agent" aria-selected="true">Agent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="agency-tab" data-toggle="pill" href="#agency" role="tab" aria-controls="agency" aria-selected="false">Agency</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->
<!-- start agency page -->

<!-- Single Block Wrap -->
<div class="property_block_wraps">


    <div class="block-bodys">
        <div class="sidetab-content">
            <div class="tab-content" id="pills-tabContent">
                <!-- Book Now Tab -->
                <div class="tab-pane fade show active" id="agent" role="tabpanel" aria-labelledby="agent-tab">
                    <!-- ============================ Agent List Start ================================== -->
                    <section class="gray min">
                        <div class="container">

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

<<<<<<< HEAD
=======
                    <!-- Single Property -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <div class="_exlio_125">For Rent</div>
                                <div class="list-img-slide">
                                    <div class="click">
                                        <div><a href="single-property-1.html"><img src="{{asset('assetsclient/img/house-isolated-field-min.jpg')}}" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-2.png" class="img-fluid mx-auto" alt="" /></a></div>
                                        <div><a href="single-property-1.html"><img src="assets/img/p-3.png" class="img-fluid mx-auto" alt="" /></a></div>
>>>>>>> 78dc85a3cfdec3f0a9328522b9367c94c5c1e012
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

                    </section>
                    <!-- ============================ Agent List End ================================== -->


                </div>

                <!-- Appointment Now Tab -->
                <div class="tab-pane fade" id="agency" role="tabpanel" aria-labelledby="agency-tab">

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

<<<<<<< HEAD
                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <!-- <div class="_card_list_flex mb-2">
=======
                    <!-- Single Property -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <div class="_exlio_125">For Sale</div>
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
>>>>>>> 78dc85a3cfdec3f0a9328522b9367c94c5c1e012
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

<<<<<<< HEAD
                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <!-- <div class="_card_list_flex mb-2">
=======
                    <!-- Single Property -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-listing property-2">

                            <div class="listing-img-wrapper">
                                <div class="_exlio_125">For Rent</div>
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
>>>>>>> 78dc85a3cfdec3f0a9328522b9367c94c5c1e012
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

<<<<<<< HEAD
                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <!-- <div class="_card_list_flex mb-2">
=======
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
>>>>>>> 78dc85a3cfdec3f0a9328522b9367c94c5c1e012
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

<<<<<<< HEAD
                                                <div class="listing-detail-wrapper">
                                                    <div class="listing-short-detail-wrap">
                                                        <!-- <div class="_card_list_flex mb-2">
=======
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
>>>>>>> 78dc85a3cfdec3f0a9328522b9367c94c5c1e012
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
<<<<<<< HEAD
                                        <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>Nationality
=======
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
>>>>>>> 78dc85a3cfdec3f0a9328522b9367c94c5c1e012
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
                                                            <div><a href="{{url('/agencyproperty')}}"><img src="{{asset('assetsclient/img/myimg.jpg')}}" class="img-fluid mx-aut,o" alt="" /></a></div>
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

                </div>
            </div>
        </div>
    </div>
</div>



<!-- end agency page -->

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