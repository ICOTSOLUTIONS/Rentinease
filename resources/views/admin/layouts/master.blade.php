<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Rentinease</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/favicon.ico')}}" />
</head>
<style>
    .bgcolor {
        background-color: #05b87c !important;
    }

    .dark .card {
        background-color: #293254;
    }

    .dark {
        background-color: #05b87c !important;
    }

    .dark .form-control {
        background-color: #05b87c;
        border-color: #979da6;
        color: black;
    }

    .theme-black .page-item.active .page-link {
        background-color: #05b87c;

    }

    .dark select.form-control {
        color: black;

    }

    .btn-hover:hover {
        background-color: #05b87c;
    }

    .dark .form-group>label {
        color: #fff;
    }
</style>

<body class="dark">
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('admin.layouts.header')
            @include('admin.layouts.sidebar')
            <!-- Main Content -->
            <div class="main-content bgcolor">
                @yield('content')
            </div>

        </div>
        @include('admin.layouts.footer')

    </div>
    <!-- General JS Scripts -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script> -->
    <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- Custom JS File -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    @yield('script')
</body>

</html>