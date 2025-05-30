@extends('frontend.layout.front_layout')


@section('content')
			<!-- Page Title -->
		<section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
			<div class="auto-container">
				<h2 class="samir_bangla" style="font-size: 50px;">মানবতার সেবায় বিনামূল্যে চিকিৎসা সেবা</h2>
				<ul class="bread-crumb clearfix">
					<li>Khulafaye Rashedin Charitable Trust</li>
				</ul>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- Events Detail -->
		<section class="event-detail medical_corner samir_bangla">
			<div class="auto-container">
			
				<div class="row clearfix">
					<div class="column col-lg-8 col-md-12 col-sm-12">
						
						<h4 class="event-detail_subtitle samir_bangla bn_line_height"><a>খোলাফায়ে রাশেদিন চ্যারিটেবল ট্রাস্ট <br>বিনামূল্যে মেডিকেল ক্যাম্প - মানবতার সেবায় এক ধাপ এগিয়ে! 💙</a></h4>
						<div class="d-flex align-items-center flex-wrap">

							<div class="d-flex align-items-center flex-wrap">
								<a class="theme-btn ticket-btn" href="{{ route('onlineSerialIndex') }}">অনলাইনে সিরিয়াল কাটুন</a>
							</div>

						</div>

                            <p>
                                খোলাফায়ে রাশেদিন চ্যারিটেবল ট্রাস্টের উদ্যোগে দরিদ্র ও সুবিধাবঞ্চিত মানুষের জন্য <b>বিনামূল্যে মেডিকেল ক্যাম্প</b> আয়োজন করা হয়।
                                আমাদের লক্ষ্য হলো গ্রামাঞ্চলের অসহায় মানুষ, শিশু ও দাতব্য ছাত্রদের উন্নত চিকিৎসা সেবা প্রদান করা, যেন তারা প্রয়োজনীয় চিকিৎসা ও ওষুধ পেতে পারে।
                            </p>
                            <h4>বার্ষিক বিশেষ মেডিকেল ক্যাম্প:</h4>
                            <p>প্রতি বছর <b>একবার</b> এই ক্যাম্প আয়োজন করা হয়, যেখানে রোগীদের <b>সম্পূর্ণ বিনামূল্যে প্রয়োজনীয় ওষুধ ও চিকিৎসা প্রদান</b> করা হয়।</p>
                            
                            <h4>নিয়মিত মাসিক মেডিকেল ক্যাম্প:</h4>
                            <p>
                                📅 <b>প্রতি মাসে দুইবার</b>, <b>প্রথম ও শেষ সপ্তাহের শুক্রবার</b> আমাদের অভিজ্ঞ চিকিৎসক ও স্বেচ্ছাসেবীরা বিনামূল্যে স্বাস্থ্যসেবা দিয়ে থাকেন।
                            </p>
                            
                            <h4>👨‍⚕️সেবার মধ্যে অন্তর্ভুক্ত:</h4>
                            <br>
                            <ul>
                                <li>✅ বিনামূল্যে ডাক্তারের পরামর্শ</li>
                                <li>✅ প্রয়োজনীয় ওষুধ সরবরাহ</li>
                                <li>✅ রক্তচাপ, ডায়াবেটিস ও অন্যান্য স্বাস্থ্য পরীক্ষার সুবিধা</li>
                                <li>✅ শিশু ও দাতব্য ছাত্রদের জন্য বিশেষ চিকিৎসা সহায়তা</li>
                            </ul>
                            <br>
                            
                            <h4>💖আমাদের লক্ষ্য:</h4>
                            <p>
                                আমরা বিশ্বাস করি, সুস্বাস্থ্য সকলের অধিকার। তাই সমাজের অবহেলিত জনগোষ্ঠীর জন্য আমরা বিনামূল্যে চিকিৎসা সেবার মাধ্যমে মানবতার কল্যাণে কাজ করে যাচ্ছি।
                                আমাদের পাশে থাকুন, আমাদের উদ্যোগকে সমর্থন করুন এবং অসহায়দের মুখে হাসি ফোটাতে সাহায্য করুন।
                            </p>
                            
                            <div class="contact">
                                <h4>📢 যোগাযোগ করুন ও আমাদের সেবার অংশ হোন!</h4> <br>
                                <p><b>📍 ঠিকানা: খোলাফায়ে রাশেদিন চ্যারিটেবল ট্রাস্ট,সুলতানপুর, মানিককুণা, ফেঞ্চুগঞ্জ, সিলেট</b> </p>
                                <p><b>📞 যোগাযোগ নম্বর:</b> <a href="tel:+8801302137848">+8801302137848</a> </p>
                                <p><b>🌐 ফেসবুক:</b> <a href="https://www.facebook.com/profile.php?id=61551941816897">Facebook</a></p>
                            </div>
                            
                            <h4 style="text-align:center;">🤲 আসুন, একসাথে মানবতার সেবায় এগিয়ে যাই! 💙</h4>




                       




						<h4 class="event-detail_subtitle">প্রায়শই জিজ্ঞাসিত প্রশ্ন (FAQ)</h4>
						<!-- Accordian -->
						<div class="event-detail_accordian">
							<!-- Accordion Box -->
							<ul class="accordion-box_two">

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn active">
										<div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
												class="icon icon-minus fa fa-minus"></span></div>মেডিকেল ক্যাম্প কাদের জন্য আয়োজন করা হয়?
									</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">👉 এই ক্যাম্প দরিদ্র ও সুবিধাবঞ্চিত মানুষের জন্য আয়োজন করা হয়, বিশেষত গ্রামাঞ্চলের অসহায় মানুষ, শিশু ও দাতব্য ছাত্রদের জন্য।</div>
										</div>
									</div>
								</li>

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
												class="icon icon-minus fa fa-minus"></span></div>মেডিকেল ক্যাম্পে কী ধরনের সেবা দেওয়া হয়?
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">
                                                👉 আমাদের ক্যাম্পে বিনামূল্যে নিম্নলিখিত সেবাগুলো দেওয়া হয়: <br>
                                                ✅ বিনামূল্যে ডাক্তারের পরামর্শ <br>
                                                ✅ প্রয়োজনীয় ওষুধ সরবরাহ <br>
                                                ✅ রক্তচাপ, ডায়াবেটিস ও অন্যান্য স্বাস্থ্য পরীক্ষা <br>
                                                ✅ শিশু ও দাতব্য ছাত্রদের জন্য বিশেষ চিকিৎসা সহায়তা <br>
                                            </div>
										</div>
									</div>
								</li>

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
												class="icon icon-minus fa fa-minus"></span></div>কতবার মেডিকেল ক্যাম্প আয়োজন করা হয়?
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">
                                                👉 আমরা প্রতি বছর একবার বিশেষ মেডিকেল ক্যাম্প আয়োজন করি এবং প্রতি মাসে দুইবার নিয়মিত মাসিক মেডিকেল ক্যাম্প পরিচালনা করি (প্রথম ও শেষ সপ্তাহের শুক্রবার)।
                                            </div>
										</div>
									</div>
								</li>

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
												class="icon icon-minus fa fa-minus"></span></div>ক্যাম্পে অংশ নিতে কোনো ফি দিতে হয় কি?
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">
                                                👉 না, আমাদের মেডিকেল ক্যাম্প সম্পূর্ণ বিনামূল্যে পরিচালিত হয়।
                                            </div>
										</div>
									</div>
								</li>

								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
												class="icon icon-minus fa fa-minus"></span></div>খোলাফায়ে রাশেদিন চ্যারিটেবল ট্রাস্টের সাথে কিভাবে যোগাযোগ করা যেতে পারে?
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">
                                                👉 খোলাফায়ে রাশেদিন চ্যারিটেবল ট্রাস্টের সাথে নিম্নলিখিত উপায়ে যোগাযোগ করা যেতে পারে: <br> <br>
                                                ঠিকানা: খোলাফায়ে রাশেদিন চ্যারিটেবল ট্রাস্ট, সুলতানপুর, মানিককুণা, ফেঞ্চুগঞ্জ, সিলেট <br>
                                                ফোন নম্বর: +8801302137848 <br>
                                                ফেসবুক: <a href="https://www.facebook.com/profile.php?id=61551941816897">Facebook</a> 
                                            </div>
										</div>
									</div>
								</li>
								<!-- Block -->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
												class="icon icon-minus fa fa-minus"></span></div>আমি কিভাবে এই চ্যারিটেবল ট্রাস্টকে সাহায্য করতে পারি?
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">
                                                আপনি এই চ্যারিটেবল ট্রাস্টের উদ্যোগকে সমর্থন করে এবং তাদের সাথে যোগাযোগ করে সেবামূলক কাজে অংশ নিয়ে সাহায্য করতে পারেন। এছাড়া, আর্থিক সাহায্যও করতে পারেন।
                                            </div>
										</div>
									</div>
								</li>


							</ul>
						</div>

						<!-- Speakers -->
						<div class="event-detail_speakers">
							<h4 class="event-detail_subtitle">Our Organizer</h4>
							<div class="row clearfix">
								<div class="speaker-block_one col-lg-4 col-md-4 col-sm-6">
									<div class="speaker-block_one-inner">
										<div class="speaker-block_one-image">
											<img src="{{ asset('frontend/assets/images/background/krct/trust_members/chairman-2.png') }}" alt="" />
										</div>
										<div class="speaker-block_one-content">
											<!-- Social Box -->
											<div class="speaker-block_one-socials">
												<a href="https://facebook.com/"><i
														class="fa-brands fa-facebook-f"></i></a>
												<a href="https://instagram.com/"><i
														class="fa-brands fa-instagram"></i></a>
												<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
											</div>
											<h6 class="speaker-block_one-heading"><a
													href="scholar-detail.html">Latif Ahmed (Mojnu)</a></h6>
											<div class="speaker-block_one-title">MBA, Founding Chairman</div>
										</div>
									</div>
								</div>
                                <div class="speaker-block_one col-lg-4 col-md-4 col-sm-6">
									<div class="speaker-block_one-inner">
										<div class="speaker-block_one-image">
											<img src="{{ asset('frontend/assets/images/background/krct/trust_members/kawser-02.png') }}" alt="" />
										</div>
										<div class="speaker-block_one-content">
											<!-- Social Box -->
											<div class="speaker-block_one-socials">
												<a href="https://facebook.com/"><i
														class="fa-brands fa-facebook-f"></i></a>
												<a href="https://instagram.com/"><i
														class="fa-brands fa-instagram"></i></a>
												<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
											</div>
											<h6 class="speaker-block_one-heading"><a
													href="scholar-detail.html">Engg. Azhar Uddin Kawser</a></h6>
											<div class="speaker-block_one-title">Managing Director</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="column col-lg-4 col-md-12 col-sm-12">

						<div class="organiser-widget">
							<h4 class="organiser-title centered" >About The organiser</h4>
							<ul class="organiser-info_list">
								<li style="font-size: 16px; text-align: center;">Latif Ahmed (Mojnu)</li>
								<li style="font-size: 16px; text-align: center;">MBA, Founding Chairman</li>
							</ul>
							<div class="image">
								<img src="{{ asset('frontend/assets/images/background/krct/trust_members/chairman.png') }}" alt="" />
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Events One -->


        <section class="auto-container gallery_container" style="margin-bottom: 150px;">
			<div class="sec-title centered home_gallery">
				<h2 class="sec-title_heading">Medical Camp Gallery</h2>
			</div>
            <div class="row gallery">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="assets/images/gallery/medical_camp/1.jpg">
                        <figure><img class="img-fluid img-thumbnail" src="assets/images/gallery/medical_camp/1.jpg" alt="Student Image"></figure>
                    </a>
                </div>
            </div>

			
			<!-- <div class="view_more_services">
				<a href="#" class="news-block_one-more theme-btn">View More Related Images</a>
			</div> -->
        </section>


@endsection