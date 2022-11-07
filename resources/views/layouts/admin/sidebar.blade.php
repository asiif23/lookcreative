        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="{{ route('admin.dashboard') }}" class="navbar-brand">
                            <img src="{{ asset('assets/admin/assets/img/logo-3.png') }}" class="img-fluid"
                                alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link"> Look CRTV </a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse"
                            aria-expanded="{{ request()->is(['admin/analytics', 'admin', 'admin/accounting']) ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Dashboard</span>
                            </div>

                            <div>
                                <span class="badge badge-pill badge-secondary mr-2">3</span>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->is(['admin/analytics', 'admin', 'admin/accounting']) ? 'show' : '' }}"
                            id="dashboard" data-parent="#accordionExample">
                            <li class="{{ request()->is('admin') ? 'active' : '' }}">
                                <a href="{{ route('admin.dashboard') }}"> <i class="flaticon-computer-4"></i> Home </a>
                            </li>
                            <li class="{{ request()->is('admin/analytics') ? 'active' : '' }}">
                                <a href="{{ route('admin.analytics') }}"> <i class="flaticon-computer-2"></i> Analytics
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/accounting') ? 'active' : '' }}">
                                <a href="{{ route('admin.accounting') }}"> <i class="flaticon-chart-line"></i>
                                    Accounting
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse"
                            aria-expanded="{{ request()->is('admin/konten*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-cart-2"></i>
                                <span>Konten</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->is('admin/konten*') ? 'show' : '' }}"
                            id="ecommerce" data-parent="#accordionExample">
                            <li class="{{ request()->is('admin/konten') ? 'active' : '' }}">
                                <a href="{{ route('admin.konten.dashboard') }}"> Dashboard </a>
                            </li>
                            <li class="{{ request()->is('admin/konten/services') ? 'active' : '' }}">
                                <a href="{{ route('admin.konten.services') }}"> Services </a>
                            </li>
                            <li class="{{ request()->is('admin/konten/portfolio*') ? 'active' : '' }}">
                                <a href="#product-details" data-toggle="collapse" aria-expanded="false"
                                    class="dropdown-toggle" data-parent="#ecommerce"> Portfolio <i
                                        class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu {{ request()->is('admin/konten/portfolio*') ? 'show' : '' }}"
                                    id="product-details">
                                    <li class="{{ request()->is('admin/konten/portfolio') ? 'active' : '' }}">
                                        <a href="{{ route('admin.konten.portfolio') }}"> Portfolio Details </a>
                                    </li>
                                    <li
                                        class="{{ request()->is('admin/konten/portfolio/categories') ? 'active' : '' }}">
                                        <a href="{{ route('admin.konten.portfolio.categories') }}"> Portfolio Category
                                        </a>
                                    </li>
                                    <li class="{{ request()->is('admin/konten/portfolio/status') ? 'active' : '' }}">
                                        <a href="{{ route('admin.konten.portfolio.status') }}"> Portfolio Status </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse"
                            aria-expanded="{{ request()->is('admin/blogs*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>Blog</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->is('admin/blogs*') ? 'show' : '' }}"
                            id="ui-features" data-parent="#accordionExample">
                            <li class="{{ request()->is('admin/blogs') ? 'active' : '' }}">
                                <a href="{{ route('admin.blogs.dashboard') }}"> Overview </a>
                            </li>
                            <li class="{{ request()->is('admin/blogs/categories') ? 'active' : '' }}">
                                <a href="{{ route('admin.blogs.categories') }}"> Categories </a>
                            </li>
                            <li class="{{ request()->is('admin/blogs/etc*') ? 'active' : '' }}">
                                <a href="#ui-buttons" data-toggle="collapse" aria-expanded="false"
                                    class="dropdown-toggle">
                                    Etc <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu {{ request()->is('admin/blogs/etc*') ? 'show' : '' }}"
                                    id="ui-buttons" data-parent="#ui-features">
                                    <li class="{{ request()->is('admin/blogs/etc/analytics') ? 'active' : '' }}">
                                        <a href="{{ route('admin.blogs.analytics') }}"> Analytics </a>
                                    </li>
                                    <li class="{{ request()->is('admin/blogs/etc/status') ? 'active' : '' }}">
                                        <a href="{{ route('admin.blogs.status') }}"> Status </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#components" data-toggle="collapse"
                            aria-expanded="{{ request()->is('admin/resource*') ? 'true' : 'false' }}"
                            class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-3d-cube"></i>
                                <span>Resources</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ request()->is('admin/resource*') ? 'show' : '' }}"
                            id="components" data-parent="#accordionExample">
                            <li class="{{ request()->is('admin/resource/users') ? 'active' : '' }}">
                                <a href="{{ route('admin.resource.users') }}"> Users </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>

        <!--  END SIDEBAR  -->
