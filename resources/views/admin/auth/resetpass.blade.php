<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Rentinease</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/favicon.ico') }}"/>
</head>
<style>
  body {
      /* background-color: #293254; */
      background-image: url('/assets/img/bgimg02.jpeg');
      background-repeat: no-repeat;
      background-size: cover;
      /* background-size: 50%; */
  }

  .card {
      background-color: #293254c2 !important;
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
      background: rgba(8, 1, 1, 0.2);
      opacity: none;
      border: 1px solid;
      border-radius: 15px;
      color: white;
      box-shadow: 0px 7px 31px -7px;
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
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="margin-center">
                  <img class="logo" src="{{asset('assets/img/logo.png')}}" alt="">
                  <span class="text-light">Rent</span><span class="color2">in</span><span class="text-light">ease</span>
                </h4>
              </div>
              <div class="card-body">
                <p class="text-light">Enter Your New Password</p>
                @if (Session::has('message'))
                    <div class="alert alert-{{ Session::get('messageType') }}">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">×</button>
                        <strong>{{ Session::get('message') }} </strong>
                    </div>
                @endif
                <form method="POST" action="{{ route('admin.reset.pass') }}">
                  @csrf
                  {{-- <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  </div> --}}
                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" tabindex="2" required>
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="confirm_pass" tabindex="2" required>
                    <input type="hidden" name="token" value="{{ $token }}">
                    @error('confirm_pass')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Reset Password
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
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>