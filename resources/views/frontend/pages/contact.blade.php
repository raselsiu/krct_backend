@extends('frontend.layout.front_layout')


@section('content')
		<!-- Contact Info -->
		<section class="contact-info">
			<div class="auto-container">
				<div class="inner-container">
					<div class="row clearfix">
						<!-- Info Column -->
						<div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
							<div class="contact-info_outer">
								<div class="contact-info_icon fa-solid fa-location-dot fa-fw"></div>
								<h4 class="contact-info_heading">Our Address</h4>
								<div class="contact-info_text">Sultanpur, Manik Kuna <br> Fenchuganj, Sylhet</div>
							</div>
						</div>

						<!-- Info Column -->
						<div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
							<div class="contact-info_outer">
								<div class="contact-info_icon fa-solid fa-phone fa-fw"></div>
								<h4 class="contact-info_heading">Our Phone</h4>
								<div class="contact-info_text"> 
									+8801302-137848 </div>
							</div>
						</div>

						<!-- Info Column -->
						<div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
							<div class="contact-info_outer">
								<div class="contact-info_icon fa-solid fa-envelope fa-fw"></div>
								<h4 class="contact-info_heading">Email address</h4>
								<div class="contact-info_text">krctbd.org@gmail.com</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Info -->




		<!-- Contact form -->
		 <div class="form_container">
			<div class="form_container_inner">
				<h4>Feel free to write anytime</h4>
				<div class="row">
					<div class="col-md-12">
						<div class="contact_wrapper">
							<form action="{{ route('submitUserData') }}" method="post">
								@csrf
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Your Name" name="name" value="{{ old('name') }}">
									@if ($errors->has('name'))
										<small style="color: red">{{ $errors->first('name') }}</small>
									@endif
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone Number" name="phone" value="{{ old('phone') }}"	>
									@if ($errors->has('phone'))
										<small style="color: red">{{ $errors->first('phone') }}</small>
									@endif
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}"	>
									@if ($errors->has('email'))
										<small style="color: red">{{ $errors->first('email') }}</small>
									@endif
								</div>
								<div class="form-group">
									<textarea cols="30" rows="5" class="form-control" name="message" id="message" placeholder="Write Your Message">{{ old('message') }}</textarea>
									@if ($errors->has('message'))
										<small style="color: red">{{ $errors->first('message') }}</small>
									@endif
								</div>
								<button type="submit" class="btn btn-success contact_btn">Send Message</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		 </div>
		<!-- Contact form end -->

		<!-- Map One -->
		<section class="map-one">
			<div class="map-outer">
				<iframe  class="map w-100"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Fenchuganj+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
			</div>
		</section>
		<!-- End Map One -->


		
@endsection