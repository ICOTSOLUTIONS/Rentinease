@extends('client.layout.master')
@section('content')
<!-- ============================ Hero Banner  Start================================== -->
<div class="image-cover hero_banner" style="background:url({{ asset('./assetsclient/img/banner-1.png')}}) no-repeat;" data-overlay="0">
    <div class="container">

        <h1 class="big-header-capt mb-0">Search Your Next Home</h1>
        <p class="text-center mb-4">Find new & featured property located in your local city.</p>
        <!-- Type -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11 col-md-12">
                <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                    <div class="search_hero_wrapping">

                        <div class="row">
                            <div class="col-lg-4 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label>City/Street</label>
                                    <div class="input-with-icon">
                                        <select id="location" class="form-control">
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

                            <div class="col-lg-3 col-md-3 col-sm-12">
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

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group none">
                                    <label>Price Range</label>
                                    <div class="input-with-icon">
                                        <select id="price" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="1">From 40,000 To 10m</option>
                                            <option value="2">From 60,000 To 20m</option>
                                            <option value="3">From 70,000 To 30m</option>
                                            <option value="3">From 80,000 To 40m</option>
                                            <option value="3">From 90,000 To 50m</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-1 col-md-2 col-sm-12 small-padd">
                                <div class="form-group none">
                                    <a href="#" class="btn search-btn"><i class="fa fa-search"></i></a>
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
                                    <span class="_list_blickes _netork">4 Network</span>
                                    <span class="_list_blickes types">Condos</span>
                                </div>
                                <div class="_card_flex_last">
                                    <h6 class="listing-card-info-price mb-0">$6,700</h6>
                                </div>
                            </div>
                            <div class="_card_list_flex">
                                <div class="_card_flex_01">
                                    <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">7012 Shine Sehu Street, Liverpool London,
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
                            <div class="foot-location"><img src="{{ asset('./assetsclient/img/pin.svg')}}" width="18" alt="" />Montreal,
                                Canada</div>
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
                                    <span class="_list_blickes _netork">5 Network</span>
                                    <span class="_list_blickes types">Apartment</span>
                                </div>
                                <div class="_card_flex_last">
                                    <h6 class="listing-card-info-price mb-0">$6,900</h6>
                                </div>
                            </div>
                            <div class="_card_list_flex">
                                <div class="_card_flex_01">
                                    <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">425 Vine 012 Street, Montreal Canada, UHW45Q</a>
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
                            <div class="foot-location"><img src="{{ asset('./assetsclient/img/pin.svg')}}" width="18" alt="" />Montreal,
                                Canada</div>
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
                                    <span class="_list_blickes _netork">4 Network</span>
                                    <span class="_list_blickes types">Villas</span>
                                </div>
                                <div class="_card_flex_last">
                                    <h6 class="listing-card-info-price mb-0">$8,500</h6>
                                </div>
                            </div>
                            <div class="_card_list_flex">
                                <div class="_card_flex_01">
                                    <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">1244 Vansh Market, Mise Mizkel Australia,
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
                            <div class="foot-location"><img src="{{ asset('./assetsclient/img/pin.svg')}}" width="18" alt="" />Montreal,
                                Canada</div>
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
</section>
<!-- ============================ Properties End ================================== -->

<!-- ============================ Top Agents ================================== -->
<section class="image-cover min" style="background:#122947 {{ asset('./assetsclient/img/pattern.png')}} no-repeat;">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center light">
                    <h2>Our Featured Agents</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="item-slide space">

                    <!-- Single Item -->
                    <div class="single_items">
                        <div class="grid_agents">
                            <div class="elio_mx_list theme-bg-2">102 Listings</div>
                            <div class="grid_agents-wrap">

                                <div class="fr-grid-thumb">
                                    <a href="agent-page.html">
                                        <span class="verified"><img src="{{ asset('./assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                        <img src="{{ asset('./assetsclient/img/team-1.jpg')}}" class="img-fluid mx-auto" alt="">
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
                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="single_items">
                        <div class="grid_agents">
                            <div class="elio_mx_list theme-bg-2">72 Listings</div>
                            <div class="grid_agents-wrap">

                                <div class="fr-grid-thumb">
                                    <a href="agent-page.html">
                                        <span class="verified"><img src="{{ asset('./assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                        <img src="{{ asset('./assetsclient/img/team-2.jpg')}}" class="img-fluid mx-auto" alt="">
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
                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="single_items">
                        <div class="grid_agents">
                            <div class="elio_mx_list theme-bg-2">22 Listings</div>
                            <div class="grid_agents-wrap">

                                <div class="fr-grid-thumb">
                                    <a href="agent-page.html">
                                        <span class="verified"><img src="{{ asset('./assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                        <img src="{{ asset('./assetsclient/img/team-3.jpg')}}" class="img-fluid mx-auto" alt="">
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
                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="single_items">
                        <div class="grid_agents">
                            <div class="elio_mx_list theme-bg-2">50 Listings</div>
                            <div class="grid_agents-wrap">

                                <div class="fr-grid-thumb">
                                    <a href="agent-page.html">
                                        <span class="verified"><img src="{{ asset('./assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                        <img src="{{ asset('./assetsclient/img/team-4.jpg')}}" class="img-fluid mx-auto" alt="">
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
                                    <a href="#" data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
                                    <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="single_items">
                        <div class="grid_agents">
                            <div class="elio_mx_list theme-bg-2">42 Listings</div>
                            <div class="grid_agents-wrap">

                                <div class="fr-grid-thumb">
                                    <a href="agent-page.html">
                                        <span class="verified"><img src="{{ asset('./assetsclient/img/verified.svg')}}" class="verify mx-auto" alt=""></span>
                                        <img src="{{ asset('./assetsclient/img/team-5.jpg')}}" class="img-fluid mx-auto" alt="">
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
</section>
<!-- ============================ Top Agents End ================================== -->

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
                                <h4>California, USA</h4>
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
                                <h4>Barbingham, USA</h4>
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
                                <h4>Denever, USA</h4>
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
                                <h4>Liverpool, London</h4>
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

<!-- ============================ article Start ================================== -->
<section class="min">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h2>Latest News & Articles</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{ asset('./assetsclient/img/b-1.jpg')}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>12</span>Sep 2021</div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="blog-detail.html">Creative Designs</a><span class="latest_new_post">New</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{ asset('./assetsclient/img/user-1.jpg')}}" class="img-fluid" alt=""></a></div>
                            <h5><a href="agent-page.html" tabindex="-1">Shaurya Preet</a></h5>
                        </div>
                        <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>202</span>
                    </div>

                </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{ asset('./assetsclient/img/b-5.jpg')}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>15</span>Aug 2021</div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="blog-detail.html">UX/UI Developer</a><span class="latest_new_post hot">Hot</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{ asset('./assetsclient/img/user-2.jpg')}}" class="img-fluid" alt=""></a></div>
                            <h5><a href="agent-page.html" tabindex="-1">Nirgam Singh</a></h5>
                        </div>
                        <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>407</span>
                    </div>

                </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{ asset('./assetsclient/img/b-6.jpg')}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>27</span>Nov 2021</div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="blog-detail.html">WordPress Developer & UI</a><span class="latest_new_post">New</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{ asset('./assetsclient/img/user-3.jpg')}}" class="img-fluid" alt=""></a></div>
                            <h5><a href="agent-page.html" tabindex="-1">Dhananjay Singh</a></h5>
                        </div>
                        <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>410</span>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
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