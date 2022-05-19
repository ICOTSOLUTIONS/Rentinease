<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login Rentinease</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-social/bootstrap-social.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href="{{('assets/img/favicon.ico')}}" />
</head>
<style>
    body {
        /* background-color: #293254; */
        background-image: url('assets/img/bgimg02.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        /* background-size: 50%; */
    }

    .card {
        background-color: #293254eb !important;
    }

    .form-group>label {
        color: white;
    }

    .dark .form-group>label {
        color: white;
    }

    .margin-center {
        margin-left: 30% !important;
        font-family: 'Baloo Bhaijaan 2', cursive !important;
    }

    .color2 {
        color: #05b87c;
    }

    .theme-black a {
        color: #6777ef;
    }

    .theme-black .card.card-primary {
        border-top: 2px solid #05b87c;
    }

    .theme-black .btn-primary {
        background-color: #05b87c;
        border-color: transparent !important;
        color: #fff;
    }

    .btn.btn-lg {
        width: 100%;
    }

    .theme-black .btn-primary:hover {
        background-color: #006241 !important;
        color: #fff;
    }

    .dark .card {
        background: transparent !important;
        color: #96a2b4;
        box-shadow: 0 3px 30px rgb(0 0 0 / 20%);
    }

    .logo {
        width: 30px;
        padding-bottom: 5px;
        /* border-radius: 20%; */
        /* box-shadow: 0px 5px 5px 0px rgba(44, 44, 44, .2) */
    }

    /* .color2 {
        color: #293254;
    } */
</style>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="margin-center">
                                <img class="logo" src="{{asset('/assets/img/logo.png')}}" alt="">
                                    <span class="text-light">Rent</span><span class="color2">in</span><span class="text-light">ease</span></h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="#" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="email text-light">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label text-light">Password</label>
                                            <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                            <label class="custom-control-label text-light" for="remember-me">Remember Me</label>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                                <!-- <div class="mt-5  text-center text-light">
                                    Don't have an account? <a href="{{url('/register')}}">Create One</a>
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
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- Custom JS File -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>