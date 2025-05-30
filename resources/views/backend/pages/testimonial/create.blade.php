@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Create Testimonial</h5>
        <div class="card-body">
            <form action="{{ route('storeTestimonial') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label">Review Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Section Title">
                    @if ($errors->has('title'))
                        <small style="color: red">{{ $errors->first('title') }}</small>
                    @endif
                </div>
                

                <div class="mb-4">
                    <label for="desc" class="form-label">Description</label>
                    <textarea type="text" rows="12" name="desc" class="form-control" placeholder="Write descriptions"></textarea>
                    @if ($errors->has('desc'))
                        <small style="color: red">{{ $errors->first('desc') }}</small>
                    @endif
                </div>


                <div class="mb-4">
                    <label for="subtitle" class="form-label">Review Sub-Title (Under Description)</label>
                    <input type="text" rows="12" name="subtitle" class="form-control" placeholder="Subtitle">
                    @if ($errors->has('subtitle'))
                        <small style="color: red">{{ $errors->first('subtitle') }}</small>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection