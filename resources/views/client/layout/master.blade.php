<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themezhub.net/rentup-live/rentup/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 08:01:56 GMT -->

<head>
	<meta charset="utf-8" />
	<meta name="author" content="Themezhub" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Rentinease</title>

	<!-- Custom CSS -->
	<link href="{{ asset('./assetsclient/css/styles.css')}}" rel="stylesheet">

</head>

<body class="yellow-skin">

	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader"></div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		@include('client.layout.header')
		@yield('content')
		@include('client.layout.footer')

		<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


	</div>
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="{{ asset('./assetsclient/js/jquery.min.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/popper.min.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/ion.rangeSlider.min.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/select2.min.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/slick.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/slider-bg.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/lightbox.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/imagesloaded.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/daterangepicker.js')}}"></script>
	<script src="{{ asset('./assetsclient/js/custom.js')}}"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>

</html>
