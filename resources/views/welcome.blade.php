@extends('frontend.layout.front_layout')

@section('content')
		<!-- Slider One -->
		<section class="slider-one">
			<div class="main-slider swiper-container">
				<div class="swiper-wrapper">


					<!-- Slide -->
					<div class="swiper-slide">
						<div class="slider-one_image-layer"
							style="background-image:url({{ asset('frontend/assets/images/background/krct/slider/03.png') }})"></div>
						<div class="auto-container">

							<!-- Content Column -->
							<div class="slider-one_content">
								<div class="slider-one_content-inner">
									<h1 class="slider-one_heading">Khulafaye Rashedin <br> Charitable Trust</h1>
									<div class="slider-one_button">
										<a href="course-detail.html" class="theme-btn btn-style-two">
											<span class="btn-wrap">
												<span class="text-one">Donate Now</span>
												<span class="text-two">Donate Now</span>
											</span>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="slider-one_image-layer"
							style="background-image:url({{ asset('frontend/assets/images/background/krct/slider/01.png') }})"></div>
						<div class="auto-container">

							<!-- Content Column -->
							<div class="slider-one_content">
								<div class="slider-one_content-inner">
									<h1 class="slider-one_heading">Khulafaye Rashedin <br> Charitable Trust</h1>
									<div class="slider-one_button">
										<a href="donation.html" class="theme-btn btn-style-two">
											<span class="btn-wrap">
												<span class="text-one">Donate Now</span>
												<span class="text-two">Donate Now</span>
											</span>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="slider-one_image-layer"
							style="background-image:url({{ asset('frontend/assets/images/background/krct/slider/02.png') }})"></div>
						<div class="auto-container">

							<!-- Content Column -->
							<div class="slider-one_content">
								<div class="slider-one_content-inner">
									<h1 class="slider-one_heading">Khulafaye Rashedin <br> Charitable Trust</h1>
									<div class="slider-one_button">
										<a href="donation.html" class="theme-btn btn-style-two">
											<span class="btn-wrap">
												<span class="text-one">Donate Now</span>
												<span class="text-two">Donate Now</span>
											</span>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
				<div class="slider-one-arrow">
					<!-- If we need navigation buttons -->
					<div class="main-slider-prev fas fa-arrow-left fa-fw"></div>
					<div class="main-slider-next fas fa-arrow-right fa-fw"></div>
				</div>
			</div>
		</section>
		<!-- End Main Slider Section -->

		<!-- Featured One -->
		<section class="featured-one">
			<div class="auto-container">
				<div class="inner-container" style="background-image:url({{ asset('frontend/assets/images/logo/feature_bg.png') }})">
					<div class="row clearfix">

						<!-- Events Block -->
						<div class="feature-block_one col-lg-2 col-md-2 col-sm-4">
							<div class="feature-block_one-inner">
								<div class="event_date_box">
									<div class="inner_txt_bx">
										<h2>21</h2>
										<h4>Feb</h4>
									</div>
								</div>
							</div>
						</div>

						<!-- Events Block -->
						<div class="feature-block_one col-lg-7 col-md-6 col-sm-5">
							<div class="feature-block_one-inner">
								<div class="event_desc">
									<div class="event_title">
										<h4>Upcoming Event: Medical services organized by Khulafaye Rashedin Charity
										</h4>
									</div>
									<div class="event_times">
										<i class="fa-regular fa-clock"></i>&nbsp;<span>3:30 PM - 5:30 PM</span>
									</div>
									<div class="event_locations">
										<i class="fa-solid fa-location-dot"></i>&nbsp;
										<span>
											Sultanpur, Manik Kuna,
											Fenchuganj, Sylhet
										</span>
									</div>

									<!-- <div class="all_events">
										<a href="events.html" class="btn btn-success">View All Events</a>
									</div> -->

								</div>
							</div>
						</div>

						<!-- Events Block -->
						<div class="feature-block_one col-lg-3 col-md-3 col-sm-3">
							<div class="feature-block_one-inner">
								<div class="event_image_box" id="about_us">
									<img src="{{ asset('frontend/assets/images/background/krct/medical service.jpg') }}" alt="event_image">
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Featured One -->


		<!-- Welcome One -->
		<section class="welcome-one">
			<div class="welcome-one_pattern" style="background-image:url({{ asset('frontend/assets/images/background/pattern-1.png') }})"></div>
			<div class="welcome-one_pattern-two" style="background-image:url({{ asset('frontend/assets/images/background/pattern-2.png') }})">
			</div>
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Content Column -->
					<div class="welcome-one_content-column col-lg-6 col-md-12 col-sm-12">
						<div class="welcome-one_content-outer">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="sec-title_title d-flex align-items-center">About US</div>
								<h2 class="sec-title_heading">Khulafaye Rashedin Charitable Trust</h2>
								<div class="sec-title_text">With Allah’s blessings & mercy the Four
									Khalifas’s Multipurpose charity initiative
									was launched on Friday 18 February
									2022 from Al-Masjid an-Nabawi in
									Madina.</div>
							</div>
							<p>we would like to showcase a conceptual project that I have
								started with Allah (SWT)’s blessing and mercy. We are looking
								for the du’as and support from like-minded charitable
								individuals or families to share in its goodness and establish
								the FOUR KHALIFAHS PROJECT. It’s a charitable, non-political, non-profitable initiative
							</p>
							<p><strong>Aim:<br></strong>
								Develop a multi-purpose complex of various, essential, but
								complimentary services and facilities all under one roof, for
								the needy, in a rural area of the Sylhet district, Bangladesh.</p>
						</div>
					</div>

					<!-- Image Column -->
					<div class="welcome-one_image-column col-lg-6 col-md-12 col-sm-12">
						<div class="welcome-one_image-outer">
							<div class="welcome-one_image">
								<img src="{{ asset('frontend/assets/images/background/krct/about-us.jpg') }}" alt="" />
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Welcome One -->

		<!-- Mission -->
		<section class="welcome-one">
			<div class="welcome-one_pattern" style="background-image:url({{ asset('frontend/assets/images/background/pattern-1.png') }})"></div>
			<div class="welcome-one_pattern-two" style="background-image:url({{ asset('frontend/assets/images/background/pattern-2.png') }})">
			</div>
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Content Column -->
					<div class="institute-block_one col-xl-6 col-lg-6 col-md-6 col-sm-12">
						<div class="institute-block_one-inner wow fadeInLeft" data-wow-delay="150ms"
							data-wow-duration="1000ms"
							style="visibility: visible; animation-duration: 1000ms; animation-delay: 150ms; animation-name: fadeInLeft;">
							<div class="institute-block_one-icon">
								<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="krct-logo">
							</div>
							<h4 class="institute-block_one-heading samir_bangla">সংস্থার মিশন</h4>
							<div class="institute-block_one-text samir_bangla">
								সমাজের দরিদ্র ও বঞ্চিত
								মানুষের জন্য পরিসেবা বিকাশ
								করা। সম্প্রদায়ের অভাবী
								লোকদের জ্ঞান অর্জনের জন্য
								অনুপ্রাণিত করে তাদের একজন
								ভাল মানুষ হতে সাহায্য করার
								জন্য একটি ভিত্তি তৈরি /
								প্রদান করা।
							</div>
						</div>
					</div>

					<!-- Image Column -->
					<div class="institute-block_one col-xl-6 col-lg-6 col-md-6 col-sm-12">
						<div class="institute-block_one-inner wow fadeInLeft animated" data-wow-delay="150ms"
							data-wow-duration="1000ms"
							style="visibility: visible; animation-duration: 1000ms; animation-delay: 150ms; animation-name: fadeInLeft;">
							<div class="institute-block_one-icon">
								<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="krct-logo">
							</div>
							<h4 class="institute-block_one-heading samir_bangla">সংস্থার ভিশন</h4>
							<div class="institute-block_one-text samir_bangla">
								বাংলাদেশ জুড়ে
								অন্যদের অনুপ্রাণিত
								করার জন্য বহুমুখী
								ওয়ান স্টপ সার্ভিস
								মডেল বিকাশ ও
								তৈরি করা ।
							</div>
						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- End Mission -->


		<section class="dark mtb_100">
			<div class="container py-4 chairperson_title">
				<h1 class="h1 text-center" id="pageHeaderTitle">Honorable Chairperson</h1>

				<article class="postcard dark">
					<a class="postcard__img_link" href="#">
						<img class="postcard__img" src="{{ asset('frontend/assets/images/background/krct/trust_members/chairman.png') }}"
							alt="Image Title" />
					</a>
					<div class="postcard__text">
						<h1 class="postcard__title blue"><a href="#">MD. Latif Ahmed</a></h1>
						<div class="postcard__subtitle small">
							<span>Chairman, Khulafaye Rashedin Charitable Trust</span>
						</div>
						<div class="postcard__bar"></div>
						<div class="postcard__preview-txt">
							Latif Ahmed earnestly believes in and works towards bringing positive change to the deprived
							and disadvantaged groups within society. He holds an MBA from the University of Birmingham
							in the UK and has over three decades of experience in a senior position within the
							education, health, social care, and voluntary sectors. He now dedicates his time and effort
							to the development and management of charitable activities in the UK and Bangladesh.
							This includes medical camps, Masjids, Madrasa and education for the poor
						</div>
						<ul class="postcard__tagbox" id="service">
							<li class="tag__item">
								<a href="#"><i class="fa-brands fa-facebook-f"></i> Facebook</a>
							</li>
						</ul>
						<!-- <div class="chairperson_read_more" id="service">
							<a href="" class="btn btn-sm btn_read_more">Read More...</a>
						</div> -->
					</div>
				</article>
			</div>
		</section>

		<!-- Our Services Timeline -->
		<section id="timeline" class="samir_bangla">
			<div class="sec-title centered" id="service">
				<div class="sec-title_title">Why Choose Us</div>
				<h2 class="sec-title_heading">Our Services</h2>
			</div>
			<div class="timeline">
				<div class="timeline__event  animated fadeInUp delay-1s timeline__event--type1">
					<div class="timeline__event__icon ">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="">
						</i>
					</div>
					<div class="timeline__event__content ">
						<div class="timeline__event__title">
							মসজিদ
						</div>
						<div class="timeline__event__description">
							<p>
								হযরত ওসমান (রা) মসজিদ।
							</p>
							<img src="{{ asset('frontend/assets/images/services/mosq-1.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/mosq-2.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/mosq-3.jpg') }}" class="img-thumbnail" alt="" width="200">
						</div>
					</div>
				</div>

				<div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
					<div class="timeline__event__icon">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title samir_bangla">
							হযরত আবু বকর (রা) মাদ্রাসা (ইসলামিক স্কুল)
						</div>
						<div class="timeline__event__description">
							<p class="samir_bangla">
								মসজিদ সংলগ্ন একটি পরিপূরক নির্মান একটি অত্যন্ত স্বাভাবিক ও বিচক্ষণ প্রস্তাব । আর সেই
								আলোকেই ছাত্রদের থাকা , খাওয়া এবং শিক্ষার ব্যবস্থাসহ মাদ্রাসা নির্মান প্রকল্প।
								এই মাদ্রাসা, বর্তমানে বাংলাদেশের অন্যান্য কওমি মাদ্রাসা গুলি দ্বারা প্রদানকৃত শিক্ষার
								চেয়ে আধুনিক ও উন্নত শিক্ষা প্রদান করার লক্ষ্য রাখে।
							</p>
							<img src="{{ asset('frondend/assets/images/services/islamic-madrasa/imad-02.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frondend/assets/images/services/islamic-madrasa/imad-03.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frondend/assets/images/services/islamic-madrasa/imad-04.jpe') }}" class="img-thumbnail" alt="" width="200">
						</div>
					</div>
				</div>

				<div class="timeline__event animated fadeInUp delay-3s timeline__event--type3">
					<div class="timeline__event__icon">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title">
							এতিম খানা
						</div>
						<div class="timeline__event__description">
							<p>
								প্রাথমিকভাবে হযরত উমর (রা) এতিমখানাতে ১০-১৫ জন এতিমদের থাকার ব্যবস্থা করা হয়। এই এতিম
								খানার উদ্দেশ্য হবে বর্তমানে বাংলাদেশে অন্যান্য এতিমখানার চেয়ে আরও বেশী উন্নত সেবা প্রদান
								যা বসবারত এতিমদের আরও সুন্দর উন্নত জীবন ধারনের সুযোগ সৃষ্টি করবে।
							</p>
							<img src="{{ asset('frontend/assets/images/services/charity/01.jpeg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/charity/02.jpeg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/charity/05.jpg') }}" class="img-thumbnail" alt="" width="200">
						</div>

					</div>
				</div>

				<div class="timeline__event animated fadeInUp timeline__event--type1">
					<div class="timeline__event__icon">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title">
							মেডিকেল সেন্টার/চিকিৎসা কেন্দ্র
						</div>
						<div class="timeline__event__description">
							<p>
								এই চিকিৎসা কেন্দ্রটি স্থাপন করার উদ্দেশ্য হোল এই কমপ্লেক্সের/প্রকল্পের আওতায় থাকা সকল
								এতিম, ছাত্র ও বৃদ্ধদের সহ অত্যন্ত অভাবী জনগনের সাধারণ প্রাথমিক চিকিৎসা প্রদান করা।
								এই সেবা প্রদান হবে খন্ডকালীন, সাপ্তাহিক এবং স্থানীয় যোগ্য চিকিৎসক দ্বারা পরিচালিত।
							</p>
							<img src="{{ asset('frontend/assets/images/services/medical/1.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/medical/2.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/medical/3.jpg') }}" class="img-thumbnail" alt="" width="200">
						</div>
					</div>
				</div>

				<div class="timeline__event animated fadeInUp timeline__event--type2">
					<div class="timeline__event__icon">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title">
							বিনামূল্যে খাদ্য কেন্দ্র
						</div>
						<div class="timeline__event__description">
							<p>
								আমরা প্রতি সোমবার ও বৃহস্পতিবার খাদ্য সরবরাহ করার লক্ষ্য রাখছি। এর সাথে সাথে পবিত্র
								রমজান মাসে ইফতারী সরবরাহের প্রকল্প করছি।
								এই সেবা প্রদান করা হবে এলাকা অভাবী ও গরীব বাসিন্দাদের।
							</p>
							<img src="{{ asset('frontend/assets/images/services/food/2.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/food/3.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/food/1.jpg') }}" class="img-thumbnail" alt="" width="200">
						</div>
					</div>
				</div>

				<div class="timeline__event animated fadeInUp timeline__event--type3">
					<div class="timeline__event__icon">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title">
							প্রশিক্ষণ ও টিউটোরিয়াল কেন্দ্র
						</div>
						<div class="timeline__event__description">
							<p>
								অভাবী/দরিদ্র যুবসমাজ/মানুষের জন্য একটি আইসিটি, ইংরেজী ভাষা শিক্ষা প্রশিক্ষন, এ
								বৃত্তিমূলক শিক্ষা
								ও প্রশিক্ষণ, শিক্ষা ও প্রশিক্ষণ কেন্দ্র স্থাপন

							</p>
							<img src="{{ asset('frontend/assets/images/services/tutorials/1.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/tutorials/2.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/tutorials/3.jpg') }}" class="img-thumbnail" alt="" width="200">
						</div>
					</div>
				</div>

				<div class="timeline__event animated fadeInUp timeline__event--type1">
					<div class="timeline__event__icon">
						<i>
							<img src="assets/images/logo/krct_logo.png" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title">
							বয়স্কদের জন্য অবকাশ/বিরাম সেবা প্রদান
						</div>
						<div class="timeline__event__description">
							<p>
								আমরা প্রাথমিকভাবে ৩টি করে ২জন করে ৬জন বয়স্কদের থাকার ব্যবস্থা করার আশা করছি।
								এছাড়াও, যারা বয়স্কদের ও অসুস্থদের দেখাশোনার কাছে নিযুক্ত, সেইসব সেবা প্রদান কারী
								মানুষগুলির জন্য এই প্রকল্পের স্থাপন করতে চাচ্ছি যেন সেবা প্রদানকারীরা অতি প্রয়োজনীয়
								বিশ্বাস নিতে পারে, ক্লান্তি দূর করতে পারে এবং নিজেদের প্রতি যত্ন নেওয়ার সুযোগ পায় তথায়
								পুনরায় নুতন উদ্দেশ্যে সেবা প্রদানের শক্তি সঞ্চয় করতে পারে।

							</p>
						</div>
					</div>
				</div>

				<div class="timeline__event animated fadeInUp timeline__event--type2">
					<div class="timeline__event__icon">
						<i>
							<img src="assets/images/logo/krct_logo.png" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title">
							চিকিৎসা কেন্দ্র/ফার্মেসী
						</div>
						<div class="timeline__event__description">
							<p>
								বর্তমানে অত্র এলাকায় কোন ফার্মেসী নেই এবং একটি অতি প্রয়োজনীয় ব্যবস্থা যা আমরা স্থাপন
								করার উদ্দেশ্য রাখি। এবং এখানে গরীব অভাবীদের, স্বল্প মূল্য/মূল্যহ্রাসকৃত ওষুধ সরবরাহ করার
								পরিকল্পনা করচি।
							</p>
							<img src="{{ asset('frontend/assets/images/services/medical_camp/1.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/medical_camp/2.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/medical_camp/3.jpg') }}" class="img-thumbnail" alt="" width="200">
						</div>
					</div>
				</div>

				<div class="timeline__event animated fadeInUp timeline__event--type3">
					<div class="timeline__event__icon">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title">
							স্বল্প মূল্য খাদ্য বিপনী
						</div>
						<div class="timeline__event__description">
							<p>
								এই দোকানে অত্যাবশ্যক খাদ্য সামগ্রী থাকবে অভাবী লোকজনদের জন্য সহজ লোভ্য হয়। এছাড়াও আমরা
								অত্র এলাকার অগ্রনী দরিদ্র মানুষের একটি তালিকা তৈরী করব, যার দ্বারা তারা যাকাত গ্রহনে
								সমর্থ হবে, এবং তাদের আমরা বিনামূল্যে বিভিন্ন সামগ্রী বিতররণ করতে পারব।
							</p>
							<img src="{{ asset('frontend/assets/images/services/food/3.jpg') }}" class="img-thumbnail" alt="" width="200">
						</div>
					</div>
				</div>

				<div class="timeline__event animated fadeInUp timeline__event--type1">
					<div class="timeline__event__icon">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title">
							তফসির অধিবেশন (মাসিক)
						</div>
						<div class="timeline__event__description">
							<p>
								আমরা ইসলামিক জ্ঞান প্রদান ও প্রচারের উদ্দেশ্য পান্ডিত্যপূর্ণ অধিবেশনের ব্যবস্থা করার
								উদ্দেশ্য করছি, যেখানে জ্ঞানীগুনী ব্যক্তি বিভিন্ন ইসলামিক বিষয়ে আলোচনা করবেন।
							</p>
							<img src="{{ asset('frontend/assets/images/services/tafsir/3.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/tafsir/2.jpg') }}" class="img-thumbnail" alt="" width="200">
							<img src="{{ asset('frontend/assets/images/services/tafsir/1.jpg') }}" class="img-thumbnail" alt="" width="200">
						</div>
					</div>
				</div>

				<div class="timeline__event animated fadeInUp timeline__event--type2">
					<div class="timeline__event__icon">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="">
						</i>
					</div>
					<div class="timeline__event__content">
						<div class="timeline__event__title">
							গ্রন্থাগার
						</div>
						<div class="timeline__event__description">
							<p>আমাদের গ্রন্থাগারে জনগনের জন্য ধর্মীয় ও ধর্ম সংক্রান্ত বিষয়াদির গ্রন্থ পাওয়া যাবে।</p>
						</div>
					</div>
				</div>

			</div>
			<!-- <div class="view_more_services">
				<a href="" class="news-block_one-more theme-btn">View More</a>
			</div> -->
		</section>
		<!-- Our Services Timeline End -->
		
        <section class="auto-container gallery_container mtb_100">
			<div class="sec-title centered home_gallery">
				<h2 class="sec-title_heading">Gallery</h2>
			</div>
            <div class="row gallery">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('frontend/assets/images/gallery/students/08.jpeg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('frontend/assets/images/gallery/students/08.jpeg') }}" alt="Student Image"></figure>
                    </a>
                </div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('frontend/assets/images/gallery/students/11.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('frontend/assets/images/gallery/students/11.jpg') }}" alt="Student Image"></figure>
                    </a>
                </div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('frontend/assets/images/gallery/students/13.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('frontend/assets/images/gallery/students/13.jpg') }}" alt="Student Image"></figure>
                    </a>
                </div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('frontend/assets/images/gallery/students/14.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('frontend/assets/images/gallery/students/14.jpg') }}" alt="Student Image"></figure>
                    </a>
                </div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('frontend/assets/images/gallery/students/05.jpeg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('frontend/assets/images/gallery/students/05.jpeg') }}" alt="Student Image"></figure>
                    </a>
                </div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('frontend/assets/images/gallery/students/06.jpeg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('frontend/assets/images/gallery/students/06.jpeg') }}" alt="Student Image"></figure>
                    </a>
                </div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('frontend/assets/images/gallery/students/01.jpeg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('frontend/assets/images/gallery/students/01.jpeg') }}" alt="Student Image"></figure>
                    </a>
                </div>
				<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('frontend/assets/images/gallery/students/03.jpeg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('frontend/assets/images/gallery/students/03.jpeg') }}" alt="Student Image"></figure>
                    </a>
                </div>
            </div>

			
			<div class="view_more_services">
				<a href="{{ route('gallery') }}" class="news-block_one-more theme-btn">View More</a>
			</div>
        </section>

		<!-- News One -->
		<section class="news-one">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="sec-title_title">OUR NEWS UPDATES</div>
					<h2 class="sec-title_heading">Latest News & Articles</h2>
				</div>
				<div class="row clearfix">

					<!-- News Block One -->
					<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner wow fadeInLeft">
							<div class="news-block_one-image">
								<a href="news-detail.html"><img src="{{ asset('frontend/assets/images/background/krct/news-02.jpg') }}"
										alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
									<li><span class="icon fa-solid fa-clock fa-fw"></span>June 07 2024</li>
								</ul>
								<h5 class="news-block_one-heading samir_bangla"><a href="news_details.html">
										বই উৎসব!
									</a></h5>
								<div class="news-block_one-text samir_bangla">
									খুলাফায়ে রাশেদীন চ্যারিটির তত্বাবধানে পরিচালিত হযরত আবু বকর (রাঃ) একাডেমি & ট্রেনিং
									ইনস্টিটিউটে...
									<br><br>
								</div>
								<div
									class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
									<a class="news-block_one-more theme-btn" href="news_details.html">read more</a>
								</div>
							</div>
						</div>
					</div>
					<!-- News Block One -->
					<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner wow fadeInLeft">
							<div class="news-block_one-image">
								<a href="news-detail.html"><img src="{{ asset('frontend/assets/images/background/krct/salman-dua-02.jpg') }}"
										alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
									<li><span class="icon fa-solid fa-clock fa-fw"></span>June 03 2024</li>
								</ul>
								<h5 class="news-block_one-heading samir_bangla"><a href="news_details.html">
										দোয়া মাহফিল
									</a></h5>
								<div class="news-block_one-text samir_bangla">
									হযরত উমর (রা:) এতিমখানার ছাত্র আব্দুল্লাহ আল সালমান ও আব্দুল্লাহ আল মামুন এর
									সম্মানিত পিতার মৃত্যু বার্ষিকী উপলক্ষে দোয়া মাহফিল...
								</div>
								<div
									class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
									<a class="news-block_one-more theme-btn" href="news_details.html">read more</a>
								</div>
							</div>
						</div>
					</div>
					<!-- News Block One -->
					<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner wow fadeInLeft">
							<div class="news-block_one-image">
								<a href="news-detail.html"><img src="{{ asset('frontend/assets/images/background/krct/tour-02.jpg') }}"
										alt="" /></a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
									<li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2023</li>
								</ul>
								<h5 class="news-block_one-heading samir_bangla"><a href="news_details.html">
										শিক্ষা সফর
									</a></h5>
								<div class="news-block_one-text samir_bangla">
									আলহামদুলিল্লাহ।
									সর্বশক্তিমান মহান মাবুদের অপার রহমত ও দয়া দ্বারা অনুপ্রাণিত হয়ে,
									খুলাফায়ে রাশেদীন চ্যারিটির সার্বিক তত্ত্বাবধানে
									শিক্ষা সফর অত্যন্ত সফলভাবে সম্পন্ন হয়েছে...
								</div>
								<div
									class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
									<a class="news-block_one-more theme-btn" href="news_details.html">read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<div class="see_all_news_btn">
					<div style="display: table;margin: 0 auto;">
						<a class="news-block_one-more " href="news_details.html">View All News</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End News One -->

		<section class="theme_light">
			<div class="container py-4 chairperson_title">
				<h1 class="h1 text-center" id="pageHeaderTitle">Become a Volunteer</h1>

				<article class="postcard dark volunteers_clr">
					<a class="postcard__img_link" href="#">
						<img class="postcard__img" src="{{ asset('frontend/assets/images/background/krct/volunteer-img.jpg') }}"
							alt="Image Title" />
					</a>
					<div class="postcard__text">
						<div class="postcard__preview-txt volunteer_fonts">
							<h4>
								Be a part of something meaningful! Our charitable organization welcomes anyone who wants
								to join us in making a difference. Together,
								we can create a positive impact and bring hope to those in need.Whether it's lending
								your skills or your time, every effort counts. Be the reason for someone's smile today!
							</h4>
						</div>
						<ul class="postcard__tagbox">
							<li class="tag__item">
								<a href="{{ route('volunteer_regi') }}"><i class="fa-solid fa-user"></i>&nbsp; Join Us Today
								</a>
							</li>
					</div>
				</article>
			</div>
		</section>

		<!-- Featured One -->
		<section class="featured-one mtb_100 mble_mrbt_50">
			<div class="auto-container">
				<div class="sec-title centered">
					<div class="sec-title_title">Be the Reason Someone Smiles</div>
					<h2 class="sec-title_heading">Your support can transform <br> lives and build a better tomorrow.
					</h2>
				</div>
				<div class="inner-container donation_inner"
					style="background-image:url({{ asset('frontend/assets/images/logo/feature_bg.png') }})">
					<div class="row clearfix">

						<!-- Events Block -->
						<div class="feature-block_one col-lg-3 col-md-6 col-sm-12">
							<div class="feature-block_one-inner">
								<div class="event_image_box donation_banner">
									<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="donation image">
								</div>
								<div class="donate_now_btn">
									<a href="" class="btn btn-success">Donate Now</a>
								</div>
							</div>
						</div>

						<div class="feature-block_one col-lg-9 col-md-6 col-sm-12">
							<div class="feature-block_one-inner">
								<div class="donation_text">
									<h4>"Extend a helping hand! Support our organization in creating a meaningful
										impact. Together, we can make a difference."
									</h4>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Featured One -->


		<!-- Testimonial Two -->
		<section class="testimonial-two" style="background-image:url({{ asset('frontend/assets/images/background/testimonial_bg.png') }})">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="sec-title_title">Testimonials</div>
					<h2 class="sec-title_heading">Trusted By <br>Guardians And Our Students</h2>
				</div>
				<!-- Carousel -->
				<div class="testimonial-two_carousel swiper-container">
					<div class="swiper-wrapper">

						<!-- Slide -->
						<div class="swiper-slide">
							<!-- Testimonial Block Two -->
							<div class="testimonial-block_two">
								<div class="testimonial-block_two-inner">
									<h4 class="testimonial-block_two-heading">Guardians Review</h4>
									<div class="testimonial-block_two-text">
										আমার সন্তান দীর্ঘদিন ধরে সাধারণ শারীরিক সমস্যায় ভুগছিল, কিন্তু অর্থনৈতিক সংকটের
										কারণে ভালো চিকিৎসকের পরামর্শ নেওয়া সম্ভব হচ্ছিল না। তখনই জানতে পারলাম খুলাফায়ে
										রাশেদীন চ্যারিটির উদ্যোগে বিনামূল্যে চিকিৎসা সেবা চলছে।

										আমরা সেখানে গেলে খুব সুন্দরভাবে আমাদের গ্রহণ করা হয়। বিশেষজ্ঞ চিকিৎসকরা ধৈর্য
										ধরে রোগের বিস্তারিত শোনেন এবং প্রয়োজনীয় চিকিৎসা পরামর্শ দেন। ডা: দেলোয়ার হোসেন
										বিকেল ৩টার পর থেকে রোগী দেখা শুরু করেন, এবং তার আন্তরিকতা ও অভিজ্ঞতা আমাদের খুবই
										স্বস্তি দেয়। শুধু পরামর্শই নয়, প্রয়োজনীয় ওষুধও ফ্রি দেওয়া হয়েছে, যা আমাদের জন্য
										অনেক বড় সহায়তা ছিল।
										<br>
										<strong>—-- একজন অভিভাবকের অভিজ্ঞতা</strong>
									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- If we need pagination -->
					<div class="testimonial-two_pagination"></div>

				</div>

			</div>
		</section>
		<!-- End Testimonial Two -->


		<!-- Footer Gallery  -->
		<section class="gallery-two style-two">
			<div class="outer-container">
				<div class="gallery-two_carousel swiper-container">
					<div class="swiper-wrapper">

						<!-- Slide -->
						<div class="swiper-slide">
							<div class="gallery-block_two">
								<div class="gallery-block_two-inner">
									<div class="gallery-block_two-image">
										<img src="{{ asset('frontend/assets/images/background/krct/carousel/01.jpeg') }}" alt="" />
									</div>
								</div>
							</div>
						</div>
						<!-- Slide -->
						<div class="swiper-slide">
							<div class="gallery-block_two">
								<div class="gallery-block_two-inner">
									<div class="gallery-block_two-image">
										<img src="{{ asset('frontend/assets/images/background/krct/carousel/02.jpeg') }}" alt="" />
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<div class="gallery-block_two">
								<div class="gallery-block_two-inner">
									<div class="gallery-block_two-image">
										<img src="{{ asset('frontend/assets/images/background/krct/carousel/03.jpeg') }}" alt="" />
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<div class="gallery-block_two">
								<div class="gallery-block_two-inner">
									<div class="gallery-block_two-image">
										<img src="{{ asset('frontend/assets/images/background/krct/carousel/04.jpeg') }}" alt="" />
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<div class="gallery-block_two">
								<div class="gallery-block_two-inner">
									<div class="gallery-block_two-image">
										<img src="{{ asset('frontend/assets/images/background/krct/carousel/05.jpeg') }}" alt="" />
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<div class="gallery-block_two">
								<div class="gallery-block_two-inner">
									<div class="gallery-block_two-image">
										<img src="{{ asset('frontend/assets/images/background/krct/carousel/06.jpeg') }}" alt="" />
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<div class="gallery-block_two">
								<div class="gallery-block_two-inner">
									<div class="gallery-block_two-image">
										<img src="{{ asset('frontend/assets/images/background/krct/carousel/07.jpeg') }}" alt="" />
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<div class="gallery-block_two">
								<div class="gallery-block_two-inner">
									<div class="gallery-block_two-image">
										<img src="{{ asset('frontend/assets/images/background/krct/carousel/08.jpeg') }}" alt="" />
									</div>
								</div>
							</div>
						</div>

						<!-- Slide -->
						<div class="swiper-slide">
							<div class="gallery-block_two">
								<div class="gallery-block_two-inner">
									<div class="gallery-block_two-image">
										<img src="{{ asset('frontend/assets/images/background/krct/carousel/09.jpeg') }}" alt="" />
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Footer Gallery End -->
@endsection