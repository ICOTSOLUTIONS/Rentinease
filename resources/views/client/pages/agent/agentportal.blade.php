@extends('client.layout.master')
@section('content')
<style>
    .btn.btn-theme:hover {
        background: #026e31;
        border: 1px solid #27ae60;
        color: #ffffff;
    }
</style>
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
            <div class="col-lg-6 col-md-6 col-sm-12 flex-wrap justify-content-center text-center">
                <div class="property_block_wrap">
                    @if (Session::has('message'))
                    <div class="alert alert-{{ Session::get('messageType') }}">
                        <strong>{{ Session::get('message') }} </strong>
                        <button type="button" class="btn-close float-right" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form action="{{ route('agent.register') }}" method="POST">
                        @csrf
                        <div class="property_block_wrap_header">
                            <h3 class="property_block_title">Signup Form</h3>
                        </div>
                        <div class="block-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label class="float-left text-dark">Name</label>
                                        <input type="text" name="name" class="form-control simple" value="{{ old('name') }}">
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label class="float-left text-dark">Company Name</label>
                                        <input type="text" name="c_name" class="form-control simple" value="{{ old('c_name') }}">
                                        @error('c_name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label class="float-left text-dark">Email</label>
                                        <input type="email" name="email" class="form-control simple" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label class="float-left text-dark">Phone Number</label>
                                        <input type="number" name="number" class="form-control simple" value="{{ old('number') }}">
                                        @error('number')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Default dropright button -->
                                <!-- <div class="btn-group dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropright
                                    </button> -->
                                <!-- <div class="dropdown-menu"> -->
                                <!-- Dropdown menu links -->
                                <select name="" id="" class="form-control" aria-label="Default select example">
                                    <option value="" class="text-center" selected>--- Select ---</option>
                                    <option value="" class="text-center">AGENT</option>
                                    <option value="" class="text-center">AGENCY</option>
                                    <option value="" class="text-center">REAL STATE</option>
                                    <option value="" class="text-center">DEVELOPER</option>
                                    <option value="" class="text-center">SALES & MARKETING</option>
                                    <option value="" class="text-center">LENDING</option>
                                    <option value="" class="text-center">PROPERTY - MANAGMENT</option>
                                    <option value="" class="text-center">OWNER</option>
                                    <option value="" class="text-center">PROFESSTIONAL SERVICES</option>
                                </select>
                                <!-- <button class="dropdown-item" type="button">Select</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button> -->
                                <!-- </div> -->
                                <!-- </div>
                            </div> -->
                                <div class="col-md-12 form-group mt-2">
                                    <button class="btn btn-theme w-100" type="submit">Register</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Our Partner End ================================== -->
@endsection