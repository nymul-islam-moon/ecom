<!DOCTYPE html>
<html lang="zxx">

@include('partials.head');

<body>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <x-nav-bar />

        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <!-- ======================= Category & Slider ======================== -->
        <section class="p-0">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <div class="killore-new-block-link border mb-3 mt-3">
                            <div class="px-3 py-3 ft-medium fs-md text-dark gray">Top Categories</div>

                            <div class="killore--block-link-content">
                                <ul>
                                    <li><a href="javascript:void(0);"><i class="fas fa-tshirt"></i>Fashion</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-tv"></i>Electronics</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-gift"></i>Gifts & Cards</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-leaf"></i>Home Decoration</a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i
                                                class="fas fa-headphones-alt"></i>Headphones</a></li>
                                    <li><a href="javascript:void(0);"><i class="fas fa-football-ball"></i>Sports
                                            Items</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                        <div class="home-slider auto-slider mb-3 mt-3">

                            <!-- Slide -->
                            <div data-background-image="assets/img/light-banner-1.png" class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="home-slider-container">

                                                <!-- Slide Title -->
                                                <div class="home-slider-desc">
                                                    <div class="home-slider-title mb-4">
                                                        <h5 class="fs-sm ft-ragular mb-2">New Collection</h5>
                                                        <h1 class="mb-2 ft-bold">The Standard<br>With <span
                                                                class="theme-cl">Smartness</span></h1>
                                                        <span class="trending">Apple 10 comes with 6.5 inches full HD +
                                                            High Valume</span>
                                                    </div>

                                                    <a href="#"
                                                        class="btn btn-white stretched-link hover-black">Buy Now<i
                                                            class="lni lni-arrow-right ml-2"></i></a>
                                                </div>
                                                <!-- Slide Title / End -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div data-background-image="assets/img/light-banner-2.png" class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="home-slider-container">

                                                <!-- Slide Title -->
                                                <div class="home-slider-desc">
                                                    <div class="home-slider-title mb-4">
                                                        <h5 class="fs-sm ft-ragular mb-2">Super Sale</h5>
                                                        <h1 class="mb-2 ft-bold">The Standard<br>With <span
                                                                class="text-success">Smartness</span></h1>
                                                        <span class="trending">Xiomi Redmi 10 comes with 6.5 inches full
                                                            HD + LCD Screen</span>
                                                    </div>

                                                    <a href="#"
                                                        class="btn btn-white stretched-link hover-black">Shop Now<i
                                                            class="lni lni-arrow-right ml-2"></i></a>
                                                </div>
                                                <!-- Slide Title / End -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div data-background-image="assets/img/light-banner-3.png" class="item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="home-slider-container">

                                                <!-- Slide Title -->
                                                <div class="home-slider-desc">
                                                    <div class="home-slider-title mb-4">
                                                        <h5 class="fs-sm ft-ragular mb-2">Super Sale</h5>
                                                        <h1 class="mb-2 ft-bold">The Standard<br>With Smartness</h1>
                                                        <span class="trending">Xiomi Redmi 10 comes with 6.5 inches full
                                                            HD + LCD Screen</span>
                                                    </div>

                                                    <a href="#" class="btn theme-bg text-light">Shop Now<i
                                                            class="lni lni-arrow-right ml-2"></i></a>
                                                </div>
                                                <!-- Slide Title / End -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ======================= Category & Slider ======================== -->

        <!-- ======================= Product List ======================== -->
        <section class="middle">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center">
                            <h2 class="off_title">Trendy Products</h2>
                            <h3 class="ft-bold pt-3">Our Trending Products</h3>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center rows-products">
                    <!-- Single -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">
                            <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale
                            </div>
                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                            class="card-img-top" src="assets/img/shop/9.png" alt="..."></a>
                                </div>
                            </div>
                            <div
                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                <div class="text-left">
                                    <div class="text-left">
                                        <div class="elso_titl"><span class="small">Mobiles</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Killore iPhone
                                                12</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">
                            <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale
                            </div>
                            <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                -40%</div>
                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                            class="card-img-top" src="assets/img/shop/10.png" alt="..."></a>
                                </div>
                            </div>
                            <div
                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                <div class="text-left">
                                    <div class="text-left">
                                        <div class="elso_titl"><span class="small">Headphones</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Killore
                                                Headphone</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">
                            <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                Sale</div>
                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                            class="card-img-top" src="assets/img/shop/11.png" alt="..."></a>
                                </div>
                            </div>
                            <div
                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                <div class="text-left">
                                    <div class="text-left">
                                        <div class="elso_titl"><span class="small">Mobiles</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Ziome iPhone
                                                11</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">
                            <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New
                            </div>
                            <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                -55%</div>
                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                            class="card-img-top" src="assets/img/shop/4.png" alt="..."></a>
                                </div>
                            </div>
                            <div
                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                <div class="text-left">
                                    <div class="text-left">
                                        <div class="elso_titl"><span class="small">Mobiles</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Pillos Android
                                                Phone</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">
                            <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                Sale</div>
                            <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                -30%</div>
                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                            class="card-img-top" src="assets/img/shop/5.png" alt="..."></a>
                                </div>
                            </div>
                            <div
                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                <div class="text-left">
                                    <div class="text-left">
                                        <div class="elso_titl"><span class="small">Camera</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Phot Video
                                                Camera</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">
                            <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New
                            </div>
                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                            class="card-img-top" src="assets/img/shop/6.png" alt="..."></a>
                                </div>
                            </div>
                            <div
                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                <div class="text-left">
                                    <div class="text-left">
                                        <div class="elso_titl"><span class="small">Headphone</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">New Croft
                                                Headphone</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">
                            <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                Sale</div>
                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                            class="card-img-top" src="assets/img/shop/7.png" alt="..."></a>
                                </div>
                            </div>
                            <div
                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                <div class="text-left">
                                    <div class="text-left">
                                        <div class="elso_titl"><span class="small">TV/LCD</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">32 Inch Sony
                                                TV</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                        <div class="product_grid card b-0">
                            <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New
                            </div>
                            <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">
                                -60%</div>
                            <div class="card-body p-0">
                                <div class="shop_thumb position-relative">
                                    <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                            class="card-img-top" src="assets/img/shop/8.png" alt="..."></a>
                                </div>
                            </div>
                            <div
                                class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                <div class="text-left">
                                    <div class="text-left">
                                        <div class="elso_titl"><span class="small">Headphone</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Xiomi 13
                                                Headphone</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="position-relative text-center">
                            <a href="shop-style-1.html" class="btn stretched-link borders">Explore More<i
                                    class="lni lni-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======================= Product List ======================== -->

        <!-- ======================= Brand Start ============================ -->
        <section class="py-3 br-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="smart-brand">

                            <div class="single-brnads">
                                <img src="assets/img/shop-logo-1.png" class="img-fluid" alt="" />
                            </div>

                            <div class="single-brnads">
                                <img src="assets/img/shop-logo-2.png" class="img-fluid" alt="" />
                            </div>

                            <div class="single-brnads">
                                <img src="assets/img/shop-logo-3.png" class="img-fluid" alt="" />
                            </div>

                            <div class="single-brnads">
                                <img src="assets/img/shop-logo-4.png" class="img-fluid" alt="" />
                            </div>

                            <div class="single-brnads">
                                <img src="assets/img/shop-logo-5.png" class="img-fluid" alt="" />
                            </div>

                            <div class="single-brnads">
                                <img src="assets/img/shop-logo-6.png" class="img-fluid" alt="" />
                            </div>

                            <div class="single-brnads">
                                <img src="assets/img/shop-logo-1.png" class="img-fluid" alt="" />
                            </div>

                            <div class="single-brnads">
                                <img src="assets/img/shop-logo-2.png" class="img-fluid" alt="" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Brand Start ============================ -->

        <!-- ======================= Tag Wrap Start ============================ -->
        <section class="bg-cover" style="background:url(assets/img/e-middle-banner.png) no-repeat;">
            <div class="ht-60"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="tags_explore text-center">
                            <h2 class="mb-0 text-white ft-bold">Big Sale Up To 70% Off</h2>
                            <p class="text-light fs-lg mb-4">Exclussive Offers For Limited Time</p>
                            <p>
                                <a href="#" class="btn btn-lg bg-white px-5 text-dark ft-medium">Explore Your
                                    Order</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ht-60"></div>
        </section>
        <!-- ======================= Tag Wrap Start ============================ -->

        <!-- ======================= All Category ======================== -->
        <section class="middle">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center">
                            <h2 class="off_title">Popular Categories</h2>
                            <h3 class="ft-bold pt-3">Trending Categories</h3>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img
                                            src="assets/img/headphones.png" class="img-fluid" width="40"
                                            alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Headphones</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img src="assets/img/watch.png"
                                            class="img-fluid" width="40" alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Watches</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img
                                            src="assets/img/washing-machine.png" class="img-fluid" width="40"
                                            alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Washing Machine</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img
                                            src="assets/img/cell-phone.png" class="img-fluid" width="40"
                                            alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">iPhones</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img
                                            src="assets/img/safety-goggles.png" class="img-fluid" width="40"
                                            alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Goggles</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img src="assets/img/camera.png"
                                            class="img-fluid" width="40" alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Video Camera</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img src="assets/img/fashion.png"
                                            class="img-fluid" width="40" alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Wear</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img src="assets/img/tshirt.png"
                                            class="img-fluid" width="40" alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Kid's Wear</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img
                                            src="assets/img/accessories.png" class="img-fluid" width="40"
                                            alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img src="assets/img/sneakers.png"
                                            class="img-fluid" width="40" alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Shoes</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img
                                            src="assets/img/television.png" class="img-fluid" width="40"
                                            alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                        <div class="cats_side_wrap text-center mx-auto mb-3">
                            <div class="sl_cat_01">
                                <div
                                    class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border">
                                    <a href="javascript:void(0);" class="d-block"><img src="assets/img/pant.png"
                                            class="img-fluid" width="40" alt=""></a></div>
                            </div>
                            <div class="sl_cat_02">
                                <h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Pants</a></h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======================= All Category ======================== -->

        <!-- ======================= Customer Review ======================== -->
        <section class="gray">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center">
                            <h2 class="off_title">Testimonials</h2>
                            <h3 class="ft-bold pt-3">Client Reviews</h3>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                        <div class="reviews-slide px-3">

                            <!-- single review -->
                            <div class="single_review">
                                <div class="sng_rev_thumb">
                                    <figure><img src="assets/img/team-1.jpg" class="img-fluid circle"
                                            alt="" /></figure>
                                </div>
                                <div class="sng_rev_caption text-center">
                                    <div class="rev_desc mb-4">
                                        <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum.</p>
                                    </div>
                                    <div class="rev_author">
                                        <h4 class="mb-0">Mark Jevenue</h4>
                                        <span class="fs-sm">CEO of Addle</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review">
                                <div class="sng_rev_thumb">
                                    <figure><img src="assets/img/team-2.jpg" class="img-fluid circle"
                                            alt="" /></figure>
                                </div>
                                <div class="sng_rev_caption text-center">
                                    <div class="rev_desc mb-4">
                                        <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum.</p>
                                    </div>
                                    <div class="rev_author">
                                        <h4 class="mb-0">Henna Bajaj</h4>
                                        <span class="fs-sm">Aqua Founder</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review">
                                <div class="sng_rev_thumb">
                                    <figure><img src="assets/img/team-3.jpg" class="img-fluid circle"
                                            alt="" /></figure>
                                </div>
                                <div class="sng_rev_caption text-center">
                                    <div class="rev_desc mb-4">
                                        <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum.</p>
                                    </div>
                                    <div class="rev_author">
                                        <h4 class="mb-0">John Cenna</h4>
                                        <span class="fs-sm">CEO of Plike</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single review -->
                            <div class="single_review">
                                <div class="sng_rev_thumb">
                                    <figure><img src="assets/img/team-4.jpg" class="img-fluid circle"
                                            alt="" /></figure>
                                </div>
                                <div class="sng_rev_caption text-center">
                                    <div class="rev_desc mb-4">
                                        <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            velit esse cillum.</p>
                                    </div>
                                    <div class="rev_author">
                                        <h4 class="mb-0">Madhu Sharma</h4>
                                        <span class="fs-sm">Team Manager</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Customer Review ======================== -->

        <!-- ======================= Top Seller Start ============================ -->
        <section class="space min">
            <div class="container">

                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="top-seller-title">
                            <h4 class="ft-medium">Top Seller</h4>
                        </div>
                        <div class="ftr-content">

                            <!-- Single Item -->
                            <div class="product_grid row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-4">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden"
                                            href="shop-single-v1.html"><img class="card-img-top"
                                                src="assets/img/shop/1.png" alt="..."></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
                                    <div class="text-left mfliud">
                                        <div class="elso_titl"><span class="small">Mobiles</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a
                                                href="shop-single-v1.html">Zoomio iPhones</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="product_grid row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-4">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden"
                                            href="shop-single-v1.html"><img class="card-img-top"
                                                src="assets/img/shop/2.png" alt="..."></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
                                    <div class="text-left mfliud">
                                        <div class="elso_titl"><span class="small">TV/LED</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="shop-single-v1.html">32
                                                Inch Smart LED</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$799 -
                                                $1200</span></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="product_grid row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-4">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden"
                                            href="shop-single-v1.html"><img class="card-img-top"
                                                src="assets/img/shop/10.png" alt="..."></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
                                    <div class="text-left mfliud">
                                        <div class="elso_titl"><span class="small">Headphone</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="shop-single-v1.html">Ziomi
                                                Headphone</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$49 - $110</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="ftr-title">
                            <h4 class="ft-medium">Featured Products</h4>
                        </div>
                        <div class="ftr-content">
                            <!-- Single Item -->
                            <div class="product_grid row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-4">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden"
                                            href="shop-single-v1.html"><img class="card-img-top"
                                                src="assets/img/shop/4.png" alt="..."></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
                                    <div class="text-left mfliud">
                                        <div class="elso_titl"><span class="small">iPhones</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a
                                                href="shop-single-v1.html">iPhone Smart 13</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$990 -
                                                $1100</span></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="product_grid row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-4">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden"
                                            href="shop-single-v1.html"><img class="card-img-top"
                                                src="assets/img/shop/5.png" alt="..."></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
                                    <div class="text-left mfliud">
                                        <div class="elso_titl"><span class="small">Camera</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="shop-single-v1.html">Hero
                                                Video Camera</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$600 - $929</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="product_grid row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-4">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden"
                                            href="shop-single-v1.html"><img class="card-img-top"
                                                src="assets/img/shop/6.png" alt="..."></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
                                    <div class="text-left mfliud">
                                        <div class="elso_titl"><span class="small">Headphone</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="shop-single-v1.html">V1
                                                Jumpsuit Headphone</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $219</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="ftr-title">
                            <h4 class="ft-medium">Recent Products</h4>
                        </div>
                        <div class="ftr-content">
                            <!-- Single Item -->
                            <div class="product_grid row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-4">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden"
                                            href="shop-single-v1.html"><img class="card-img-top"
                                                src="assets/img/shop/7.png" alt="..."></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
                                    <div class="text-left mfliud">
                                        <div class="elso_titl"><span class="small">TV/LED</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="shop-single-v1.html">Smart
                                                43 Inch LED</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$909 -
                                                $1400</span></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="product_grid row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-4">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden"
                                            href="shop-single-v1.html"><img class="card-img-top"
                                                src="assets/img/shop/8.png" alt="..."></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
                                    <div class="text-left mfliud">
                                        <div class="elso_titl"><span class="small">Headphone</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="shop-single-v1.html">Vivo
                                                Smart Headphone</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129 - $549</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Item -->
                            <div class="product_grid row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-4">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden"
                                            href="shop-single-v1.html"><img class="card-img-top"
                                                src="assets/img/shop/9.png" alt="..."></a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7 col-8 pl-0">
                                    <div class="text-left mfliud">
                                        <div class="elso_titl"><span class="small">Mobiles</span></div>
                                        <h5 class="fs-md mb-0 lh-1 mb-1 ft-medium"><a href="shop-single-v1.html">Micro
                                                Android Phones</a></h5>
                                        <div
                                            class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$990 -
                                                $1949</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ======================= Top Seller Start ============================ -->

        <!-- ======================= Customer Features ======================== -->
        <section class="px-0 py-3 br-top">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">Free Shipping</h5>
                                <span class="text-muted">Capped at $10 per order</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="far fa-credit-card"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">Secure Payments</h5>
                                <span class="text-muted">Up to 6 months installments</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">15-Days Returns</h5>
                                <span class="text-muted">Shop with fully confidence</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="d-flex align-items-center justify-content-start py-2">
                            <div class="d_ico">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <div class="d_capt">
                                <h5 class="mb-0">24x7 Fully Support</h5>
                                <span class="text-muted">Get friendly support</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ======================= Customer Features ======================== -->

        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer style-2">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="footer_widget">
                                <img src="assets/img/logo-light.png" class="img-footer small mb-2" alt="" />

                                <div class="address mt-3">
                                    3298 Grant Street Longview, TX<br>United Kingdom 75601
                                </div>
                                <div class="address mt-3">
                                    1-202-555-0106<br>help@shopper.com
                                </div>
                                <div class="address mt-3">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-facebook-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-twitter-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-instagram-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Supports</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">About Page</a></li>
                                    <li><a href="#">Size Guide</a></li>
                                    <li><a href="#">FAQ's Page</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Shop</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Men's Shopping</a></li>
                                    <li><a href="#">Women's Shopping</a></li>
                                    <li><a href="#">Kids's Shopping</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Discounts</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Login</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Subscribe</h4>
                                <p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
                                <div class="foot-news-last">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                        <div class="input-group-append">
                                            <button type="button" class="input-group-text b-0 text-light"><i
                                                    class="lni lni-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="address mt-3">
                                    <h5 class="fs-sm text-light">Secure Payments</h5>
                                    <div class="scr_payment"><img src="assets/img/card.png" class="img-fluid"
                                            alt="" /></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0">© 2021 Kumo. Designd By <a href="https://themezhub.com/">ThemezHub</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <!-- Wishlist -->
        <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;"
            id="Wishlist">
            <div class="rightMenu-scroll">
                <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                    <h4 class="cart_heading fs-md ft-medium mb-0">Saved Products</h4>
                    <button onclick="closeWishlist()" class="close_slide"><i class="ti-close"></i></button>
                </div>
                <div class="right-ch-sideBar">

                    <div class="cart_select_items py-2">
                        <!-- Single Item -->
                        <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                            <div class="cart_single d-flex align-items-center">
                                <div class="cart_selected_single_thumb">
                                    <a href="#"><img src="assets/img/product/4.jpg" width="60"
                                            class="img-fluid" alt="" /></a>
                                </div>
                                <div class="cart_single_caption pl-2">
                                    <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
                                    <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span
                                            class="text-dark small">Red</span></p>
                                    <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                                </div>
                            </div>
                            <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                            <div class="cart_single d-flex align-items-center">
                                <div class="cart_selected_single_thumb">
                                    <a href="#"><img src="assets/img/product/7.jpg" width="60"
                                            class="img-fluid" alt="" /></a>
                                </div>
                                <div class="cart_single_caption pl-2">
                                    <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit
                                    </h4>
                                    <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span
                                            class="text-dark small">Red</span></p>
                                    <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                                </div>
                            </div>
                            <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cart_single d-flex align-items-center">
                                <div class="cart_selected_single_thumb">
                                    <a href="#"><img src="assets/img/product/8.jpg" width="60"
                                            class="img-fluid" alt="" /></a>
                                </div>
                                <div class="cart_single_caption pl-2">
                                    <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
                                    <p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span
                                            class="text-dark small">Blue</span></p>
                                    <h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
                                </div>
                            </div>
                            <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button>
                            </div>
                        </div>

                    </div>

                    <div class="cart_action px-3 py-3">
                        <div class="form-group">
                            <button type="button" class="btn d-block full-width btn-dark-light">View
                                Whishlist</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Cart -->
        <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;"
            id="Cart">
            <div class="rightMenu-scroll">
                <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                    <h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
                    <button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
                </div>
                <div class="right-ch-sideBar">

                    <div class="cart_select_items py-2">
                        <!-- Single Item -->
                        <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                            <div class="cart_single d-flex align-items-center">
                                <div class="cart_selected_single_thumb">
                                    <a href="#"><img src="assets/img/product/4.jpg" width="60"
                                            class="img-fluid" alt="" /></a>
                                </div>
                                <div class="cart_single_caption pl-2">
                                    <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
                                    <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span
                                            class="text-dark small">Red</span></p>
                                    <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                                </div>
                            </div>
                            <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                            <div class="cart_single d-flex align-items-center">
                                <div class="cart_selected_single_thumb">
                                    <a href="#"><img src="assets/img/product/7.jpg" width="60"
                                            class="img-fluid" alt="" /></a>
                                </div>
                                <div class="cart_single_caption pl-2">
                                    <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit
                                    </h4>
                                    <p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span
                                            class="text-dark small">Red</span></p>
                                    <h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
                                </div>
                            </div>
                            <div class="fls_last"><button class="close_slide gray"><i
                                        class="ti-close"></i></button></div>
                        </div>

                        <!-- Single Item -->
                        <div class="d-flex align-items-center justify-content-between px-3 py-3">
                            <div class="cart_single d-flex align-items-center">
                                <div class="cart_selected_single_thumb">
                                    <a href="#"><img src="assets/img/product/8.jpg" width="60"
                                            class="img-fluid" alt="" /></a>
                                </div>
                                <div class="cart_single_caption pl-2">
                                    <h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
                                    <p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span
                                            class="text-dark small">Blue</span></p>
                                    <h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
                                </div>
                            </div>
                            <div class="fls_last"><button class="close_slide gray"><i
                                        class="ti-close"></i></button></div>
                        </div>

                    </div>

                    <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                        <h6 class="mb-0">Subtotal</h6>
                        <h3 class="mb-0 ft-medium">$1023</h3>
                    </div>

                    <div class="cart_action px-3 py-3">
                        <div class="form-group">
                            <button type="button" class="btn d-block full-width btn-dark-light">View Cart</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i
                class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/slider-bg.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/smoothproducts.js"></script>
    <script src="assets/js/snackbar.min.js"></script>
    <script src="assets/js/jQuery.style.switcher.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <script>
        function openWishlist() {
            document.getElementById("Wishlist").style.display = "block";
        }

        function closeWishlist() {
            document.getElementById("Wishlist").style.display = "none";
        }
    </script>

    <script>
        function openCart() {
            document.getElementById("Cart").style.display = "block";
        }

        function closeCart() {
            document.getElementById("Cart").style.display = "none";
        }
    </script>

    <script>
        function openSearch() {
            document.getElementById("Search").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("Search").style.display = "none";
        }
    </script>

</body>

</html>
