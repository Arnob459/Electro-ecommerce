@extends('frontend.master')

@section('content')



 <!-- ========== HEADER ========== -->
 <header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="u-header-topbar py-2 d-none d-xl-block">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="topbar-left">
                        <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">{{ $main->welcome_text }}</a>
                    </div>
                    <div class="topbar-right ml-auto">
                        <ul class="list-inline mb-0">

                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/track-your-order.html" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> {{ $main->track_text }}</a>
                            </li>

                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <!-- Account Sidebar Toggle Button -->
                                <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link"
                                    aria-controls="sidebarContent"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-unfold-event="click"
                                    data-unfold-hide-on-scroll="false"
                                    data-unfold-target="#sidebarContent"
                                    data-unfold-type="css-animation"
                                    data-unfold-animation-in="fadeInRight"
                                    data-unfold-animation-out="fadeOutRight"
                                    data-unfold-duration="500">
                                    <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in
                                </a>
                                <!-- End Account Sidebar Toggle Button -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <!-- Logo-Search-header-icons -->
        <div class="py-2 py-xl-5 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <!-- Logo-offcanvas-menu -->
                    <div class="col-auto">
                        <!-- Nav -->
                        <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                            <!-- Logo -->
                            <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="#" aria-label="Electro">
                               <img src="{{ $main->logo }}" alt="">
                            </a>
                            <!-- End Logo -->

                            <!-- Fullscreen Toggle Button -->
                            <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                aria-controls="sidebarHeader"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarHeader1"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft"
                                data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                    <span class="u-hamburger__inner"></span>
                                </span>
                            </button>
                            <!-- End Fullscreen Toggle Button -->
                        </nav>
                        <!-- End Nav -->

                        <!-- ========== HEADER SIDEBAR ========== -->
                        <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
                            <div class="u-sidebar__scroller">
                                <div class="u-sidebar__container">
                                    <div class="u-header-sidebar__footer-offset pb-0">
                                        <!-- Toggle Button -->
                                        <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                            <button type="button" class="close ml-auto"
                                                aria-controls="sidebarHeader"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-event="click"
                                                data-unfold-hide-on-scroll="false"
                                                data-unfold-target="#sidebarHeader1"
                                                data-unfold-type="css-animation"
                                                data-unfold-animation-in="fadeInLeft"
                                                data-unfold-animation-out="fadeOutLeft"
                                                data-unfold-duration="500">
                                                <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                            </button>
                                        </div>
                                        <!-- End Toggle Button -->

                                        <!-- Content -->
                                        <div class="js-scrollbar u-sidebar__body">
                                            <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                <!-- Logo -->
                                                <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="index-2.html" aria-label="Electro">
                                                    <img src="{{ $main->logo }}" alt="">

                                                </a>
                                                <!-- End Logo -->

                                                <!-- List -->
                                                <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                    <!-- Home Section -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeCollapse" data-target="#headerSidebarHomeCollapse">
                                                            Home & Static Pages
                                                        </a>

                                                        <div id="headerSidebarHomeCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarHomeMenu" class="u-header-collapse__nav-list">
                                                                <!-- Home - v1 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="index-2.html">Home v1</a></li>
                                                                <!-- End Home - v1 -->
                                                                <!-- Home - v2 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="home-v2.html">Home v2</a></li>
                                                                <!-- End Home - v2 -->
                                                                <!-- Home - v3 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="home-v3.html">Home v3</a></li>
                                                                <!-- End Home - v3 -->
                                                                <!-- Home - v3-full-color-bg -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="home-v3-full-color-bg.html">Home v3.1</a></li>
                                                                <!-- End Home - v3-full-color-bg -->
                                                                <!-- Home - v4 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="home-v4.html">Home v4</a></li>
                                                                <!-- End Home - v4 -->
                                                                <!-- Home - v5 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="home-v5.html">Home v5</a></li>
                                                                <!-- End Home - v5 -->
                                                                <!-- Home - v6 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="home-v6.html">Home v6</a></li>
                                                                <!-- End Home - v6 -->
                                                                <!-- Home - v7 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="home-v7.html">Home v7</a></li>
                                                                <!-- End Home - v7 -->
                                                                <!-- About -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="about.html">About</a></li>
                                                                <!-- End About -->
                                                                <!-- Contact v1 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="contact-v1.html">Contact v1</a></li>
                                                                <!-- End Contact v1 -->
                                                                <!-- Contact v2 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="contact-v2.html">Contact v2</a></li>
                                                                <!-- End Contact v2 -->
                                                                <!-- FAQ -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="faq.html">FAQ</a></li>
                                                                <!-- End FAQ -->
                                                                <!-- Store Directory -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="store-directory.html">Store Directory</a></li>
                                                                <!-- End Store Directory -->
                                                                <!-- Terms and Conditions -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="terms-and-conditions.html">Terms and Conditions</a></li>
                                                                <!-- End Terms and Conditions -->
                                                                <!-- 404 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="404.html">404</a></li>
                                                                <!-- End 404 -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Home Section -->

                                                    <!-- Shop Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                                                            Shop Pages
                                                        </a>

                                                        <div id="headerSidebarPagesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarPagesMenu" class="u-header-collapse__nav-list">
                                                                <!-- Shop Grid -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-grid.html">Shop Grid</a></li>
                                                                <!-- End Shop Grid -->

                                                                <!-- Shop Grid Extended -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-grid-extended.html">Shop Grid Extended</a></li>
                                                                <!-- End Shop Grid Extended -->

                                                                <!-- Shop List View -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-list-view.html">Shop List View</a></li>
                                                                <!-- End Shop List View -->

                                                                <!-- Shop List View Small -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-list-view-small.html">Shop List View Small</a></li>
                                                                <!-- End Shop List View Small -->

                                                                <!-- Shop Left Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                                <!-- End Shop Left Sidebar -->

                                                                <!-- Shop Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-full-width.html">Shop Full width</a></li>
                                                                <!-- End Shop Full width -->

                                                                <!-- Shop Right Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                                <!-- End Shop Right Sidebar -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Shop Pages -->

                                                    <!-- Product Categories -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
                                                            Product Categories
                                                        </a>

                                                        <div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">
                                                                <!-- 4 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-4-column-sidebar.html">4 Column Sidebar</a></li>
                                                                <!-- End 4 Column Sidebar -->

                                                                <!-- 5 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-5-column-sidebar.html">5 Column Sidebar</a></li>
                                                                <!-- End 5 Column Sidebar -->

                                                                <!-- 6 Column Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-6-column-full-width.html">6 Column Full width</a></li>
                                                                <!-- End 6 Column Full width -->

                                                                <!-- 7 Column Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html">7 Column Full width</a></li>
                                                                <!-- End 7 Column Full width -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Product Categories -->

                                                    <!-- Single Product Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarShopCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarShopCollapse">
                                                            Single Product Pages
                                                        </a>

                                                        <div id="headerSidebarShopCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarShopMenu" class="u-header-collapse__nav-list">
                                                                <!-- Single Product Extended -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-extended.html">Single Product Extended</a></li>
                                                                <!-- End Single Product Extended -->

                                                                <!-- Single Product Fullwidth -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html">Single Product Fullwidth</a></li>
                                                                <!-- End Single Product Fullwidth -->

                                                                <!-- Single Product Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-sidebar.html">Single Product Sidebar</a></li>
                                                                <!-- End Single Product Sidebar -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Single Product Pages -->

                                                    <!-- Ecommerce Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarDemosCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarDemosCollapse">
                                                            Ecommerce Pages
                                                        </a>

                                                        <div id="headerSidebarDemosCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarDemosMenu" class="u-header-collapse__nav-list">
                                                                <!-- Shop -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop.html">Shop</a></li>
                                                                <!-- End Shop -->

                                                                <!-- Cart -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/cart.html">Cart</a></li>
                                                                <!-- End Cart -->

                                                                <!-- Checkout -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/checkout.html">Checkout</a></li>
                                                                <!-- End Checkout -->

                                                                <!-- My Account -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/my-account.html">My Account</a></li>
                                                                <!-- End My Account -->

                                                                <!-- Track your Order -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/track-your-order.html">Track your Order</a></li>
                                                                <!-- End Track your Order -->

                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Ecommerce Pages -->

                                                    <!-- Shop Columns -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebardocsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebardocsCollapse">
                                                            Shop Columns
                                                        </a>

                                                        <div id="headerSidebardocsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebardocsMenu" class="u-header-collapse__nav-list">
                                                                <!-- 7 Column Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-7-columns-full-width.html">7 Column Full width</a></li>
                                                                <!-- End 7 Column Full width -->

                                                                <!-- 6 Column Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-6-columns-full-width.html">6 Column Full width</a></li>
                                                                <!-- End 6 Column Full width -->

                                                                <!-- 5 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-5-columns-sidebar.html">5 Column Sidebar</a></li>
                                                                <!-- End 5 Column Sidebar -->

                                                                <!-- 4 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-4-columns-sidebar.html">4 Column Sidebar</a></li>
                                                                <!-- End 4 Column Sidebar -->

                                                                <!-- 3 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-3-columns-sidebar.html">3 Column Sidebar</a></li>
                                                                <!-- End 3 Column Sidebar -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Shop Columns -->

                                                    <!-- Blog Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarblogsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarblogsCollapse">
                                                            Blog Pages
                                                        </a>

                                                        <div id="headerSidebarblogsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarblogsMenu" class="u-header-collapse__nav-list">
                                                                <!-- Blog v1 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/blog/blog-v1.html">Blog v1</a></li>
                                                                <!-- End Blog v1 -->

                                                                <!-- Blog v2 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/blog/blog-v2.html">Blog v2</a></li>
                                                                <!-- End Blog v2 -->

                                                                <!-- Blog v3 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/blog/blog-v3.html">Blog v3</a></li>
                                                                <!-- End Blog v3 -->

                                                                <!-- Blog Full Width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/blog/blog-full-width.html">Blog Full Width</a></li>
                                                                <!-- End Blog Full Width -->

                                                                <!-- Single Blog Post -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="https://transvelo.github.io/electro-html/2.0/html/blog/single-blog-post.html">Single Blog Post</a></li>
                                                                <!-- End Single Blog Post -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Blog Pages -->
                                                </ul>
                                                <!-- End List -->
                                            </div>
                                        </div>
                                        <!-- End Content -->
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- ========== END HEADER SIDEBAR ========== -->
                    </div>
                    <!-- End Logo-offcanvas-menu -->
                    <!-- Search Bar -->
                    <div class="col d-none d-xl-block">
                        <form class="js-focus-state">
                            <label class="sr-only" for="searchproduct">Search</label>
                            <div class="input-group">
                                <input type="email" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" id="searchproduct-item" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                <div class="input-group-append">
                                    <!-- Select -->
                                    <select class="js-select selectpicker dropdown-select custom-search-categories-select"
                                        data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
                                        <option value="one" selected>All Categories</option>
                                        <option value="two">Two</option>
                                        <option value="three">Three</option>
                                        <option value="four">Four</option>
                                    </select>
                                    <!-- End Select -->
                                    <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                        <span class="ec ec-search font-size-24"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Search Bar -->
                    <!-- Header Icons -->
                    <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Search"
                                        aria-controls="searchClassic"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-target="#searchClassic"
                                        data-unfold-type="css-animation"
                                        data-unfold-duration="300"
                                        data-unfold-delay="300"
                                        data-unfold-hide-on-scroll="true"
                                        data-unfold-animation-in="slideInUp"
                                        data-unfold-animation-out="fadeOut">
                                        <span class="ec ec-search"></span>
                                    </a>

                                    <!-- Input -->
                                    <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                        <form class="js-focus-state input-group px-3">
                                            <input class="form-control" type="search" placeholder="Search Product">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->
                                <li class="col d-xl-none px-2 px-sm-3"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/my-account.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                <li class="col pr-xl-0 px-2 px-sm-3">
                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                        <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Logo-Search-header-icons -->

        <!-- Primary-menu-wide -->
        <div class="d-none d-xl-block bg-primary">
            <div class="container">
                <div class="min-height-45">
                    <!-- Nav -->
                    <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--wide u-header__navbar--no-space">
                        <!-- Navigation -->
                        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                            {{-- <ul class="navbar-nav u-header__navbar-nav">
                                <!-- Home -->
                                <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                    data-event="hover"
                                    data-animation-in="slideInUp"
                                    data-animation-out="fadeOut"
                                    data-position="left">
                                    <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Home</a>

                                    <!-- Home - Mega Menu -->
                                    <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                                        <div class="row u-header__mega-menu-wrapper">
                                            <div class="col-md-3">
                                                <span class="u-header__sub-menu-title">Home & Static Pages</span>
                                                <ul class="u-header__sub-menu-nav-group">
                                                    <li><a href="index-2.html" class="nav-link u-header__sub-menu-nav-link">Home v1</a></li>
                                                    <li><a href="home-v2.html" class="nav-link u-header__sub-menu-nav-link">Home v2</a></li>
                                                    <li><a href="home-v3.html" class="nav-link u-header__sub-menu-nav-link">Home v3</a></li>
                                                    <li><a href="home-v3-full-color-bg.html" class="nav-link u-header__sub-menu-nav-link">Home v3.1</a></li>
                                                    <li><a href="home-v4.html" class="nav-link u-header__sub-menu-nav-link">Home v4</a></li>
                                                    <li><a href="home-v5.html" class="nav-link u-header__sub-menu-nav-link">Home v5</a></li>
                                                    <li><a href="home-v6.html" class="nav-link u-header__sub-menu-nav-link">Home v6</a></li>
                                                    <li><a href="home-v7.html" class="nav-link u-header__sub-menu-nav-link">Home v7</a></li>
                                                    <li><a href="about.html" class="nav-link u-header__sub-menu-nav-link">About</a></li>
                                                    <li><a href="contact-v1.html" class="nav-link u-header__sub-menu-nav-link">Contact v1</a></li>
                                                    <li><a href="contact-v2.html" class="nav-link u-header__sub-menu-nav-link">Contact v2</a></li>
                                                    <li><a href="faq.html" class="nav-link u-header__sub-menu-nav-link">FAQ</a></li>
                                                    <li><a href="store-directory.html" class="nav-link u-header__sub-menu-nav-link">Store Directory</a></li>
                                                    <li><a href="terms-and-conditions.html" class="nav-link u-header__sub-menu-nav-link">Terms and Conditions</a></li>
                                                    <li><a href="404.html" class="nav-link u-header__sub-menu-nav-link">404</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <span class="u-header__sub-menu-title">Shop Pages</span>
                                                <ul class="u-header__sub-menu-nav-group mb-3">
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-grid.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid</a></li>
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-grid-extended.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid Extended</a></li>
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-list-view.html" class="nav-link u-header__sub-menu-nav-link">Shop List View</a></li>
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-list-view-small.html" class="nav-link u-header__sub-menu-nav-link">Shop List View Small</a></li>
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-left-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Left Sidebar</a></li>
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-full-width.html" class="nav-link u-header__sub-menu-nav-link">Shop Full width</a></li>
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop-right-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Right Sidebar</a></li>
                                                </ul>
                                                <span class="u-header__sub-menu-title">Product Categories</span>
                                                <ul class="u-header__sub-menu-nav-group">
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-4-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-5-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-6-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
                                                    <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Home - Mega Menu -->
                                </li>
                                <!-- End Home -->



                            </ul> --}}
                        </div>
                        <!-- End Navigation -->
                    </nav>
                    <!-- End Nav -->
                </div>
            </div>
        </div>
        <!-- End Primary-menu-wide -->
    </div>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Slider Section -->

    <div class="mb-4">

            <div class="container overflow-hidden">
                <div class="js-slick-carousel u-slick"
                    data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-center mb-3 mb-md-4">
                    @foreach ($sliders as $slider)
                    <div class="js-slide">
                        <div class="row pt-7 py-md-0">
                            <div class="col-xl-7 col-6 d-flex align-items-end ml-auto ml-md-0"
                                data-scs-animation-in="fadeInRight"
                                data-scs-animation-delay="500">
                                <img  src="{{ $slider->picture }}" alt="Image Description">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>

    <!-- End Slider Section -->
    <div class="container">
        <!-- Banner -->
        <div class="row mb-6  ">

                @foreach ($promotions as $promotion)

                <div class="col-4 mb-4  pr-0">
                    <a href="{{ $promotion->link }}">
                    <img class="img-fluid" src="{{ $promotion->picture }}" alt="Image Description">
                     </a>
                </div>

                @endforeach



        </div>
        <!-- End Banner -->

        <!-- Tab Prodcut Section -->
        <div class="mb-6">
            <!-- Nav Classic -->
            <div class="position-relative bg-white text-center z-index-2">
                <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active js-animation-link" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true"
                            data-target="#pills-one-example1"
                            data-link-group="groups"
                            data-animation-in="slideInUp">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                Featured
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-animation-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false"
                            data-target="#pills-two-example1"
                            data-link-group="groups"
                            data-animation-in="slideInUp">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                On Sale
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-animation-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false"
                            data-target="#pills-three-example1"
                            data-link-group="groups"
                            data-animation-in="slideInUp">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                Top Rated
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Nav Classic -->
            <!-- Tab Content -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        <li class="col-6 col-md-4 col-xl product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" {{ asset('assets/frontend') }}/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" {{ asset('assets/frontend') }}/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price d-flex align-items-center position-relative">
                                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item remove-divider-md-lg">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item remove-divider-xl">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block remove-divider-wd remove-divider-md-lg">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price d-flex align-items-center position-relative">
                                                <ins class="font-size-20 text-red text-decoration-none">$1999,00</ins>
                                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        <li class="col-6 col-md-4 col-xl product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item remove-divider-md-lg">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item remove-divider-xl">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block remove-divider-wd remove-divider-md-lg">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        <li class="col-6 col-md-4 col-xl product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item remove-divider-md-lg">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Solo 2 Wireless</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item remove-divider-xl">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Widescreen NX Mini F1 SMART NX</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-6 col-md-4 col-xl product-item d-xl-none d-wd-block remove-divider-wd remove-divider-md-lg">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Tab Prodcut Section -->
    </div>
    <!-- Television Entertainment -->
    <div class="mb-6" style="background-image: url( assets/img/1920X1080/img4.jpg);">
        <div class="container">
            <div class="row min-height-564 align-items-center">
                <div class="col-12 col-lg-4 col-xl-5 col-wd-6 d-none d-md-block">
                    <img class="img-fluid" src=" assets/img/665X616/img1.png" alt="Image Description">
                </div>
                <div class="col-12 col-lg-8 col-xl-7 col-wd-6 pt-6 pt-md-0">
                    <div class=" d-flex border-bottom border-color-1 mr-md-2">
                        <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Television Entertainment</h3>
                    </div>
                    <div class="js-slick-carousel position-static u-slick u-slick--gutters-2 u-slick overflow-hidden u-slick-overflow-visble py-5"
                        data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10 pt-6 pt-md-0"
                        data-arrow-left-classes="fa fa-angle-left right-2"
                        data-arrow-right-classes="fa fa-angle-right right-1"
                        data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                        <div class="js-slide">
                            <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$629,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$1 299,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$110,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Headphones</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$110,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="js-slide">
                            <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$1 299,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Headphones</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$110,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$629,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$110,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="js-slide">
                            <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$629,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$1 299,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$110,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 product-item product-item__card mb-2 remove-divider pr-md-2 border-bottom-0">
                                    <div class="product-item__outer h-100 w-100">
                                        <div class="product-item__inner p-md-3 row no-gutters bg-white max-width-334">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-120 d-block"><img class="img-fluid" src=" assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1 pr-3 pr-md-0 pt-1 pt-md-0">
                                                <div class="mb-2">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Headphones</a></div>
                                                    <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-2">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$110,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer bg-white">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Television Entertainment -->
    <div class="container">
        <!-- Laptops & Computers -->
        <div class="mb-6 position-relative">
            <dv class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Laptops & Computers</h3>
            </dv>
            <div class="js-slick-carousel position-static u-slick u-slick--gutters-1 overflow-hidden u-slick-overflow-visble pt-3 pb-3"
                data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                data-arrow-left-classes="fa fa-angle-left right-1"
                data-arrow-right-classes="fa fa-angle-right right-0"
                data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src=" assets/img/150X140/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5" tabindex="0">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold" tabindex="0">Smartwatch 2.0 LTE Wifi</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src=" assets/img/150X140/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5" tabindex="0">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold" tabindex="0">Gear Virtual Reality</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src=" assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5" tabindex="0">Headphones</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold" tabindex="0">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src=" assets/img/150X140/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5" tabindex="0">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold" tabindex="0">Smartwatch 2.0 LTE Wifi</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src=" assets/img/150X140/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5" tabindex="0">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold" tabindex="0">Gear Virtual Reality</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src=" assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5" tabindex="0">Headphones</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold" tabindex="0">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src=" assets/img/150X140/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5" tabindex="0">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold" tabindex="0">Smartwatch 2.0 LTE Wifi</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src=" assets/img/150X140/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5" tabindex="0">Smartwatches</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold" tabindex="0">Gear Virtual Reality</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$799,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block" tabindex="0"><img class="img-fluid" src=" assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4 mb-xl-2 mb-wd-6">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5" tabindex="0">Headphones</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold" tabindex="0">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="#" class="btn-add-cart btn-primary transition-3d-hover" tabindex="0"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="#" class="text-gray-6 font-size-13" tabindex="0"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Laptops & Computers -->
        <!-- Trending Products -->
        <div class="mb-8 position-relative">
            <dv class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Trending Products</h3>
            </dv>
            <div class="js-slick-carousel position-static u-slick u-slick--gutters-1 overflow-hidden u-slick-overflow-visble pt-3 pb-3"
                data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                data-arrow-left-classes="fa fa-angle-left right-1"
                data-arrow-right-classes="fa fa-angle-right right-0"
                data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Headphones</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Headphones</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Tablets</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet Air 3 WiFi 64GB Gold</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$629,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Laptops & Computers</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook  Revolve 810 G2</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$1 299,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Headphones</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">White Solo 2 Wireless</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 remove-divider">
                            <div class="product-item__outer h-100 w-100">
                                <div class="product-item__inner p-md-3 row no-gutters">
                                    <div class="col col-lg-auto product-media-left">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="max-width-150 d-block"><img class="img-fluid" src=" assets/img/150X140/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                        <div class="mb-4">
                                            <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Accesories</a></div>
                                            <h5 class="product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Pendrive USB 3.0 Flash 64 GB</a></h5>
                                        </div>
                                        <div class="flex-center-between mb-3">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$110,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Trending Products -->
    </div>
    <!-- Products-8-1 -->
    <div class="products-group-8-1 space-1 bg-gray-7 mb-6">
        <h2 class="sr-only">Products Grid</h2>
        <div class="container">
            <!-- Nav nav-pills -->
            <div class="position-relative text-center z-index-2 mb-3">
                <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22">Bestsellers</h3>

                    <ul class="nav nav-pills nav-tab-pill mb-2 pt-3 pt-lg-0 mb-0 border-top border-color-1 border-lg-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble pr-0" id="pills-tab-1" role="tablist">
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill active" id="Tpills-one-example1-tab" data-toggle="pill" href="#Tpills-one-example1" role="tab" aria-controls="Tpills-one-example1" aria-selected="true">Top 20</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Tpills-two-example1-tab" data-toggle="pill" href="#Tpills-two-example1" role="tab" aria-controls="Tpills-two-example1" aria-selected="false">Smart Phones & Tablets</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Tpills-three-example1-tab" data-toggle="pill" href="#Tpills-three-example1" role="tab" aria-controls="Tpills-three-example1" aria-selected="false">Laptops &amp; Computers</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Tpills-four-example1-tab" data-toggle="pill" href="#Tpills-four-example1" role="tab" aria-controls="Tpills-four-example1" aria-selected="false">Video Cameras</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Nav Pills -->

            <!-- Tab Content -->
            <div class="tab-content" id="Tpills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="Tpills-one-example1" role="tabpanel" aria-labelledby="Tpills-one-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-lg-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-lg-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-wd-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-wd-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                    <h5 class="mb-0 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="#" class="d-block text-center my-4 mt-lg-6 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src=" assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img1.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img1.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img2.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #02"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img2.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img3.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #03"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img3.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Tpills-two-example1" role="tabpanel" aria-labelledby="Tpills-two-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-lg-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-lg-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-wd-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-wd-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                    <h5 class="mb-0 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="#" class="d-block text-center my-4 mt-lg-6 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src=" assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img1.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img1.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img2.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #02"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img2.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img3.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #03"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img3.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Tpills-three-example1" role="tabpanel" aria-labelledby="Tpills-three-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-lg-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-lg-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-wd-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-wd-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                    <h5 class="mb-0 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="#" class="d-block text-center my-4 mt-lg-6 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src=" assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img1.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img1.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img2.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #02"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img2.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img3.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #03"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img3.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Tpills-four-example1" role="tabpanel" aria-labelledby="Tpills-four-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-lg-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-lg-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-wd-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 product-item d-md-none d-wd-block remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny  Special Edition</a></h5>
                                                <div class="mb-2">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="product-item__outer h-100 w-100 w-100 prodcut-box-shadow">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                    <h5 class="mb-0 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                                </div>
                                                <div class="mb-1 min-height-8-1">
                                                    <a href="#" class="d-block text-center my-4 mt-lg-6 mb-xl-5 mb-lg-0 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src=" assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2 mb-3">
                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img1.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #01"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img1.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img2.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #02"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img2.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>

                                                        <div class="col-auto">
                                                            <!-- Gallery -->
                                                            <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;"
                                                                data-src=" assets/img/1920X1080/img3.jpg"
                                                                data-fancybox="fancyboxGallery6"
                                                                data-caption="Electro in frames - image #03"
                                                                data-speed="700"
                                                                data-is-infinite="true">
                                                                <img class="img-fluid border" src=" assets/img/100X100/img3.jpg" alt="Image Description">

                                                                <span class="u-media-viewer__container">
                                                                    <span class="u-media-viewer__icon">
                                                                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <!-- End Gallery -->
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>

        <!-- Content Placeholder -->
        <div class="container space-2 d-none">
            <!-- Nav Pills -->
            <div class="position-relative text-center z-index-2 mb-3">
                <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                    <h3 class="section-title mb-0 pb-2 font-size-22">Bestsellers</h3>

                    <ul class="nav nav-pills nav-tab-pill mb-2 pt-3 pt-lg-0 mb-0 border-top border-color-1 border-lg-top-0 align-items-center font-size-15 font-size-15-lg flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble pr-0" id="pills-tab-2" role="tablist">
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill active" id="Gpills-one-example1-tab" data-toggle="pill" href="#Gpills-one-example1" role="tab" aria-controls="Gpills-one-example1" aria-selected="true">Top 20</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Gpills-two-example1-tab" data-toggle="pill" href="#Gpills-two-example1" role="tab" aria-controls="Gpills-two-example1" aria-selected="false">Smart Phones & Tablets</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Gpills-three-example1-tab" data-toggle="pill" href="#Gpills-three-example1" role="tab" aria-controls="Gpills-three-example1" aria-selected="false">Laptops &amp; Computers</a>
                        </li>
                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                            <a class="nav-link rounded-pill" id="Gpills-four-example1-tab" data-toggle="pill" href="#Gpills-four-example1" role="tab" aria-controls="Gpills-four-example1" aria-selected="false">Video Cameras</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Nav Pills -->

            <!-- Tab Content -->
            <div class="tab-content" id="Gpills-tabContent">
                <div class="tab-pane fade pt-2 show active" id="Gpills-one-example1" role="tabpanel" aria-labelledby="Gpills-one-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Gpills-two-example1" role="tabpanel" aria-labelledby="Gpills-two-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Gpills-three-example1" role="tabpanel" aria-labelledby="Gpills-three-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade pt-2" id="Gpills-four-example1" role="tabpanel" aria-labelledby="Gpills-four-example1-tab">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-7 col-wd-8 d-md-flex d-wd-block">
                            <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-lg-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-lg-4 col-wd-3 d-md-none d-wd-block">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="pb-xl-2">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-190"></div>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                    <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-wd-4 products-group-1">
                            <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                                <li class="col product-item remove-divider">
                                    <div class="h-100 w-100 prodcut-box-shadow">
                                        <div class="bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <div class="mb-1">
                                                    <div class="mb-2">
                                                        <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                        <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <div class="bg-gray-1 height-450"></div>
                                                </div>
                                                <div class="mb-4">
                                                    <!-- Gallery -->
                                                    <div class="row mx-gutters-2">
                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="bg-gray-1 width-60 height-60"></div>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                    <!-- End Gallery -->
                                                </div>
                                                <div class="flex-center-between">
                                                    <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                    <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Content Placeholder -->
    </div>
    <!-- End Products-8-1 -->
    <div class="container">
        <!-- Top Categories this Month -->
        <div class="mb-2">
            <div class="border-bottom border-color-1 mb-5">
                <h3 class="section-title section-title__full d-inline-block mb-0 pb-2 font-size-22">Top Categories this Month</h3>
            </div>
            <div class="row align-items-start">
                <div class="col-4 col-wd-3 border-right border-lg-down-0 mb-8">
                    <div class="row align-items-center align-items-xl-start">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-block">
                                <img class="img-fluid" src=" assets/img/300X300/img1.jpg" alt="Image Description">
                            </a>
                        </div>
                        <div class="col-md-7 pl-lg-0">
                            <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="underline-on-hover">Mobile Devices</a>
                            </h4>
                            <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Accessories</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Chargers</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Powerbanks</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Smartphones</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Smartwatch</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Tablets</a></li>
                            </ul>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-wd-3 border-right border-lg-down-0 mb-8">
                    <div class="row align-items-center align-items-xl-start">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-block">
                                <img class="img-fluid" src=" assets/img/300X300/img2.png" alt="Image Description">
                            </a>
                        </div>
                        <div class="col-md-7 pl-lg-0">
                            <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="underline-on-hover">Games & Consoles</a>
                            </h4>
                            <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Accessories</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Action Games</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Game Consoles</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Racing Games</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Station Consoles</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Video Games & Consoles</a></li>
                            </ul>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-wd-3 border-right remove-bd-xl-only border-lg-down-0 mb-8">
                    <div class="row align-items-center align-items-xl-start">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-block">
                                <img class="img-fluid" src=" assets/img/300X300/img3.jpg" alt="Image Description">
                            </a>
                        </div>
                        <div class="col-md-7 pl-lg-0">
                            <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="underline-on-hover">Gadgets</a>
                            </h4>
                            <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Gadgets & Accesories</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Smartwatches</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Wearables</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">3D Printing</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Alexa Gadgets</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Wireless VR Headset</a></li>
                            </ul>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-wd-3 border-right remove-bd-wd border-lg-down-0 mb-8">
                    <div class="row align-items-center align-items-xl-start">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-block">
                                <img class="img-fluid" src=" assets/img/300X300/img4.jpg" alt="Image Description">
                            </a>
                        </div>
                        <div class="col-md-7 pl-lg-0">
                            <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="underline-on-hover">Home Entertainment</a>
                            </h4>
                            <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Blue-ray Players</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">DVD Players</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Home & Audio Entertainment</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Home Theater Systems</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Soundbar Speakers</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Projectors</a></li>
                            </ul>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-wd-3 border-right border-lg-down-0 mb-8">
                    <div class="row align-items-center align-items-xl-start">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-block">
                                <img class="img-fluid" src=" assets/img/300X300/img5.jpg" alt="Image Description">
                            </a>
                        </div>
                        <div class="col-md-7 pl-lg-0">
                            <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="underline-on-hover">Laptops & Computers</a>
                            </h4>
                            <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Accessories</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">All in One</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Computer Accessories</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Computer Monitors</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Laptop Skins</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Desktop Computers</a></li>
                            </ul>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-wd-3 border-right remove-bd-xl-only border-lg-down-0 mb-8">
                    <div class="row align-items-center align-items-xl-start">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-block">
                                <img class="img-fluid" src=" assets/img/300X300/img6.jpg" alt="Image Description">
                            </a>
                        </div>
                        <div class="col-md-7 pl-lg-0">
                            <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="underline-on-hover">Accessories</a>
                            </h4>
                            <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Cases</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Headphone Accessories</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Headphone Cases</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Headphones</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Pendrives</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Chargers</a></li>
                            </ul>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-wd-3 border-right border-lg-down-0 mb-8 d-xl-none d-wd-block">
                    <div class="row align-items-center align-items-xl-start">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-block">
                                <img class="img-fluid" src=" assets/img/300X300/img7.png" alt="Image Description">
                            </a>
                        </div>
                        <div class="col-md-7 pl-lg-0">
                            <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="underline-on-hover">Cameras & Photography</a>
                            </h4>
                            <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Cameras</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Photo Cameras</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Video Cameras</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">GoPro Cameras</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Drone Camera</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">360 camera</a></li>
                            </ul>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">See all</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-wd-3 border-lg-down-0 mb-8 d-xl-none d-wd-block">
                    <div class="row align-items-center align-items-xl-start">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-block">
                                <img class="img-fluid" src=" assets/img/300X300/img8.jpg" alt="Image Description">
                            </a>
                        </div>
                        <div class="col-md-7 pl-lg-0">
                            <h4 class="font-size-18 mb-0 mb-xl-2 font-size-14-down-lg text-center text-md-left">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="underline-on-hover">Computer Components</a>
                            </h4>
                            <ul class="mb-1 font-size-13 list-unstyled text-lh-21 d-none d-xl-block">
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Computer Cases</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Desktops</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Monitors</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Software</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">USB Hubs</a></li>
                                <li><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="text-gray-15 underline-on-hover">Hard Disk Bags</a></li>
                            </ul>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="d-none d-xl-block text-right font-weight-bold text-gray-15 underline-on-hover">See all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Categories this Month -->

        <!-- Recommendation for you -->
        <div class="position-relative">
            <div class="border-bottom border-color-1 mb-2">
                <h3 class="section-title section-title__full d-inline-block mb-0 pb-2 font-size-22">Recommendation for you</h3>
            </div>
            <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                data-slides-show="7"
                data-slides-scroll="1"
                data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                data-arrow-left-classes="fa fa-angle-left right-1"
                data-arrow-right-classes="fa fa-angle-right right-0"
                data-responsive='[{
                  "breakpoint": 1400,
                  "settings": {
                    "slidesToShow": 6
                  }
                }, {
                    "breakpoint": 1200,
                    "settings": {
                      "slidesToShow": 3
                    }
                }, {
                  "breakpoint": 992,
                  "settings": {
                    "slidesToShow": 3
                  }
                }, {
                  "breakpoint": 768,
                  "settings": {
                    "slidesToShow": 2
                  }
                }, {
                  "breakpoint": 554,
                  "settings": {
                    "slidesToShow": 2
                  }
                }]'>
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                    <div class="mb-2">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">$685,00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                    <div class="mb-2">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">$685,00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                    <div class="mb-2">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">$685,00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                    <div class="mb-2">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img4.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">$685,00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                    <div class="mb-2">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img5.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">$685,00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                    <div class="mb-2">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img6.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">$685,00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                    <div class="mb-2">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">$685,00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                    <div class="mb-2">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">$685,00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100 w-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                    <div class="mb-2">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src=" assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">$685,00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                        <a href="https://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Recommendation for you -->
        <!-- Banner 2 columns -->
        <div class="mb-8">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop.html">
                        <img class="img-fluid" src=" assets/img/690X150/img1.jpg" alt="Image Description">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop.html">
                        <img class="img-fluid" src=" assets/img/690X150/img2.jpg" alt="Image Description">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Banner 2 columns -->
    </div>
    <!-- Brand Carousel -->
    <div class="container mb-8">
        <div class="py-2 border-top border-bottom">
            <div class="js-slick-carousel u-slick my-1"
                data-slides-show="5"
                data-slides-scroll="1"
                data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                data-responsive='[{
                    "breakpoint": 992,
                    "settings": {
                        "slidesToShow": 2
                    }
                }, {
                    "breakpoint": 768,
                    "settings": {
                        "slidesToShow": 1
                    }
                }, {
                    "breakpoint": 554,
                    "settings": {
                        "slidesToShow": 1
                    }
                }]'>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src=" assets/img/200X60/img1.png" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src=" assets/img/200X60/img2.png" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src=" assets/img/200X60/img3.png" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src=" assets/img/200X60/img4.png" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src=" assets/img/200X60/img5.png" alt="Image Description">
                    </a>
                </div>
                <div class="js-slide">
                    <a href="#" class="link-hover__brand">
                        <img class="img-fluid m-auto max-height-50" src=" assets/img/200X60/img6.png" alt="Image Description">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Carousel -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== FOOTER ========== -->
<footer>
    <!-- Footer-top-widget -->
    <div class="container d-none d-lg-block mb-3">
        <div class="row">
            <div class="col-wd-3 col-lg-4">
                <div class="widget-column">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
                    </div>
                    <ul class="list-unstyled products-group">
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src=" assets/img/75X75/img1.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Wireless Headphones Solo 2 HD</a></h5>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">$1149.00</div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src=" assets/img/75X75/img2.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Powerbank 1130 mAh Blue</a></h5>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">$210.00</div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                            <div class="col-auto">
                                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src=" assets/img/75X75/img3.jpg" alt="Image Description"></a>
                            </div>
                            <div class="col pl-4 d-flex flex-column">
                                <h5 class="product-item__title mb-0"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Nerocool EN52377 Dead Silence Gaming Cube Case</a></h5>
                                <div class="prodcut-price mt-auto">
                                    <div class="font-size-15">$180.00</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-wd-3 col-lg-4">
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
                </div>
                <ul class="list-unstyled products-group">
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src=" assets/img/75X75/img4.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Yellow Earphones Waterproof with Bluetooth</a></h5>
                            <div class="prodcut-price mt-auto flex-horizontal-center">
                                <ins class="font-size-15 text-decoration-none">$110.00</ins>
                                <del class="font-size-12 text-gray-9 ml-2">$250.00</del>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src=" assets/img/75X75/img5.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Camera C430W 4k Waterproof</a></h5>
                            <div class="prodcut-price mt-auto flex-horizontal-center">
                                <ins class="font-size-15 text-decoration-none">$899.00</ins>
                                <del class="font-size-12 text-gray-9 ml-2">$1200.00</del>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src=" assets/img/75X75/img6.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                            <div class="prodcut-price mt-auto flex-horizontal-center">
                                <ins class="font-size-15 text-decoration-none">$2100.00</ins>
                                <del class="font-size-12 text-gray-9 ml-2">$3299.00</del>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-wd-3 col-lg-4">
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
                </div>
                <ul class="list-unstyled products-group">
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src=" assets/img/75X75/img7.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi Waterproof</a></h5>
                            <div class="text-warning mb-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                            </div>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">$725.00</div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src=" assets/img/75X75/img8.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">22Mps Camera 6200U with 500GB SDcard</a></h5>
                            <div class="text-warning mb-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="far fa-star text-muted"></small>
                            </div>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">$2999.00</div>
                            </div>
                        </div>
                    </li>
                    <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                        <div class="col-auto">
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src=" assets/img/75X75/img9.jpg" alt="Image Description"></a>
                        </div>
                        <div class="col pl-4 d-flex flex-column">
                            <h5 class="product-item__title mb-0"><a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Full Color LaserJet Pro M452dn</a></h5>
                            <div class="text-warning mb-2">
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="fas fa-star"></small>
                                <small class="far fa-star text-muted"></small>
                            </div>
                            <div class="prodcut-price mt-auto">
                                <div class="font-size-15">$439.00</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-wd-3 d-none d-wd-block">
                <a href="https://transvelo.github.io/electro-html/2.0/html/shop/shop.html" class="d-block"><img class="img-fluid" src=" assets/img/330X360/img1.jpg" alt="Image Description"></a>
            </div>
        </div>
    </div>
    <!-- End Footer-top-widget -->
@endsection



