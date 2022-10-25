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
    <style>
        .video-container {
            width: 100vw;
            height: 100vh;
        }

        .main-slider-one .owl-nav {
            margin: 0 !important;
            display: none;
        }

        iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 100vh;
            transform: translate(-50%, -50%);
            overflow: hidden;
        }
    </style>
@section('konten')
    <section class="main-slider-one">
        <div class="main-slider-one__carousel owl-carousel owl-theme" data-owl-options=''>
            <div class="item main-slider-one__item">
                <div class="main-slider-one__bg">
                    <div class="video-container">
                        <video autoplay muted loop aria-controls="false" aria-readonly="true">
                            <source src="{{ asset('assets/web/images/portfolio/bg.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <!-- /.main-slider__bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="main-slider-one__tagline">welcome to Look Creative</p>
                            <!-- /.main-slider__tagline -->
                            <h2 class="main-slider-one__title">Multimedia & Creative <br> Event Production.</h2>
                            <!-- /.main-slider-one__title -->
                            <a class="common_btn red_bg" href="#"><span>Selengkapnya</span></a>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.item -->

            <div class="item main-slider-one__item">
                <div class="main-slider-one__bg">
                    <div class="video-container">
                        <video autoplay muted loop aria-controls="false" aria-readonly="true">
                            <source src="{{ asset('assets/web/images/portfolio/bg.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <!-- /.main-slider__bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="main-slider-one__tagline">welcome to Look Creative</p>
                            <!-- /.main-slider__tagline -->
                            <h2 class="main-slider-one__title">Multimedia & Creative <br> Event Production.</h2>
                            <!-- /.main-slider-one__title -->
                            <a class="common_btn red_bg" href="#"><span>Selengkapnya</span></a>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.item -->

        </div><!-- /.thm-owl__carousel -->
    </section><!-- /.main-slider-one -->

    <!-- Services Section -->
    <section class="service_section commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{-- <h4 class="sub_title red_color">LAYANAN YANG KAMI TAWARKAN</h4> --}}
                    <h2 class="sec_title white">KAMI MERANCANG PRODUK DIGITAL YANG<br> MEMBANTU MENGEMBANGKAN BISNIS.</h2>
                    <p class="sec_desc color_aaa">
                        Kami berkomitmen untuk menyediakan pelanggan kami dengan layanan <br> yang luar biasa
                        sambil menawarkan karyawan kami pelatihan terbaik.
                    </p>
                </div>
            </div>
            <div class="container" data-aos="flip-down" data-aos-duration="2000">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="margin-bottom: 3rem" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('assets/web/images/portfolio/virtual.JPG') }}" alt="...">
                            <div class="carousel-caption" data-aos="zoom-in" data-aos-duration="3000"
                                style="font-size: 500%; font-weight:bolder;padding-bottom: 350px;right:0%;left:0%;">
                                Virtual Event Production
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/web/images/portfolio/hybrid.JPG') }}" alt="...">
                            <div class="carousel-caption" data-aos="zoom-in" data-aos-duration="3000"
                                style="font-size: 500%; font-weight:bolder;padding-bottom: 350px;right:0%;left:0%;">
                                Hybrid Event Production
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/web/images/portfolio/live.JPG') }}" alt="...">
                            <div class="carousel-caption" data-aos="zoom-in" data-aos-duration="3000"
                                style="font-size: 500%; font-weight:bolder;padding-bottom: 350px;right:0%;left:0%;">
                                Live Event Production
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->

    <!-- About Agency Section -->
    <section class="commonSection ab_agency">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-lg-6 col-sm-6 col-md-6 PR_79">
                    {{-- <h4 class="sub_title">welcom to smart meipaly web agency</h4> --}}
                    <h2 class="sec_title MB_45">Kami adalah Creative Event Production</h2>
                    <p class="sec_desc">
                        dengan multidisiplin yang berfokus pada pemenuhan visual dan multimedia yang menawarkan konten
                        bermakna dan sesuai kebutuhan saat ini.
                        Tujuan kami sederhana, bekerja dengan anda dengan membuat acara yang luar biasa secara virtual,
                        hybrid maupun live event.
                    </p>
                    <a class="common_btn red_bg" href="#"><span>Learn More</span></a>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="3000">
                    <div class="ab_img1">
                        <img src="{{ asset('assets/web/images/portfolio/live.JPG') }}" alt="" />
                    </div>
                    <div class="ab_img2">
                        <img src="{{ asset('assets/web/images/portfolio/look.JPG') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Agency Section -->
    <!-- Services Section -->
    <section class="service_section commonSection">
        <div class="container">
            <div class="row custom_column">
                <div class="col-lg-3 col-sm-4 col-md-3" data-aos="zoom-in-up" data-aos-duration="1000">
                    <a href="service_detail.html" class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="mei-development-1"></i>
                                <h3>Creative Video Production</h3>
                            </div>
                            <div class="back">
                                <i class="mei-development-1"></i>
                                <h3>Creative Video Production</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3" data-aos="zoom-in-up" data-aos-duration="1200">
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
                <div class="col-lg-3 col-sm-4 col-md-3" data-aos="zoom-in-up" data-aos-duration="1400">
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
                <div class="col-lg-3 col-sm-4 col-md-3" data-aos="zoom-in-up" data-aos-duration="1600">
                    <a href="service_detail.html" class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="mei-development"></i>
                                <h3>Digital Marketing</h3>
                            </div>
                            <div class="back">
                                <i class="mei-development"></i>
                                <h3>Digital Marketing</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-md-3" data-aos="zoom-in-up" data-aos-duration="1800">
                    <a href="service_detail.html" class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="mei-app-development"></i>
                                <h3>Brand Activation</h3>
                            </div>
                            <div class="back">
                                <i class="mei-app-development"></i>
                                <h3>Brand Activation</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <!-- What We Do Section -->
    <section class="commonSection what_wedo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">how do we works</h4>
                    <h2 class="sec_title">Digital Experience</h2>
                    <p class="sec_desc">
                        We are committed to providing our customers with exceptional service while<br> offering our
                        employees the best training.
                    </p>
                </div>
            </div>
            <div class="row" data-aos="fade-right" data-aos-duration="2000">
                <div class="col-lg-12 col-sm-12">
                    <div class="videoWrap">
                        <img src="{{ asset('assets/web/images/home_1/3.jpg') }}" alt="">
                        <div class="play_video">
                            <a class="video_popup" href="https://www.youtube.com/watch?v=A7ZkZazfvao"><i
                                    class="fa fa-play"></i></a>
                            <h2>Watch Video</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5 col-md-4">
                    <h4 class="sub_title">don’t miss out our latest updates</h4>
                    <h2 class="sec_title">Subscribe us</h2>
                </div>
                <div class="col-lg-8 col-sm-7 col-md-8">
                    <form action="" method="post" class="subscribefrom">
                        <input type="email" placeholder="Enter your email" name="email">
                        <button class="common_btn red_bg" type="submit" name="submit"><span>Subscribe
                                now</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do Section -->

    <!-- Portfolio Section -->
    <section class="service_section commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title red_color">our portfolio</h4>
                    <h2 class="sec_title white">work showcase</h2>
                    <p class="sec_desc">
                        We are committed to providing our customers with exceptional service while<br> offering our
                        employees the best training.
                    </p>
                </div>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="singlefolio">
                        <img src="{{ asset('assets/web/images/portfolio/1.jpg') }}" alt="" />
                        <div class="folioHover">
                            <a class="cate" href="#">Graphic</a>
                            <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="singlefolio">
                        <img src="{{ asset('assets/web/images/portfolio/2.jpg') }}" alt="" />
                        <div class="folioHover">
                            <a class="cate" href="#">Graphic</a>
                            <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="singlefolio">
                        <img src="{{ asset('assets/web/images/portfolio/3.jpg') }}" alt="" />
                        <div class="folioHover">
                            <a class="cate" href="#">Graphic</a>
                            <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="singlefolio">
                        <img src="{{ asset('assets/web/images/portfolio/4.jpg') }}" alt="" />
                        <div class="folioHover">
                            <a class="cate" href="#">Graphic</a>
                            <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="singlefolio">
                        <img src="{{ asset('assets/web/images/portfolio/5.jpg') }}" alt="" />
                        <div class="folioHover">
                            <a class="cate" href="#">Graphic</a>
                            <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="singlefolio">
                        <img src="{{ asset('assets/web/images/portfolio/6.jpg') }}" alt="" />
                        <div class="folioHover">
                            <a class="cate" href="#">Graphic</a>
                            <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->

    <!-- Client Section -->
    <section class="commonSection client">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{-- <h4 class="sub_title">our clients</h4> --}}
                    <h2 class="sec_title">our clients</h2>
                    <p class="sec_desc">
                        We are committed to providing our customers with exceptional service while<br> offering our
                        employees the best training.
                    </p>
                </div>
            </div>
            <div class="row" data-aos="zoom-in-down" data-aos-duration="1500">
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

    <!-- Testimonial Section -->
    <section class="commonSection testimonial">
        <div class="container">
            <div class="row" data-aos="zoom-in-down" data-aos-duration="1500">
                <div class="col-lg-10 col-lg-offset-1 col-sm-12 text-center">
                    <div class="testimonial_content">
                        <div class="testi_icon"><i class="mei-team"></i></div>
                        <h2>Great things in business are never done by one person. <span>They’re done by a team of
                                people.</span></h2>
                        <p>
                            We are committed to providing our customers with exceptional service while<br> offering our
                            employees the best training.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section -->

    <!-- Blog Section -->
    <section class="commonSection blog">
        <div class="container">
        </div>
    </section>
    <!-- Blog Section -->

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
