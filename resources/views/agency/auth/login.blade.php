<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login Rentinease</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assetagency/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetagency/bundles/bootstrap-social/bootstrap-social.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assetagency/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assetagency/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assetagency/css/custom.css') }}">
    <!-- <link rel='shortcut icon' type='image/x-icon'
        href="{{ asset('assetagency/img/favicon.ico') }}" /> -->
</head>
<style>
    body {
        background-image: url("{{asset('assetagency/img/login/02.jpg')}}");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .card {
        background: rgb(8 1 1 / 66%);
        opacity: none;
        border: 1px solid;
        border-radius: 15px;
        color: white;
        box-shadow: 0px 7px 31px -7px;
    }

    /* 
    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        width: 100%;
        height: auto;
        opacity: 0.9;
    } */
</style>

<body>
    <!-- <video autoplay muted loop id="myVideo">
        <source src="{{ asset('assetagency/video/01.mp4') }}" type="video/mp4">
    </video> -->
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header justify-content-center">
                                <h2 class="text-success fw-bolder">Login</h2>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                <div class="alert alert-{{ Session::get('messageType') }}">
                                    <strong>{{ Session::get('message') }} </strong>
                                    <button type="button" class="btn-close float-right" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                <form method="POST" action="{{ route('login.process') }}" class="needs-validation" novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="text-success fs-3">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label text-success fs-3">Password</label>
                                            <div class="float-right">
                                                <a href="{{ route('forgot') }}" class="text-small text-light">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group" id="show_hide_password">
                                            <input type="password"  id="password" class="form-control" name="password"
                                                tabindex="2" required>
                                                    <a href=""><i class="icon fa fa-eye-slash float-right"  ></i></a>
                                            <!-- <i class="icon float-right" data-feather="eye-off"></i> -->
                                        </div> --}}
                                        <div class="form-group">
                                            <div class="input-icons input-group" id="show_hide_password">
                                                <input class="form-control" type="password" id="password" name="password" tabindex="2" required>
                                                <a href="">
                                                    <div class="input-group-text" style="background-color: #c7cfd5">
                                                        <i class="fa fa-eye-slash text-center" aria-hidden="true"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                            <label class="custom-control-label text-light" for="remember-me">Remember Me</label>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            LOGIN
                                        </button>
                                    </div>
                                </form>

                                <!-- <div class="mt-5  text-center text-light">
                                    Don't have an account? <a href="{{ url('/register') }}">Create One</a>
                                </div> -->
                                <!-- <div class="text-center mt-4 mb-3">
                                    <div class="text-job text-muted">Login With Social</div>
                                </div>
                                <div class="row sm-gutters">
                                    <div class="col-6">
                                        <a class="btn btn-block btn-social btn-facebook">
                                            <span class="fab fa-facebook"></span> Facebook
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-block btn-social btn-twitter">
                                            <span class="fab fa-twitter"></span> Twitter
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('assetagency/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('assetagency/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assetagency/js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("fa-eye-slash");
                    $('#show_hide_password i').removeClass("fa-eye");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("fa-eye-slash");
                    $('#show_hide_password i').addClass("fa-eye");
                }
            });
        });
    </script>
</body>

</html>