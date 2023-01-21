@extends('client.layout.master')
@section('content')
    <style>
        .bannaragent {
            background-color: #f4f4f4;
            background-image: url("{{ asset('assetsclient/img/close-up-financial-advisor.jpg') }}");
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
                        <h2 class="breadcrumb-title">{{ $agent->city ?? '' }} - {{ $agent->country ?? '' }}</h2>
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
                            <div class="sider_blocks_wrap">
                                <div class="side-booking-body">
                                    <div class="agent-_blocks_title">

                                        <div class="agent-_blocks_thumb">
                                            @if (!empty($agent->logo))
                                                <img src="{{ asset('storage/agent/' . $agent->logo) }}" alt="">
                                            @else
                                                <img src="{{ asset('assetsclient/img/myimg.jpg') }}" alt="">
                                            @endif
                                        </div>
                                        <div class="agent-_blocks_caption">
                                            <h4>{{ $agent->owner_name }}</h4>
                                            @if (!empty($agent->authorized))
                                                <span class="approved-agent"><i class="ti-check"></i>approved</span>
                                            @endif
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <a href="#" class="agent-btn-contact" data-toggle="modal"
                                        data-target="#autho-message"><i class="ti-comment-alt"></i>Message</a>

                                    <span id="number" data-last="+971 555 5555">
                                        <span><i class="ti-headphone-alt"></i><a
                                                class="see">({{ $agent->mobile_code ?? '' }})
                                                {{ $agent->mobile }}</a></span>
                                    </span>
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
                                                <span class="dark">{{ $agent->email ?? '' }}</span>
                                                <span class="title">Email</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content_thumb"><i class="fa fa-phone"></i></div>
                                            <div class="content">
                                                <span class="dark">({{ $agent->mobile_code ?? '' }})
                                                    {{ $agent->mobile ?? '' }}</span>
                                                <span class="title">Call Me</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content_thumb"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="content">
                                                <span
                                                    class="dark">{{ $agent->city ?? '' }},{{ $agent->country ?? '' }}</span>
                                                <span class="title">Location</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="_prtis_list_body">
                                    <ul class="deatil_features">
                                        <li><strong>{{ $agent->owner_name ?? '' }}</strong>Name</li>
                                        <li><strong>{{ $agent->email ?? '' }}</strong>Email</li>
                                        <li><strong>({{ $agent->mobile_code ?? '' }})
                                                {{ $agent->mobile ?? '' }}</strong>Call
                                        </li>
                                        <li><strong>{{ $agent->city ?? '' }}</strong>City</li>
                                        <li><strong>{{ $agent->street ?? '' }}</strong>Street</li>
                                        <li><strong>{{ $agent->country ?? '' }}</strong>Country</li>
                                        <li><strong>({{ $agent->phone_code ?? '' }}) {{ $agent->phone ?? '' }}</strong>Fax
                                        </li>
                                        <li><strong>{{ $agent->agent_posting_count ?? 0 }}</strong>Property</li>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"><i class="lni-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="lni-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="lni-instagram"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="lni-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- Single Block Wrap -->
                    <div class="div_wraps">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4>All Properties</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @if (count($agent->postings))
                            @foreach ($agent->postings as $posting)
                                <!-- Single Property -->
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="property-listing property-2">

                                        <div class="listing-img-wrapper">
                                            <div class="_exlio_125">Featured</div>
                                            <div class="list-img-slide">
                                                <div class="click">
                                                    <div>
                                                        <a href="#">
                                                            <img src="{{ asset('assetsclient/img/p-1.png') }}"
                                                                class="img-fluid mx-auto" alt="" />
                                                        </a>
                                                    </div>
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
                                                        <h6 class="listing-card-info-price mb-0">AED
                                                            {{ $posting->price ?? 0 }}</h6>
                                                    </div>
                                                </div>
                                                <div class="_card_list_flex">
                                                    <div class="_card_flex_01">
                                                        <h4 class="listing-name verified"><a href="#"
                                                                class="prt-link-detail">{{ $posting->address ?? '' }}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">
                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon"><img src="assets/img/bed.svg"
                                                            width="10" alt="" /></div>4 Beds
                                                </div>
                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg"
                                                            width="10" alt="" /></div>2 Bath
                                                </div>
                                                <div class="listing-card-info-icon">
                                                    <div class="inc-fleat-icon">
                                                        {{-- <img src="assets/img/move.svg"
                                                            width="16" alt="" /> --}}
                                                    </div>{{ $posting->size ?? '' }} {{ $posting->size_square ?? '' }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-detail-footer">
                                            <div class="footer-first">
                                                <div class="foot-location"><img src="assets/img/pin.svg" width="18"
                                                        alt="" />{{ $posting->area }}, {{ $posting->city }}</div>
                                            </div>
                                            {{-- <div class="footer-flex">
                                                <ul class="selio_style">
                                                    <li>
                                                        <div class="prt_saveed_12lk">
                                                            <label class="toggler toggler-danger" data-toggle="tooltip"
                                                                data-placement="top"
                                                                data-original-title="Save property"><input
                                                                    type="checkbox"><i class="ti-heart"></i></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="prt_saveed_12lk">
                                                            <a href="compare-property.html" data-toggle="tooltip"
                                                                data-placement="top"
                                                                data-original-title="Compare property"><i
                                                                    class="ti-control-shuffle"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="prt_saveed_12lk">
                                                            <a href="#" data-toggle="tooltip"
                                                                data-placement="top"
                                                                data-original-title="View Property"><i
                                                                    class="ti-arrow-right"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>

                                    </div>
                                </div>
                                <!-- End Single Property -->
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ About Agency End ================================== -->

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
