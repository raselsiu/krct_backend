<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>krctbd.com</title>
	<!-- Stylesheets -->
	<link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/krct.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">
	<link href="https://fonts.maateen.me/baloo-da-2/font.css" rel="stylesheet">

	
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.2/dist/sweetalert2.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" type="image/x-icon">

	@stack('css')

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<!-- Developed By Rasel Miah -->
	<!-- Mail: raselsiu16@gmail.com -->

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">

		<!-- Main Header -->
		<header class="main-header">

			<!-- Header Top -->
			<div class="header-top">
				<div class="auto-container">
					<div class="inner-container">
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<div class="left-box d-flex align-items-center flex-wrap">
								<!-- Info List -->
								<ul class="header-top_list">
									<li><span class="icon fa-solid fa-envelope fa-fw"></span>krctbd@gmail.com</li>
									<li><span class="icon fa-solid fa-location-dot fa-fw"></span>Sultanpur, Manik Kona,
										Fenchuganj, Sylhet</li>
								</ul>
							</div>
							<ul class="header-top_list-two">
								<li><span class="icon fa-solid fa-phone fa-fw"></span>Let’s Talk +8801302-137848</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Upper -->
			<div class="header-upper">
				<div class="auto-container">
					<div class="inner-container">
						<div class="d-flex justify-content-between align-items-center flex-wrap">

							<div class="logo-box">
								<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}"
											alt="" title="krctbd.com" width="100px" height="100px"></a></div>
							</div>

							<div class="nav-outer">
								<!-- Main Menu -->
								<nav class="main-menu navbar-expand-md">
									<div class="navbar-header">
										<!-- Toggle Button -->
										<button class="navbar-toggler" type="button" data-toggle="collapse"
											data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<li><a href="{{ url('/') }}">Home</a></li>
											<li><a href="#about_us">About Us</a></li>
											<li><a href="#service">Services</a></li>
											<li><a href="{{ route('event') }}">Events</a></li>
											<li><a href="{{ route('trustees') }}">Board of Trustees</a></li>
											<li class="dropdown"><a href="#">Team</a>
												<ul>
													<li><a href="{{ route('staff') }}">Staff</a></li>
													<li><a href="{{ route('volunteer') }}">Volunteers</a></li>
												</ul>
											</li>
											<li><a href="{{ route('gallery') }}">Media</a>
												<!-- <ul>
													<li><a href="student.html">Students</a></li>
													<li><a href="#">Parents & Sudents</a></li>
													<li><a href="#">Our Activities</a></li>
													<li><a href="#">Programme</a></li>
												</ul> -->
											</li>

											<li><a href="{{ route('medical_corner') }}">Medical Corner</a></li>
											<li><a href="{{ route('news') }}">News</a></li>
											<li><a href="{{ route('contact') }}">Contact</a></li>
										</ul>
									</div>
								</nav>
							</div>

							<!-- Main Menu End-->
							<div class="outer-box d-flex align-items-center flex-wrap">

								<!-- Search Btn -->
								<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span>
								</div>

								<!-- Button Box -->
								<div class="header_button-box">
									<a href="{{ route('donation') }}" class="btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Donate Now</span>
											<span class="text-two">Donate Now</span>
										</span>
									</a>
								</div>

								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-close-1"></span></div>
				<nav class="menu-box">
					<div class="nav-logo">
						<a href="index.html">
							<img src="{{ asset('frontend/assets/images/logo/logo-v2.png') }}" alt="" title="image">
						</a>
					</div>
					<div class="menu-outer"></div>
				</nav>
			</div>
			<!-- End Mobile Menu -->

		</header>
		<!-- End Main Header -->