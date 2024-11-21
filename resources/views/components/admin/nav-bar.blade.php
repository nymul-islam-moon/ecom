<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<div class="py-2 br-bottom">
    <div class="container">
        <div class="row">

            <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 hide-ipad">
                <div class="top_second">
                    <p class="medium text-muted m-0 p-0"><i class="lni lni-phone fs-sm"></i></i> Hotline <a
                            href="#" class="medium text-dark text-underline">0(800) 123-456</a></p>
                </div>
            </div>

            <!-- Right Menu -->
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                <!-- Choose Language -->
                <div class="language-selector-wrapper dropdown js-dropdown float-right mr-3">
                    <a class="popup-title" href="javascript:void(0)" data-toggle="dropdown" title="Language"
                        aria-label="Language dropdown">
                        <span class="hidden-xl-down medium text-muted">Language:</span>
                        <span class="iso_code medium text-muted">English</span>
                        <i class="fa fa-angle-down medium text-muted"></i>
                    </a>
                    <ul class="dropdown-menu popup-content link">
                        <li class="current"><a href="javascript:void(0);"
                                class="dropdown-item medium text-muted"><img src="assets/img/1.jpg"
                                    alt="en" width="16" height="11" /><span>English</span></a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img
                                    src="assets/img/2.jpg" alt="fr" width="16"
                                    height="11" /><span>Français</span></a></li>
                    </ul>
                </div>

                <div class="currency-selector dropdown js-dropdown float-right mr-3">
                    <a href="{{ route('signin-signup') }}" class="text-muted medium"><i
                            class="lni lni-user mr-1"></i>Sign In / Register</a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="headd-sty header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="headd-sty-wrap d-flex align-items-center justify-content-between py-3">
                    <div class="headd-sty-left d-flex align-items-center">
                        <div class="headd-sty-01">
                            <a class="nav-brand py-0" href="{{ route('home') }}">
                                <img src="assets/img/logo.png" class="logo" alt="" />
                            </a>
                        </div>
                        <div class="headd-sty-02 ml-3">
                            <form class="bg-white rounded-md border-bold">
                                <div class="input-group">
                                    <input type="text" class="form-control custom-height b-0"
                                        placeholder="Search for products..." />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><button
                                                class="btn bg-white text-danger custom-height rounded px-3"
                                                type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="headd-sty-last">
                        <ul class="nav-menu nav-menu-social align-to-right align-items-center d-flex">
                            <li>
                                <div class="call d-flex align-items-center text-left">
                                    <i class="lni lni-phone fs-xl"></i>
                                    <span class="text-muted small ml-3">Call Us Now:<strong
                                            class="d-block text-dark fs-md">0(800) 123-456</strong></span>
                                </div>
                            </li>
                            <li>
                                <a href="#" onclick="openWishlist()">
                                    <i class="far fa-heart fs-lg"></i><span
                                        class="dn-counter bg-success">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="openCart()">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <i class="fas fa-shopping-basket fs-lg"></i><span
                                            class="dn-counter theme-bg">3</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mobile_nav">
                        <ul>
                            <li>
                                <a href="#" onclick="openSearch()">
                                    <i class="lni lni-search-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#login">
                                    <i class="lni lni-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="openWishlist()">
                                    <i class="lni lni-heart"></i><span class="dn-counter">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="openCart()">
                                    <i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Navigation -->
<div class="headerd header-dark head-style-2">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <div class="nav-toggle"></div>
                <div class="nav-menus-wrapper">
                    <ul class="nav-menu">
                        <li><a href="{{ route('home') }}" class="pl-0">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->

<!-- ======================= Top Breadcrubms ======================== -->
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->
