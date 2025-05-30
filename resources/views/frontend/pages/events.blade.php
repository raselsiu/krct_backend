@extends('frontend.layout.front_layout')

@section('content')
			<!-- Events One -->
		<section class="events-one">
			<div class="auto-container">
				<div class="row clearfix">

					<div class="event-block_one col-lg-3 col-md-3 col-sm-12">
						<div class="event-block_one-inner">
							<div class="event-block_one-image">
								<a href="event_details.html"><img src="{{ asset('frontend/assets/images/background/krct/medical service.jpg') }}" alt="" /></a>
							</div>
							<div class="event-block_one-content">
								<div class="event-block_one-time">3:30 pm - 5:30 pm</div>
								<div class="event-block_one-location"><i class="fa-solid fa-location-dot fa-fw"></i>Sultanpur, Manik Kuna Fenchuganj, Sylhet</div>
								<h5 class="event-block_one-heading samir_bangla"><a href="event_details.html">খুলাফায়ে রাশেদীন চ্যারিটির উদ্যোগে বিনামূল্যে চিকিৎসা সেবা চলছে

								</a></h5>
							</div>
						</div>
					</div>	

				</div>

				<!-- Styled Pagination -->
				<!-- <ul class="styled-pagination text-center">
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="next"><a href="#">next</a></li>
				</ul> -->

				<!-- End Styled Pagination -->

			</div>
		</section>
		<!-- End Events One -->
@endsection