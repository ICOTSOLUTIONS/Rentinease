@extends('client.layout.master')
@section('content')
<style>
    .bannarblog {
        background-color: #f4f4f4;
        background-image: url("{{asset('assetsclient/img/slider-3.jpg')}}");
    }
</style>
<!-- ============================ Page Title Start================================== -->
<div class="page-title bannarblog" data-overlay="5">
    <div class="ht-80"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="_page_tetio">
                    <div class="pledtio_wrap"><span>Get In Touch</span></div>
                    <h2 class="text-light mb-0">Get Helps & Friendly Support</h2>
                    <!-- <p>Looking for help or any support? We's available 24 hour a day.</p> -->
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
        <!-- row Start -->
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="property_block_wrap">

                    <div class="property_block_wrap_header">
                        <h4 class="property_block_title">Fillup The Form</h4>
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

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control simple">
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control simple"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-theme" type="submit">Submit Request</button>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3559.303346004152!2d81.00657231451953!3d26.86210176873481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1621502911489!5m2!1sen!2sin" width="100%" height="470" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
        <!-- /row -->
    </div>
</section>
<!-- ============================ Agency List End ================================== -->
<!-- ============================ article Start ================================== -->
<div class="clearfix"></div>
<!-- ============================ article End ================================== -->

@endsection