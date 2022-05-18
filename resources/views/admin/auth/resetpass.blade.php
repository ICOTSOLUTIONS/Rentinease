<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Reset-Password Rentinease</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>
<style>
  body {
    /* background-color: #293254; */
    background-image: url('assets/img/background-image.JFIF');
    background-repeat: no-repeat;
    background-size: cover;
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
    margin-left: 35% !important;
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
                <h4 class="margin-center"><span class="text-light">Rent</span><span class="color2">in</span><span class="text-light">ease</span></h4>
              </div>
              <div class="card-body">
                <p class="text-light">Enter Your New Password</p>
                <form method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  </div>
                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" tabindex="2" required>
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="confirm-password" tabindex="2" required>
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
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>

</html>