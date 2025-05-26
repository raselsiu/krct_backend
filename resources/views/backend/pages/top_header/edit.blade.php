@extends('backend.layout.backend_layout')

@section('content')
  <div class="card">
    <h5 class="card-header">Top Header Controller</h5>
    <div class="card-body">
    <form action="{{ route('updateTopHeader',$data->id) }}" method="post">
      @csrf
      <div class="mb-4">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" value="{{ $data->email }}" placeholder="Enter Official Email Address">
      @if ($errors->has('email'))
      <small style="color: red">{{ $errors->first('email') }}</small>
    @endif
      </div>
      <div class="mb-4">
      <label for="location" class="form-label">Institute Address</label>
      <input type="text" name="location" value="{{ $data->location }}" class="form-control" placeholder="KRCT Location">
      @if ($errors->has('location'))
      <small style="color: red">{{ $errors->first('location') }}</small>
    @endif
      </div>
      <div class="mb-4">
      <label for="office_phone" class="form-label">Official Contact Number</label>
      <input type="text" name="office_phone" value="{{ $data->office_phone }}" class="form-control" placeholder="Enter Official Number">
      @if ($errors->has('office_phone'))
      <small style="color: red">{{ $errors->first('office_phone') }}</small>
    @endif
      </div>
      <button type="submit" class="btn btn-primary">Update Now</button>
    </form>
    </div>
  </div>




@endsection


