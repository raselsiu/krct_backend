@php
use Carbon\Carbon;
$day = Carbon::parse($events->event_date)->format('d');
$month= Carbon::parse($events->event_date)->format('M');
@endphp

@extends('frontend.layout.front_layout')

@section('content')
		<!-- Slider One -->
		<section class="slider-one">
			<div class="main-slider swiper-container">
				<div class="swiper-wrapper">

					@foreach ($data as $slider)
					<div class="swiper-slide">
						<div class="slider-one_image-layer"
							style="background-image:url({{ asset('images/'.$slider->image) }})"></div>
						<div class="auto-container">

							<!-- Content Column -->
							<div class="slider-one_content">
								<div class="slider-one_content-inner">
									<h1 class="slider-one_heading">{{ $slider->slider_text }}</h1>
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
					@endforeach

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
										<h2>{{ $day}}</h2>
										<h3>{{ $month }}</h3>
									</div>
								</div>
							</div>
						</div>

						<!-- Events Block -->
						<div class="feature-block_one col-lg-7 col-md-6 col-sm-5">
							<div class="feature-block_one-inner">
								<div class="event_desc">
									<div class="event_title">
										<h4>Upcoming Event: {{ $events->event_title }}
										</h4>
									</div>
									<div class="event_times">
										<i class="fa-regular fa-clock"></i>&nbsp;<span>{{ $events->event_time }}</span>
									</div>
									<div class="event_locations">
										<i class="fa-solid fa-location-dot"></i>&nbsp;
										<span>
											{{ $events->event_location }}
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
									<img src="{{ asset('images/events/'.$events->image) }}" alt="event_image">
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
								<h2 class="sec-title_heading">{{ $aboutUs->title }}</h2>
								<div class="sec-title_text">
									{{ $aboutUs->description }}
								</div>
							</div>
						</div>
					</div>

					<!-- Image Column -->
					<div class="welcome-one_image-column col-lg-6 col-md-12 col-sm-12">
						<div class="welcome-one_image-outer">
							<div class="welcome-one_image">
								<img src="{{ asset('images/'.$aboutUs->image) }}" alt="Image" />
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
							<h4 class="institute-block_one-heading samir_bangla">{{ $mv->mission_title }}</h4>
							<div class="institute-block_one-text samir_bangla">
								{{ $mv->mission_description }}
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
							<h4 class="institute-block_one-heading samir_bangla">{{ $mv->vission_title }}</h4>
							<div class="institute-block_one-text samir_bangla">
								{{ $mv->vission_description }}
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
						<img class="postcard__img" src="{{ asset('images/'.$chair->image) }}"
							alt="Image Title" />
					</a>
					<div class="postcard__text">
						<h1 class="postcard__title blue"><a href="#">{{ $chair->name }}</a></h1>
						<div class="postcard__subtitle small">
							<span>{{ $chair->designation }}</span>
						</div>
						<div class="postcard__bar"></div>
						<div class="postcard__preview-txt">
							{{ $chair->description }}
						</div>

						<ul class="postcard__tagbox" id="service">
							@if ($chair->fb )
							<li class="tag__item">
								<a href="{{ $chair->fb  }}"><i class="fa-brands fa-facebook-f"></i> Facebook</a>
							</li>
							@endif
							@if ($chair->twit)
							<li class="tag__item">
								<a href="{{ $chair->twit }}"><i class="fa-brands fa-twitter"></i> Facebook</a>
							</li>
							@endif
							@if ($chair->yt )
							<li class="tag__item">
								<a href="{{ $chair->yt }}"><i class="fa-brands fa-youtube"></i> Facebook</a>
							</li>
							@endif


			
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
				@foreach ($services as $serv)					
				<div class="timeline__event  animated fadeInUp delay-1s timeline__event--type1">
					<div class="timeline__event__icon ">
						<i>
							<img src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="Services Images">
						</i>
					</div>
					<div class="timeline__event__content ">
						<div class="timeline__event__title">
							{{ $serv->title }}
						</div>
						<div class="timeline__event__description">
							<p>
								{{ $serv->desc }}
							
							</p>

							@php
								$images = explode(',', $serv->images);
							@endphp

							@foreach ($images as $image)
								<img src="{{ asset('images/services/'.trim($image)) }}" class="img-thumbnail" alt="" width="200">
							@endforeach
						</div>
					</div>
				</div>
				@endforeach

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

				@foreach ($gallery as $img)					
					
						@php
							$images = explode(',', $img->images);
						@endphp
						@foreach ($images as $image)	
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">						
							<a href="{{ asset('images/gallery/'.trim($image)) }}">
								<figure><img class="img-fluid img-thumbnail" src="{{ asset('images/gallery/'.trim($image)) }}" alt="Student Image"></figure>
							</a>
						</div>
						@endforeach
				@endforeach


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

					@foreach ($allNews as $news)
					@php
					$date = Carbon::parse($news->created_at);
					$formattedDate = $date->format('F d Y'); 
					@endphp
					<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
						<div class="news-block_one-inner wow fadeInLeft">
							<div class="news-block_one-image">
								<a href="news-detail.html">
									<img src="{{ asset('images/news/'.$news->image) }}" alt="images" />
								</a>
							</div>
							<div class="news-block_one-content">
								<ul class="news-block_one-meta">
									<li><span class="icon fa-solid fa-clock fa-fw"></span>{{ $formattedDate }}</li>
								</ul>
								<h5 class="news-block_one-heading samir_bangla"><a href="news_details.html">
										{{ $news->title }}
									</a></h5>
								<div class="news-block_one-text samir_bangla">
									{{ Str::limit($news->desc,100) }}
									<br><br>
								</div>
								<div
									class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
									<a class="news-block_one-more theme-btn" href="news_details.html">read more</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach


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
						<img class="postcard__img" src="{{ asset('images/'.@$bcmVolunteer->image) }}"
							alt="Image Title" />
					</a>
					<div class="postcard__text">
						<div class="postcard__preview-txt volunteer_fonts">
							<h4>
								{{ @$bcmVolunteer->desc }}
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
					<h2 class="sec-title_heading" style="width: 70%;margin:0 auto; ">{{ $donation->title }}</h2>
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
									<h4>
										{{ $donation->desc }}
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

						@foreach ($testimonial as $data )
						<div class="swiper-slide">
							<!-- Testimonial Block Two -->
							<div class="testimonial-block_two">
								<div class="testimonial-block_two-inner">
									<h4 class="testimonial-block_two-heading">{{ $data->title }}</h4>
									<div class="testimonial-block_two-text">
										{{ $data->desc }}
										<br>
										<strong>{{ $data->subtitle }}</strong>
									</div>
								</div>
							</div>
						</div>
						@endforeach


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

						@foreach ($smGallery as $gallery)
														@php
								$images = explode(',', $gallery->images);
							@endphp

							@foreach ($images as $img)
								
								<div class="swiper-slide">
									<div class="gallery-block_two">
										<div class="gallery-block_two-inner">
											<div class="gallery-block_two-image">
												<img src="{{ asset('images/footer_gallery/'.$img) }}" alt="footer images" />
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endforeach



					</div>
				</div>
			</div>
		</section>
		<!-- Footer Gallery End -->
@endsection