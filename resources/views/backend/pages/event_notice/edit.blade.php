@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Update Event Notice</h5>
        <div class="card-body">
            <form action="{{ route('updateEventNotice',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="event_title" class="form-label">Event Title</label>
                    <input type="text" name="event_title" class="form-control" value="{{ $data->event_title }}" placeholder="Notice Title">
                    @if ($errors->has('event_title'))
                        <small style="color: red">{{ $errors->first('event_title') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="event_time" class="form-label">Event Time</label>
                    <input type="text" name="event_time" class="form-control" value="{{ $data->event_time }}" placeholder="Ex 3:00 PM">
                    @if ($errors->has('event_time'))
                        <small style="color: red">{{ $errors->first('event_time') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="event_location" class="form-label">Event Location</label>
                    <input type="text" name="event_location" class="form-control" value="{{ $data->event_location }}" placeholder="Enter Event Location...">
                    @if ($errors->has('event_location'))
                        <small style="color: red">{{ $errors->first('event_location') }}</small>
                    @endif
                </div>


                <div class="mb-4">
                    <label for="event_date" class="form-label">Event Date</label>
                    <input type="date" name="event_date" class="form-control" value="{{ $data->event_date }}" placeholder="Event Date">
                    @if ($errors->has('event_date'))
                        <small style="color: red">{{ $errors->first('event_date') }}</small>
                    @endif
                </div>

              
                  <div class="mb-4">
                    <label for="image" class="form-label">Event Image</label>
                    <input type="file" name="image" class="form-control"  placeholder="Event Date">
                    @if ($errors->has('image'))
                        <small style="color: red">{{ $errors->first('image') }}</small>
                    @endif
                    
                </div>
                  
                <button type="submit" class="btn btn-primary">Update Now</button>
            </form>
        </div>
    </div>

@endsection