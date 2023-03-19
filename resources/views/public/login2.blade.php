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
                    <div class="heading-bx left">
                        <h2 class="title-head">Login to your <span>Account</span></h2>
                        <p>Don't have an account? <a href="{{ url('register.html') }}">Create one here</a></p>
                    </div>
                    <form action="/login" class="contact-bx" method="POST">
                        @csrf
                        <div class="row placeani">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Username</label>
                                        <input name="username" type="text" required="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Password</label>
                                        <input name="password" type="password" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group form-forget">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                            id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember
                                            me</label>
                                    </div>
                                    <a href="{{ url('forget-password.html') }}" class="ml-auto">Forgot Password?</a>
                                </div>
                            </div>
                            @if(session('message'))
                            <div class="col-lg-12 m-b30">
                                <ul>
                                    <li style="color: red">{{session('message')}}</li>
                                </ul>
                            </div>
                            @endif
                            <div class="col-lg-12 m-b30">
                                <button name="submit" type="submit" value="Submit"
                                    class="btn button-md">Login</button>
                            </div>
                            {{-- <div class="col-lg-12">
                                <h6>Login with Social media</h6>
                                <div class="d-flex">
                                    <a class="btn flex-fill m-r5 facebook" href="{{ url('#') }}"><i
                                            class="fa fa-facebook"></i>Facebook</a>
                                    <a class="btn flex-fill m-l5 google-plus" href="{{ url('#') }}"><i
                                            class="fa fa-google-plus"></i>Google Plus</a>
                                </div>
                            </div> --}}
                        </div>
                    </form>
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
