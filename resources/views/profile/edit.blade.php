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

			<!-- ======================= Top Breadcrubms ======================== -->
			<div class="gray py-3">
				<div class="container">
					<div class="row">
						<div class="colxl-12 col-lg-12 col-md-12">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Info</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- ======================= Top Breadcrubms ======================== -->

			<!-- ======================= Dashboard Detail ======================== -->
			<section class="middle">
				<div class="container">
					<div class="row align-items-start justify-content-between">

						<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
							<div class="d-block border rounded mfliud-bot">
								<div class="dashboard_author px-2 py-5">
									<div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
										<img src="assets/img/team-1.jpg" class="img-fluid circle" width="100" alt="" />
									</div>
									<div class="dash_caption">
										<h4 class="fs-md ft-medium mb-0 lh-1">Adam Wishnoi</h4>
										<span class="text-muted smalls">Australia</span>
									</div>
								</div>

								<div class="dashboard_author">
									<h4 class="px-3 py-2 mb-0 lh-2 gray fs-sm ft-medium text-muted text-uppercase text-left">Dashboard Navigation</h4>
									<ul class="dahs_navbar">
										<li><a href="my-orders.html"><i class="lni lni-shopping-basket mr-2"></i>My Order</a></li>
										<li><a href="wishlist.html"><i class="lni lni-heart mr-2"></i>Wishlist</a></li>
										<li><a href="profile" class="active"><i class="lni lni-user mr-2"></i>Profile Info</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="lni lni-power-switch mr-2"></i>Log Out
                                            </a>
                                        </li>

                                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                            @csrf
                                        </form>
										

									</ul>
								</div>

								

							</div>
						</div>

						<div class="col-12 col-md-12 col-lg-8 col-xl-8">
							<!-- row -->
							<div class="row align-items-center">
								<form class="row m-0">

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Full Name *</label>
											<input type="text" class="form-control" value="{{ $user->name }}" placeholder="Full Name" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Email ID *</label>
											<input type="text" class="form-control" value="{{ $user->email }}" placeholder="email@gmail.com" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Current Password *</label>
											<input type="text" class="form-control" placeholder="Current Password" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">New Password *</label>
											<input type="text" class="form-control" placeholder="New Password" />
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Country</label>
											<input type="text" class="form-control" placeholder="Country" />
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Address</label>
											<input type="text" class="form-control" placeholder="Address" />
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Profile Image</label>
											<input type="file" class="form-control" />
										</div>
									</div>



									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<button type="button" class="btn btn-dark">Save Changes</button>
										</div>
									</div>

								</form>
							</div>
							<!-- row -->
						</div>

					</div>
				</div>
			</section>
			<!-- ======================= Dashboard Detail End ======================== -->

			<!-- ============================= Customer Features =============================== -->
			<section class="px-0 py-3 br-top">
				<div class="container">
					<div class="row">

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-shopping-basket theme-cl"></i>
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
									<i class="far fa-credit-card theme-cl"></i>
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
									<i class="fas fa-shield-alt theme-cl"></i>
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
									<i class="fas fa-headphones-alt theme-cl"></i>
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
											<li class="list-inline-item"><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-youtube"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
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
												<button type="button" class="input-group-text b-0 text-light"><i class="lni lni-arrow-right"></i></button>
											</div>
										</div>
									</div>
									<div class="address mt-3">
										<h5 class="fs-sm text-light">Secure Payments</h5>
										<div class="scr_payment"><img src="assets/img/card.png" class="img-fluid" alt="" /></div>
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
								<p class="mb-0">© 2021 Kumo. Designd By <a href="https://themezhub.com/">ThemezHub</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->

			<!-- Wishlist -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Wishlist">
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
										<a href="#"><img src="assets/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

						</div>

						<div class="cart_action px-3 py-3">
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark-light">View Whishlist</button>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Cart -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
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
										<a href="#"><img src="assets/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>

							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="assets/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
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

			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
		<script src="{{ asset('assets/js/slick.js') }}"></script>
		<script src="{{ asset('assets/js/slider-bg.js') }}"></script>
		<script src="{{ asset('assets/js/lightbox.js') }}"></script>
		<script src="{{ asset('assets/js/smoothproducts.js') }}"></script>
		<script src="{{ asset('assets/js/snackbar.min.js') }}"></script>
		<script src="{{ asset('assets/js/jQuery.style.switcher.js') }}"></script>
		<script src="{{ asset('assets/js/custom.js') }}"></script>
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

