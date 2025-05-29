




@extends('frontend.layout.front_layout')

@section('content')
			<!-- Contact form -->






@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif





		 <div class="volunteer_form">
			<div class="container">
                <div class="py-5 text-center">
                  <img class="d-block mx-auto mb-4" src="{{ asset('frontend/assets/images/logo/krct_logo.png') }}" alt="" width="100" height="100">
                  <h2 style="color: black;" class="mb-3">Join Us Today</h2>
                  <p class="lead">Be a part of something meaningful! Our charitable organization welcomes anyone who wants to join us in making a difference. Together, we can create a positive impact and bring hope to those in need.</p>
                </div>
          
                <div class="row">
                  <div class="col-md-12 order-md-1">
                    <form action="{{ route('storeVolunteerRegi') }}" method="post" enctype="multipart/form-data">
						@csrf
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="firstname">First name</label>
                          <input type="text" class="form-control" name="firstname" placeholder="Enter Your First Name">
						        @if ($errors->has('firstname'))
                        			<small style="color: red">{{ $errors->first('firstname') }}</small>
                    			@endif
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="lastname">Last name</label>
                          <input type="text" class="form-control" name="lastname" placeholder="Enter Your Last Name">
						  		@if ($errors->has('lastname'))
                        			<small style="color: red">{{ $errors->first('lastname') }}</small>
                    			@endif
                        </div>
                      </div>
          
                      <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address">
                      </div>
          
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="phone">Phone Number</label>
                          <input type="text" class="form-control" name="phone" placeholder="Your Phone Number">
						  	  	@if ($errors->has('phone'))
                        			<small style="color: red">{{ $errors->first('phone') }}</small>
                    			@endif
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="lastName">Upload an Image ( jpg, jpeg, png )</label>
                          <input type="file" class="form-control" name="image">
						  	  	@if ($errors->has('image'))
                        			<small style="color: red">{{ $errors->first('image') }}</small>
                    			@endif
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="email">Write anything <span class="text-muted">(Optional)</span></label>
                        <textarea type="text" class="form-control" name="desc"></textarea>
                      </div>
          
                      
                      <button class="btn btn-success v_btn" type="submit">Join Us Today</button>
                    </form>
                  </div>
                </div>
              </div>
		 </div>
		<!-- Contact form end -->
@endsection