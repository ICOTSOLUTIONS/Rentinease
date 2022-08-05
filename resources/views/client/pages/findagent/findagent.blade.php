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

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->


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