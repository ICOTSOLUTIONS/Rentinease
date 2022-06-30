<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Gati - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assetagency/css/app.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assetagency/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assetagency/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assetagency/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assetagency/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assetagency/css/custom.css') }}">
    <!-- <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' /> -->
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('agency.layouts.header')
            @include('agency.layouts.sidebar')
            <!-- Main Content -->
            @yield('content')
            @include('agency.layouts.footer')
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('assetagency/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('assetagency/bundles/datatables/datatables.min.js') }}"></script>
    <script
        src="{{ asset('assetagency/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('assetagency/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assetagency/js/page/datatables.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('assetagency/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assetagency/js/custom.js') }}"></script>
</body>

</html>