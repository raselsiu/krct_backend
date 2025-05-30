		<!-- Footer Style -->
		<footer class="main-footer">
			<div class="footer_bg-image" style="background-image: url({{ asset('frontend/assets/images/background/krct/footer_bg_one.png') }})">
			</div>
			<div class="auto-container">
				<div class="inner-container ">

					<!-- Widgets Section -->
					<div class="widgets-section">
						<div class="row clearfix">
							<!-- Big Column -->
							<div class="big-column col-lg-12 col-md-12 col-sm-12">
								<div class="row clearfix">

									
									<!-- Footer Column -->
							

									<div class="footer-column col-lg-4 col-md-4 col-sm-12">
										<div class="footer-widget links-widget">
											<h4 class="footer-title">Quick Links</h4>
											<div class="footer_list">
												<li><a href="#about_us">About us</a></li>
												<li><a href="#">Scholars</a></li>
												<li><a href="#">Courses</a></li>
												<li><a href="#">Latest News</a></li>
												<li><a href="#">Contact</a></li>
											</div>
										</div>
									</div>

																		<!-- Footer Column -->
									<div class="footer-column col-lg-4 col-md-4 col-sm-12">
										<div class="footer-widget links-widget">
											<h4 class="footer-title">Operational Office</h4>
											<div class="footer_list">
												<li>Sultanpur, Manik Kona</li>
												<li>Fenchuganj, Sylhet</li>
												<li>(+88)311-2121101</li>
												<li class="nav-item">
                                    				<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                				</li>
											</div>
										</div>
									</div>

									<!-- Footer Column -->
									<div class="footer-column col-lg-4 col-md-4 col-sm-12">
										<div class="footer-widget newsletter-widget">
											<h4 class="footer-title">Location</h4>
											<div class="footer_list">
												<li>Sultanpur, Manik Kona</li>
												<li>Fenchuganj, Sylhet</li>
												<li>(+88)01516-021488</li>
											</div>
										</div>
									</div>


								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer_bottom-bg"
					style="background-image: url({{ asset('frontend/assets/images/background/krct/footer_bg_2.png') }})">
				</div>
				<div class="auto-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<div class="copyright">All rights reserved 2025 &copy; krctbd.org</div>
						<ul class="footer-nav">
							<li><a href="#">Login</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Style -->

		<!-- Search Popup -->
		<div class="search-popup">
			<div class="color-layer"></div>
			<button class="close-search"><span class="flaticon-close-1"></span></button>
			<form method="post" action="https://themazine.com/html/alquran/blog.html">
				<div class="form-group">
					<input type="search" name="search-field" value="" placeholder="Search Here" required="">
					<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
				</div>
			</form>
		</div>
		<!-- End Search Popup -->


	</div>
	<!-- End PageWrapper -->

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.2/dist/sweetalert2.all.min.js"></script>



	<script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/parallax.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/tilt.jquery.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jquery.paroller.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jarallax.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/backtotop.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/odometer.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/parallax-scroll.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/SplitText.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/ScrollToPlugin.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/ScrollSmoother.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/nav-tool.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/element-in-view.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/krct.js') }}"></script>


	@if(session()->has('msg'))
		<script>
			const Toast = Swal.mixin({
			toast: true,
			position: "top-end",
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.onmouseenter = Swal.stopTimer;
				toast.onmouseleave = Swal.resumeTimer;
			}
			});
			Toast.fire({
			icon: "success",
			title: "{{ session('msg') }}"
			});
		</script>
	@endif


	@stack('js')

</body>

</html>