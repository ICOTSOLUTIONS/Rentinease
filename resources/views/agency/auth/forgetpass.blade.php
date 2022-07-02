<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Forget-Password Rentinease</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assetagency/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assetagency/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assetagency/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assetagency/css/custom.css') }}">
    <!-- <link rel='shortcut icon' type='image/x-icon' href='assetagency/img/favicon.ico' /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<style>
    body {
        background-image: url("{{asset('assetagency/img/login/01.jpg')}}");
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

    /* #myVideo {
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
            <div class="container mt-5 pt-4">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header justify-content-center">
                                <h2 class="text-success fw-bolder">Forget Password</h2>
                            </div>
                            <div class="card-body">
                                <p class="text-light mt-3">We will send a link to reset your password</p>
                                @if(Session::has('message'))
                                <div class="alert alert-{{ Session::get('messageType') }}">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>{{ Session::get('message') }} </strong>
                                </div>
                                @endif
                                <form method="POST" action="{{ route('agency.forgot.pass') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" value="{{ old('email') }}" name="email" tabindex="1" required autofocus>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Forgot Password
                                        </button>
                                    </div>
                                </form>
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
</body>

</html>