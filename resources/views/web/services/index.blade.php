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
    <link rel="icon" type="image/png" href="{{ asset('assets/web/images/favicon.png') }}">
@section('konten')
    <!-- Page Banner -->
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="#">home</a> - Services</h4>
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner -->

    <!-- Services Section -->
    <section class="service_section_2 commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-4" data-aos="zoom-in-down" data-aos-duration="2000">
                    <div class="icon_box_2 text-center">
                        <h3>Modern Design</h3>
                        <p>
                            Phaseus sit amet tristique lorem ipsum is simply free text ligua donec culis leo sus cipit.
                        </p>
                        <div class="iconWrap">
                            <i class="mei-settings"></i>
                        </div>
                        <a href="service_detail.html">discover more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4" data-aos="zoom-in-down" data-aos-duration="2500">
                    <div class="icon_box_2 text-center">
                        <h3>Digital products</h3>
                        <p>
                            Phaseus sit amet tristique lorem ipsum is simply free text ligua donec culis leo sus cipit.
                        </p>
                        <div class="iconWrap">
                            <i class="mei-pie-chart"></i>
                        </div>
                        <a href="service_detail.html">discover more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4" data-aos="zoom-in-down" data-aos-duration="3000">
                    <div class="icon_box_2 text-center">
                        <h3>Marketing Strategy</h3>
                        <p>
                            Phaseus sit amet tristique lorem ipsum is simply free text ligua donec culis leo sus cipit.
                        </p>
                        <div class="iconWrap">
                            <i class="mei-transfer"></i>
                        </div>
                        <a href="service_detail.html">discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->

    <!-- Services Section -->
    <section class="service_section commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title red_color">Services we are offering</h4>
                    <h2 class="sec_title white">We design digital products that<br> help grow businesses.</h2>
                    <p class="sec_desc color_aaa">
                        We are committed to providing our customers with exceptional service<br> while offering our
                        employees the best training.
                    </p>
                </div>
            </div>
            <div class="row custom_column">
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a href="service_detail.html" class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="mei-web-design"></i>
                                <h3>Website Development</h3>
                            </div>
                            <div class="back">
                                <i class="mei-web-design"></i>
                                <h3>Website Development</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a href="service_detail.html" class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="mei-computer-graphic"></i>
                                <h3>Graphic Designing</h3>
                            </div>
                            <div class="back">
                                <i class="mei-computer-graphic"></i>
                                <h3>Graphic Designing</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a href="service_detail.html" class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="mei-development-1"></i>
                                <h3>Digital Marketing</h3>
                            </div>
                            <div class="back">
                                <i class="mei-development-1"></i>
                                <h3>Digital Marketing</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a href="service_detail.html" class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="mei-development"></i>
                                <h3>SEo & Content Writing</h3>
                            </div>
                            <div class="back">
                                <i class="mei-development"></i>
                                <h3>SEo & Content Writing</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a href="service_detail.html" class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="mei-app-development"></i>
                                <h3>App Development</h3>
                            </div>
                            <div class="back">
                                <i class="mei-app-development"></i>
                                <h3>App Development</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->

    <!-- Client Section -->
    <section class="commonSection client">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">our clients</h4>
                    <h2 class="sec_title">they trust us</h2>
                    <p class="sec_desc">
                        We are committed to providing our customers with exceptional service while<br> offering our
                        employees the best training.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_slider">
                        <div class="singleClient">
                            <a href="#">
                                <img src="{{ asset('assets/web/images/client/1.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="singleClient">
                            <a href="#">
                                <img src="{{ asset('assets/web/images/client/2.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="singleClient">
                            <a href="#">
                                <img src="{{ asset('assets/web/images/client/3.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="singleClient">
                            <a href="#">
                                <img src="{{ asset('assets/web/images/client/4.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="singleClient">
                            <a href="#">
                                <img src="{{ asset('assets/web/images/client/5.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="singleClient">
                            <a href="#">
                                <img src="{{ asset('assets/web/images/client/1.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="singleClient">
                            <a href="#">
                                <img src="{{ asset('assets/web/images/client/2.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="singleClient">
                            <a href="#">
                                <img src="{{ asset('assets/web/images/client/3.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section -->
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
