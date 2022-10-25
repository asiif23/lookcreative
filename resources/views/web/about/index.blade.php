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
                        <h4><a href="#">home</a> - about</h4>
                        <h2>about us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner -->

    <!-- Agency Section -->
    <section class="commonSection">
        <div class="container">
            <div class="row" data-aos="zoom-in-down" data-aos-duration="2000">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <h4 class="sub_title">get to know us</h4>
                    <h2 class="sec_title" data-aos="zoom-in-down" data-aos-duration="3000">build better website alot quicker
                        with meipaly agency</h2>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="agency_img1">
                        <img src="{{ asset('assets/web/images/about/1.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="agency_img2">
                        <img src="{{ asset('assets/web/images/about/2.jpg') }}" alt="" />
                    </div>
                    <div class="compay_date">
                        <h5>company started</h5>
                        <h2>1990</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Agency Section -->

    <!-- Testimonial 2 Section -->
    <section class="commonSection testimonial_2">
        <div class="container">
            <div class="row" data-aos="fade-left" data-aos-duration="2000">
                <div id="tabs" class="testimoniTab">
                    <div class="col-lg-5 col-sm-5">
                        <h4 class="sub_title color_aaa">our testimonials</h4>
                        <h2 class="sec_title white">happy customers</h2>
                        <ul class="slider_testimoial">
                            <li class="active control_item">
                                <a href="#tab_1" data-toggle="tab">
                                    <span><img src="{{ asset('assets/web/images/home_1/t1.jpg') }}"
                                            alt="" /></span>
                                    <div class="author_detail">
                                        <h5>Shirley Smith</h5>
                                        <h6>Director</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="control_item">
                                <a href="#tab_2" data-toggle="tab">
                                    <span><img src="{{ asset('assets/web/images/home_1/t2.jpg') }}"
                                            alt="" /></span>
                                    <div class="author_detail">
                                        <h5>Mike hardson</h5>
                                        <h6>co founder</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="control_item">
                                <a href="#tab_3" data-toggle="tab">
                                    <span><img src="{{ asset('assets/web/images/home_1/t3.jpg') }}"
                                            alt="" /></span>
                                    <div class="author_detail">
                                        <h5>Mike Smith</h5>
                                        <h6>manager</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="control_item">
                                <a href="#tab_4" data-toggle="tab">
                                    <span><img src="{{ asset('assets/web/images/home_1/t1.jpg') }}"
                                            alt="" /></span>
                                    <div class="author_detail">
                                        <h5>Shirley Smith</h5>
                                        <h6>Director</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="control_item">
                                <a href="#tab_5" data-toggle="tab">
                                    <span><img src="{{ asset('assets/web/images/home_1/t2.jpg') }}"
                                            alt="" /></span>
                                    <div class="author_detail">
                                        <h5>Mike hardson</h5>
                                        <h6>manager</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="control_item">
                                <a href="#tab_6" data-toggle="tab">
                                    <span><img src="{{ asset('assets/web/images/home_1/t3.jpg') }}"
                                            alt="" /></span>
                                    <div class="author_detail">
                                        <h5>Mike Smith</h5>
                                        <h6>manager</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-sm-7">
                        <div class="dots_owl"></div>
                        <div class="tab-content clearfix">
                            <div class="tab-pane fade in active testi_con" id="tab_1">
                                <p>
                                    “This is due to their excellent service, competitive pricing and customer support. It’s
                                    throughly
                                    refresing to get such a personal touch. There are many variations of passages of
                                    available,
                                    but the majority have suffered alteration in some form by injected hum
                                </p>
                                <span>25 nov, 2018</span>
                            </div>
                            <div class="tab-pane fade testi_con" id="tab_2">
                                <p>
                                    “It’s throughly refresing to get such a personal touch. There are many variations of
                                    passages of available,
                                    This is due to their excellent service, competitive pricing and customer support.
                                    but the majority have suffered alteration in some form by injected hum
                                </p>
                                <span>26 nov, 2018</span>
                            </div>
                            <div class="tab-pane fade testi_con" id="tab_3">
                                <p>
                                    “This is due to their excellent service, competitive pricing and customer support. It’s
                                    throughly
                                    refresing to get such a personal touch. There are many variations of passages of
                                    available,
                                    but the majority have suffered alteration in some form by injected hum
                                </p>
                                <span>27 nov, 2018</span>
                            </div>
                            <div class="tab-pane fade testi_con" id="tab_4">
                                <p>
                                    “This is due to their excellent service, competitive pricing and customer support. It’s
                                    throughly
                                    refresing to get such a personal touch. There are many variations of passages of
                                    available,
                                    but the majority have suffered alteration in some form by injected hum
                                </p>
                                <span>28 nov, 2018</span>
                            </div>
                            <div class="tab-pane fade testi_con" id="tab_5">
                                <p>
                                    “This is due to their excellent service, competitive pricing and customer support. It’s
                                    throughly
                                    refresing to get such a personal touch. There are many variations of passages of
                                    available,
                                    but the majority have suffered alteration in some form by injected hum
                                </p>
                                <span>29 nov, 2018</span>
                            </div>
                            <div class="tab-pane fade testi_con" id="tab_6">
                                <p>
                                    “This is due to their excellent service, competitive pricing and customer support. It’s
                                    throughly
                                    refresing to get such a personal touch. There are many variations of passages of
                                    available,
                                    but the majority have suffered alteration in some form by injected hum
                                </p>
                                <span>30 nov, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial 2 Section -->

    <!-- Our Work Section -->
    <section class="commonSection our_work mt-5" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="videoWrap_2">
            <img src="{{ asset('assets/web/images/about/3.jpg') }}" alt="">
            <div class="play_video">
                <a class="video_popup" href="https://www.youtube.com/watch?v=A7ZkZazfvao"><i class="fa fa-play"></i></a>
                <h2>Watch Video</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="ab_detail_wrap">
                        <h4 class="sub_title">the only design you need</h4>
                        <h2 class="sec_title" data-aos="fade-right" data-aos-duration="3000">Make amazing websites
                            without touching cod</h2>
                        <p class="sec_desc">
                            Tincidunt elit magnis nulla facilisis sagittis maecenas. Sapien nunc amet ultrices,
                            dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum
                            dolors sit amet elit magnis amet ultrices purus aliquet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Work Section -->
    <section class="commonSection blog">
        <div class="container">
        </div>
    </section>
    <!-- Ready Section -->
    <section class="commonSection ready">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-9" data-aos="zoom-in-down" data-aos-duration="500">
                    <h2 class="sec_title white">Let's Get Your Project Started!</h2>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3 text-right" data-aos="zoom-in-down" data-aos-duration="1000">
                    <a class="common_btn" href="contact.html"><span>Contact with us</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Ready Section -->
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
