@extends('client.layout.master')
@section('content')
<style>
    .bannaragent {
        background-color: #f4f4f4;
        background-image: url("{{asset('assetsclient/img/slider-5.jpg')}}");
    }
</style>
<!-- ============================ Page Title Start================================== -->
<div class="page-title" data-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="breadcrumbs-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Choose Package</li>
                    </ol>
                    <h2 class="breadcrumb-title">Select Your Membership</h2>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ User Dashboard ================================== -->
<section class="gray pt-5 pb-5">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-3 col-md-4">
                <div class="property_dashboard_navbar">

                    <div class="dash_user_avater">
                        <img src="assets/img/user-3.jpg" class="img-fluid avater" alt="">
                        <h4>Adam Harshvardhan</h4>
                        <span>Canada USA</span>
                    </div>

                    <div class="dash_user_menues">
                        <ul>
                            <li><a href="dashboard.html"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>
                            <li><a href="my-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li>
                            <li><a href="bookmark-list.html"><i class="fa fa-bookmark"></i>Saved Property<span class="notti_coun style-2">7</span></a></li>
                            <li><a href="my-property.html"><i class="fa fa-tasks"></i>My Properties</a></li>
                            <!-- <li><a href="messages.html"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li> -->
                            <li class="active"><a href="choose-package.html"><i class="fa fa-gift"></i>Choose Package<span class="expiration">10 days left</span></a></li>
                            <li><a href="submit-property-dashboard.html"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
                            <li><a href="change-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                        </ul>
                    </div>

                    <div class="dash_user_footer">
                        <ul>
                            <li><a href="#"><i class="fa fa-power-off"></i></a></li>
                            <li><a href="#"><i class="fa fa-comment"></i></a></li>
                            <li><a href="#"><i class="fa fa-cog"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-lg-9 col-md-8">
                <div class="dashboard-body">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="extraPackages">
                                <div class="row">

                                    <!-- Single Package -->
                                    <div class="col-lg-4 col-md-4 c-l-sm-12">
                                        <div class="package-box">
                                            <span class="theme-cl">Gold Package</span>
                                            <h4 class="packages-features-title">USD 49 / 1 year</h4>
                                            <ul class="packages-lists-list">
                                                <li>Unlimited listings</li>
                                                <li>100 Featured</li>
                                                <li>Unlimited Images</li>
                                                <li>Help & Support</li>
                                            </ul>
                                            <div class="buypackage">
                                                <div class="switchbtn paying">
                                                    <input id="gold" class="switchbtn-checkbox" type="radio" value="2" checked name="package7">
                                                    <label class="switchbtn-label" for="gold"></label>
                                                </div>
                                                <span>Switch to this package</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Package -->
                                    <div class="col-lg-4 col-md-4 c-l-sm-12">
                                        <div class="package-box">
                                            <span class="theme-cl">Premium Package</span>
                                            <h4 class="packages-features-title">USD 39 / 1 year</h4>
                                            <ul class="packages-lists-list">
                                                <li>20 listings</li>
                                                <li>5 Featured</li>
                                                <li>5 Images/ per list</li>
                                                <li>Help & Support</li>
                                            </ul>
                                            <div class="buypackage">
                                                <div class="switchbtn paying">
                                                    <input id="premium" class="switchbtn-checkbox" type="radio" value="2" name="package7">
                                                    <label class="switchbtn-label" for="premium"></label>
                                                </div>
                                                <span>Switch to this package</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Package -->
                                    <div class="col-lg-4 col-md-4 c-l-sm-12">
                                        <div class="package-box">
                                            <span class="theme-cl">Standard Package</span>
                                            <h4 class="packages-features-title">USD 10 / 1 year</h4>
                                            <ul class="packages-lists-list">
                                                <li>10 listings</li>
                                                <li>2 Featured</li>
                                                <li>2 Images</li>
                                                <li>Help & Support</li>
                                            </ul>
                                            <div class="buypackage">
                                                <div class="switchbtn paying">
                                                    <input id="standard" class="switchbtn-checkbox" type="radio" value="2" name="package7">
                                                    <label class="switchbtn-label" for="standard"></label>
                                                </div>
                                                <span>Switch to this package</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-5">
                                    <div class="col-lg-12 col-md-12">
                                        <h4>Payment Method</h4>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <a href="#" class="pay-btn paypal">Pay with PayPal</a>
                                        <a href="#" class="pay-btn stripe">Pay with Stripe</a>
                                        <a href="#" class="pay-btn wire-trans">Wire Transfer</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- Row -->


                </div>

            </div>
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->

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

<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer style-2">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-5">
                    <div class="footer_widget">
                        <img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" />
                        <h4 class="extream mb-3">Do you need help with<br>anything?</h4>
                        <p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every month</p>
                        <div class="foot-news-last">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <div class="input-group-append">
                                    <button type="button" class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 ml-auto">
                    <div class="row">

                        <div class="col-lg-4 col-md-4">
                            <div class="footer_widget">
                                <h4 class="widget_title">Layouts</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Home Page</a></li>
                                    <li><a href="#">About Page</a></li>
                                    <li><a href="#">Service Page</a></li>
                                    <li><a href="#">Property Page</a></li>
                                    <li><a href="#">Contact Page</a></li>
                                    <li><a href="#">Single Blog</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer_widget">
                                <h4 class="widget_title">All Sections</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Headers<span class="new">New</span></a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Attractive<span class="new">New</span></a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">Footers</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer_widget">
                                <h4 class="widget_title">Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Changelog<span class="update">Update</span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">© 2021 RentUP. Designd By <a href="https://themezhub.com/">ThemezHub</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->

@endsection