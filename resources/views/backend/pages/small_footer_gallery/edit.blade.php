@php
    $images = explode(',', $data->images);
@endphp

@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <div class="header_info">
            <h5 class="card-header">Update Small Gallery</h5>
            <a href="{{ route('smallGallery') }}" class="btn btn-sm btn-primary">Footer Gallery</a>
        </div>
        <div class="card-body">
            <form action="{{ route('updateSmallGallery',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
      
                <div class="mb-4">
                    <label for="images" class="form-label">Choose more image</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                    @if ($errors->has('images'))
                        <small style="color: red">{{ $errors->first('images') }}</small>
                    @endif
                </div>


                @foreach($images as $image)
                    <div style="margin: 10px; display:inline-block;">
                        <img src="{{ asset('images/footer_gallery/' . $image) }}" width="100">
                        <br> <br>   
                        <label>
                            <input type="checkbox" name="remove_images[]" value="{{ $image }}">
                            Remove
                        </label>
                    </div>
                @endforeach

<br><br>
                <button type="submit" class="btn btn-primary">Update Now</button>
            </form>
        </div>
    </div>

@endsection