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
                            <li class="breadcrumb-item active" aria-current="page">All Agents</li>
                        </ol>
                        <h2 class="breadcrumb-title text-light">Agents - Meet All Agents</h2>
                    </div>
                    <div class="property_block_wrap_header">
                        <ul class="nav nav-pills tabs_system" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="agent-tab" data-toggle="pill" href="#agent" role="tab"
                                    aria-controls="agent" aria-selected="true">Agent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="agency-tab" data-toggle="pill" href="#agency" role="tab"
                                    aria-controls="agency" aria-selected="false">Agency</a>
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
                                    @forelse ($agents as $agent)
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="grid_agents">
                                                <div class="elio_mx_list theme-bg-2">{{ $agent->posting_count ?? 0 }}
                                                    Listings
                                                </div>
                                                <div class="grid_agents-wrap">

                                                    <div class="fr-grid-thumb">
                                                        <a href="{{ url('/agentproperty') }}">
                                                            @if ($agent->authorized)
                                                                <span class="verified"><img
                                                                        src="{{ asset('assetsclient/img/verified.svg') }}"
                                                                        class="verify mx-auto" alt=""></span>
                                                            @endif

                                                            @if (!empty($agent->logo))
                                                                <img src="{{ asset('storage/agent/' . $agent->logo) }}"
                                                                    class="img-fluid mx-auto" alt="">
                                                            @else
                                                                <img src="{{ asset('assetsclient/img/myimg.jpg') }}"
                                                                    class="img-fluid mx-auto" alt="">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="fr-grid-deatil">
                                                        <span><i class="ti-location-pin mr-1"></i>{{ $agent->city ?? '' }},
                                                            {{ $agent->country ?? '' }}</span>
                                                        <h5 class="fr-can-name"><a
                                                                href="{{ route('web.agentproperty', ['id' => $agent->id]) }}">{{ $agent->owner_name ?? '' }}
                                                            </a></h5>
                                                        <ul class="inline_social">
                                                            <li><a href="#" class="fb"><i
                                                                        class="ti-facebook"></i></a></li>
                                                            <li><a href="#" class="ln"><i
                                                                        class="ti-linkedin"></i></a></li>
                                                            <li><a href="#" class="ins"><i
                                                                        class="ti-instagram"></i></a></li>
                                                            <li><a href="#" class="tw"><i
                                                                        class="ti-twitter"></i></a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="fr-infos-deatil">
                                                        <a href="#" data-toggle="modal" data-target="#autho-message"
                                                            class="btn agent-btn theme-bg"><i
                                                                class="fa fa-envelope mr-2"></i>Message</a>
                                                        <a href="#" class="btn agent-btn theme-black"><i
                                                                class="fa fa-phone"></i></a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    @empty
                                        <p>No Agent</p>
                                    @endforelse

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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book.</p>
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
                                            @forelse ($agencies as $agency)
                                                <!-- Single Property -->
                                                <div class="col-lg-3 col-md-6 col-sm-12">
                                                    <div class="property-listing property-2">

                                                        <div class="listing-img-wrapper">
                                                            <div class="list-img-slide">
                                                                <div class="click">
                                                                    <div>
                                                                        <a href="{{ url('/agencyproperty') }}">
                                                                            @if (!empty($agency->logo))
                                                                                <img src="{{ asset('storage/agency/' . $agency->logo) }}"
                                                                                    class="img-fluid mx-auto"
                                                                                    alt="" />
                                                                            @else
                                                                                <img src="{{ asset('assetsclient/img/myimg.jpg') }}"
                                                                                    class="img-fluid mx-auto"
                                                                                    alt="" />
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="listing-detail-wrapper">
                                                            <div class="listing-short-detail-wrap">
                                                                <div class="_card_list_flex">
                                                                    <div class="_card_flex_01">
                                                                        <h4 class="listing-name verified text-center"><a
                                                                                href=""
                                                                                class="prt-link-detail">{{ $agency->owner_name }}</a>
                                                                        </h4>
                                                                        <p class="text-center">
                                                                            {{ $agency->agency_agent_count }} AGENTS</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="listing-detail-footer">
                                                            <div class="footer-first text-center">
                                                                <div class="foot-location d-flex justify-content-start ">
                                                                    <label
                                                                        class="text-success m-1 w-100 fw-bolder">{{ $agency->agency_agent_for_sale_count }}
                                                                        <h6 class="text-dark">For sale </h6>
                                                                    </label>
                                                                    <label
                                                                        class="text-success m-1 w-100 fw-bolder">{{ $agency->agency_agent_for_rent_count }}
                                                                        <h6 class="text-dark">For rent </h6>
                                                                    </label>
                                                                    {{-- <label class="text-success m-1 w-100 fw-bolder">04
                                                                        <h6 class="text-dark">For commercial </h6>
                                                                    </label> --}}
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End Single Property -->
                                            @empty
                                                <p>No Agency</p>
                                            @endforelse

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
