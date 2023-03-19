<!DOCTYPE html>
<html lang="en">


<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">


    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{ asset('img/puc.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/puc.png') }}" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Premier University | Center of Excellence for Quality Learning </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
 <script src="assets/js/html5shiv.min.js"></script>
 <script src="assets/js/respond.min.js"></script>
 <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/assets.css') }}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/typography.css') }}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/shortcodes/shortcodes.css') }}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('/assets/css/color/color-1.css') }}">

</head>
<style>
    .account-head::after {
        color: none;
        background: #000000a0;

    }
</style>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <div class="account-form">
            <div class="account-head" style="
                background-image:url(/img/gec5.png);
                background-repeat: no-repeat;
                background-size: 100%;

                ">
                <div></div>
                <img src="{{ asset('/img/puci.png') }}"
                    style="
                            margin: 5px;
                            background: #000000a0;
                            border-radius: 10px;
                            width: 98%;
                            padding:15px;
                            align-self:baseline;
                            margin-top:30%;
                        "
                    alt="">

            </div>
            <div class="account-form-inner">
                <div class="account-container">
                    <div class="error-page">
                        <h3>Ooopps :(</h3>
                        <h2 class="error-title">404</h2>
                        <h5>The Page you were looking for, couldn't be found.</h5>
                        <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                        <div class="">
                            {{-- <a href="index.html" class="btn m-r5">Preview</a> --}}
                            <a href="javascript:history.back()" class="btn m-r5">Go back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- External JavaScripts -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('/assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('/assets/vendors/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/counter/counterup.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ asset('/assets/vendors/masonry/masonry.js') }}"></script>
    <script src="{{ asset('/assets/vendors/masonry/filter.js') }}"></script>
    <script src="{{ asset('/assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('/assets/js/functions.js') }}"></script>
    <script src="{{ asset('/assets/js/contact.js') }}"></script>
    <script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>
