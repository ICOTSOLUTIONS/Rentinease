@extends('client.layout.master')
@section('content')

<!-- ============================ Page Title Start================================== -->
<div class="page-title" style="background:#f4f4f4 url(assetsclient/img/slider-3.jpg);" data-overlay="5">
    <div class="ht-80"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="_page_tetio">
                    <div class="pledtio_wrap"><span>Get In Touch</span></div>
                    <h2 class="text-light mb-0">Get Helps & Friendly Support</h2>
                    <p>Looking for help or any support? We's available 24 hour a day.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="ht-120"></div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agency List Start ================================== -->
<section class="pt-0">
    <div class="container">
        <div class="row align-items-center pretio_top">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact-box">
                    <i class="ti-shopping-cart theme-cl"></i>
                    <h4>Contact Sales</h4>
                    <p>info@icotsolutions.com</p>
                    <span>++** *** ** ***</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact-box">
                    <i class="ti-user theme-cl"></i>
                    <h4>Contact Sales</h4>
                    <p>info@icotsolutions.com</p>
                    <span>++** *** ** ***</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="contact-box">
                    <i class="ti-comment-alt theme-cl"></i>
                    <h4>Start Live Chat</h4>
                    <span>+** *** ** ***</span>
                    <span class="live-chat">Live Chat</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Agency List End ================================== -->

<!-- ============================ Our Partner Start ================================== -->
<section class="gray-simple">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10 col-sm-12 flex-wrap justify-content-center text-center">
                <div class="property_block_wrap">

                    <div class="property_block_wrap_header">
                        <h4 class="property_block_title">Agency Form</h4>
                    </div>

                    <div class="block-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control simple">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control simple">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="email" class="form-control simple">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control simple">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control simple"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-theme" type="submit">Submit Request</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Our Partner End ================================== -->
@endsection
