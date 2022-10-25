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
                        <h4><a href="#">home</a> - portfolio</h4>
                        <h2>portfolio</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner -->
    <!-- Portfolio Section -->
    <section class="commonSection porfolioPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="folio_mixing">
                        <ul>
                            <li class="filter active" data-filter="all">All</li>
                            <li class="filter" data-filter="graphic">graphic</li>
                            <li class="filter" data-filter="branding">branding</li>
                            <li class="filter" data-filter="marketing">marketing</li>
                            <li class="filter" data-filter="logos">logo</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="Grid">
                <div class="custom">
                    <div class="col-lg-4 col-sm-6 col-md-4 mix logos branding">
                        <div class="singlefolio">
                            <img src="{{ asset('assets/web/images/portfolio/1.jpg') }}" alt="" />
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 mix marketing graphic">
                        <div class="singlefolio">
                            <img src="{{ asset('assets/web/images/portfolio/2.jpg') }}" alt="" />
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 mix marketing logos">
                        <div class="singlefolio">
                            <img src="{{ asset('assets/web/images/portfolio/3.jpg') }}" alt="" />
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 mix branding graphic">
                        <div class="singlefolio">
                            <img src="{{ asset('assets/web/images/portfolio/4.jpg') }}" alt="" />
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 mix branding marketing">
                        <div class="singlefolio">
                            <img src="{{ asset('assets/web/images/portfolio/5.jpg') }}" alt="" />
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 mix logos graphic">
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
            <div class="row mt_30">
                <div class="col-lg-12 text-center">
                    <a class="common_btn red_bg" href="#"><span>Load More</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->
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
