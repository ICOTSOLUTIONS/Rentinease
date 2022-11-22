<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rentinease</title>

    <!-- Custom CSS -->
    <link href="{{ asset('./assetsclient/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('./assetsclient/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('./assetagency/bundles/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('./assetsclient/css/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet"> -->
</head>
<style>
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background-color: #05b87c;
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background: #293254;
    }

    .bgloginimg {
        background-image:url("{{ asset('./assetsclient/img/log.jpg')}}") !important;
        background-repeat: no-repeat !important;
    }

    /* .bannarimg {
        background-image:url("{{ asset('./assetsclient/img/bannar/03.jpg')}}") !important;
        background-repeat: no-repeat !important;
    } */


    .bannarimg {
        background-image:url("{{ asset('./assetsclient/img/bannar/03.jpg')}}") !important;
        /* border: 2px solid red; */
        height: 650px;
        background-size: 100%;
        background-repeat: no-repeat;
        /* background-attachment: fixed; */
        background-position: center;
        background-size: cover;
        position: relative;
    }

    .bannarimg::before {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        background-color: black;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0.5;
        /* margin-top: 125px; */
    }

    .bannarimg>* {
        z-index: 10;
        position: relative;
    }

    .imgcover {

        background-image: url("{{asset('./assetsclient/img/pattern.png')}}") !important;
    }

    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    body {
        top: 0px !important;
    }
</style>

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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float text-white"></i>
        </a>
        @include('client.layout.footer')

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,ar,ur',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>

    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>




    <script type="text/javascript">
        function triggerHtmlEvent(element, eventName) {
            var event;
            if (document.createEvent) {
                event = document.createEvent('HTMLEvents');
                event.initEvent(eventName, true, true);
                element.dispatchEvent(event);
            } else {
                event = document.createEventObject();
                event.eventType = eventName;
                element.fireEvent('on' + event.eventType, event);
            }
        }
        //  <!--Flag click handler-- >
        $('.translation-links a').click(function(e) {
            e.preventDefault();
            var lang = $(this).data('lang');
            $('#google_translate_element select option').each(function() {
                if ($(this).text().indexOf(lang) > -1) {
                    $(this).parent().val($(this).val());
                    var container = document.getElementById('google_translate_element');
                    var select = container.getElementsByTagName('select')[0];
                    triggerHtmlEvent(select, 'change');
                }
            });
        });
    </script>



    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('./assetsclient/js/jquery.min.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/popper.min.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/select2.min.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/slick.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/slider-bg.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/lightbox.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('./assetsclient/js/custom.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    @stack('script')



</body>

</html>