<!-- Header 01 -->
<header class="header_01 bg-primary" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-3 col-md-3">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/web/images/logov.png') }}"
                            alt="Look Creative" />
                        {{-- <span>Look Creative</span> --}}
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-sm-7 col-md-7">
                <nav class="mainmenu text-center">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="{{ url('/') }}">home</a>
                        </li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li class="menu-item-has-children"><a href="{{ url('services') }}">Services</a>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ url('portfolio') }}">Portfolio</a>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ url('blog') }}">Blog</a>
                        </li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <div class="navigator text-right">
                    <a class="search searchToggler" href="javascript:void(0);"><i class="mei-magnifying-glass"></i></a>
                    <a href="javascript:void(0);" class="menu mobilemenu hidden-sm hidden-md hidden-lg hidden-xs"><i
                            class="mei-menu"></i></a>
                    <a id="open-overlay-nav" class="menu hamburger" href="javascript:void(0);"><i
                            class="mei-menu"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header 01 -->

<!-- Search From -->
<div class="searchFixed popupBG">
    <div class="container-fluid">
        <a href="" id="sfCloser" class="sfCloser"></a>
        <div class="searchForms">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <form method="post" action="#">
                            <input type="text" name="s" class="searchField" placeholder="Search here..." />
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search From -->

<!-- PopUP Menu -->
<div class="popup popup__menu">
    <a href="" id="close-popup" class="close-popup"></a>
    <div class="container mobileContainer">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="logo2">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/web/images/logov.png') }}"
                            alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popup-inner">
                    <div class="dl-menu__wrap dl-menuwrapper">
                        <ul class="dl-menu dl-menuopen">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/') }}">home</a>
                            </li>
                            <li><a href="{{ url('about') }}">About</a></li>
                            <li class="menu-item-has-children"><a href="{{ url('services') }}">Services</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('portfolio') }}">Portfolio</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('blog') }}">Blog</a>
                            </li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                <ul class="footer__contacts text-left">
                    <li>Phone: 081222310801</li>
                    <li>Email: admin@lookcreative.id</li>
                    <li>Address: Jl. Latar Ireng No.6, Bumi, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57149</li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                <div class="popUp_social text-right">
                    <ul>
                        <li>
                            <a href="https://www.instagram.com/lookcreative_id/">
                                <i class="fa fa-instagram"></i>Instagram
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook-square"></i>Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UC73ILO5py0lH8XZisCtYivg">
                                <i class="fa fa-youtube-play"></i>Youtube
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PopUP Menu -->
