@extends('layouts.web.app')
@section('css')
    <!-- Include All CSS here-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/owl.theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/preset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/presets/color1.css') }}" id="colorChange" />
    <!-- End Include All CSS -->

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/webimages/favicon.png') }}">
@section('konten')
    <!-- Page Banner -->
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="#">home</a> - contact</h4>
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner -->

    <!-- Contact Section -->
    <section class="commonSection ContactPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">Contact with us</h4>
                    <h2 class="sec_title">write us a message</h2>
                    <p class="sec_desc">
                        We are committed to providing our customers with exceptional service while<br> offering our
                        employees the best training.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-md-10 col-md-offset-1">
                    <form action="#" method="post" class="contactFrom" id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <input class="input-form required" type="text" name="f_name" id="f_name"
                                    placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="input-form required" type="text" name="l_name" id="l_name"
                                    placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="input-form required" type="email" name="email" id="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="input-form" type="text" name="phone" id="phone"
                                    placeholder="Phone Number">
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <textarea class="input-form required" name="con_message" id="con_message" placeholder="Write Message"></textarea>
                            </div>
                        </div>
                        <button class="common_btn red_bg" type="submit" id="con_submit"><span>Send Message</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!-- Contact Map Section -->
    <section class="gmapsection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 noPadding">
                    <div class="gmap" id="gmap_2"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Map Section -->

    <!-- Our Client 2 Section -->
    <section class="commonSection client_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">our offices</h4>
                    <h2 class="sec_title">offices near you</h2>
                    <p class="sec_desc">
                        We are committed to providing our customers with exceptional service while<br> offering our
                        employees the best training.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="singleClient_2">
                        <h3>austin</h3>
                        <p>22 Texas West Hills</p>
                        <p>needhelp@meipaly.com</p>
                        <p>666 888 000</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="singleClient_2">
                        <h3>boston</h3>
                        <p>5 Federal Street Boston</p>
                        <p>needhelp@meipaly.com</p>
                        <p>666 888 000</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="singleClient_2">
                        <h3>new york</h3>
                        <p>8th Broklyn New York</p>
                        <p>needhelp@meipaly.com</p>
                        <p>666 888 000</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="singleClient_2">
                        <h3>baltimore</h3>
                        <p>3 Lombabr 50 baltimore</p>
                        <p>needhelp@meipaly.com</p>
                        <p>666 888 000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Client 2 Section -->
@section('script')
    <!-- Include All JS -->
    <script src="{{ asset('assets/web/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('assets/web/js/gmaps.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
    <script src="{{ asset('assets/web/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.themepunch.tools.min.js') }}"></script>
    <!-- Rev slider Add on Start -->
    <script src="{{ asset('assets/web/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/extensions/revolution.extension.video.min.js') }}"></script>
    <!-- Rev slider Add on End -->
    <script src="{{ asset('assets/web/js/dlmenu.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/web/js/mixer.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/web/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/web/js/slick.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/web/js/theme.js') }}"></script>
    <!-- Include All JS -->
@endsection
