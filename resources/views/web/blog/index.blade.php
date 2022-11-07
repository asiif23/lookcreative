@extends('layouts.web.app')
{{-- @seoForm($model) --}}
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
    <link rel="icon" type="image/png" href="images/favicon.png">
@section('konten')
    <!-- Page Banner -->
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="#">home</a> - Blog</h4>
                        <h2>Blog Posts</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner -->

    <!-- Blog Section -->
    <section class="commonSection blogPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="latestBlogItem">
                        <div class="lbi_thumb">
                            <img src="{{ asset('assets/web/images/blog/1.jpg') }}" alt="">
                        </div>
                        <div class="lbi_details">
                            <a href="#" class="lbid_date">26 NOV</a>
                            <h2><a href="blog_single.html">basic rules of running web agency business</a></h2>
                            <a class="learnM" href="blog_single.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="latestBlogItem">
                        <div class="lbi_thumb">
                            <img src="{{ asset('assets/web/images/blog/2.jpg') }}" alt="">
                        </div>
                        <div class="lbi_details">
                            <a href="#" class="lbid_date">20 NOV</a>
                            <h2><a href="blog_single.html">Become the best sale marketer</a></h2>
                            <a class="learnM" href="blog_single.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="latestBlogItem">
                        <div class="lbi_thumb">
                            <img src="{{ asset('assets/web/images/blog/3.jpg') }}" alt="">
                        </div>
                        <div class="lbi_details">
                            <a href="#" class="lbid_date">16 NOV</a>
                            <h2><a href="blog_single.html">Introducing latest mopaly features</a></h2>
                            <a class="learnM" href="blog_single.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="latestBlogItem">
                        <div class="lbi_thumb">
                            <img src="{{ asset('assets/web/images/blog/4.jpg') }}" alt="">
                        </div>
                        <div class="lbi_details">
                            <a href="#" class="lbid_date">10 NOV</a>
                            <h2><a href="blog_single.html">a deep understanding of our audience</a></h2>
                            <a class="learnM" href="blog_single.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="latestBlogItem">
                        <div class="lbi_thumb">
                            <img src="{{ asset('assets/web/images/blog/5.jpg') }}" alt="">
                        </div>
                        <div class="lbi_details">
                            <a href="#" class="lbid_date">9 NOV</a>
                            <h2><a href="blog_single.html">We build and activate brands insight</a></h2>
                            <a class="learnM" href="blog_single.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="latestBlogItem">
                        <div class="lbi_thumb">
                            <img src="{{ asset('assets/web/images/blog/6.jpg') }}" alt="">
                        </div>
                        <div class="lbi_details">
                            <a href="#" class="lbid_date">7 NOV</a>
                            <h2><a href="blog_single.html">experiences that connect with people</a></h2>
                            <a class="learnM" href="blog_single.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="meipaly_paginations text-center">
                        <a class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                        <span class="current">01</span>
                        <a href="#">02</a>
                        <a href="#">5</a>
                        <a class="next" href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section -->
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
