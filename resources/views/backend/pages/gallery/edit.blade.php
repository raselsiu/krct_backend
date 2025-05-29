@php
    $images = explode(',', $data->images);
@endphp

@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Update Service</h5>
        <div class="card-body">
            <form action="{{ route('updateGallery',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $data->title }}" placeholder="Image Title">
                    @if ($errors->has('title'))
                        <small style="color: red">{{ $errors->first('title') }}</small>
                    @endif
                </div>

                <div>
                    <label for="category" class="form-label">Category</label>
                    <select id="category" name="category" class="form-select form-select-sm">
                        <option>Select One</option>
                        <option value="1" {{ $data->category == 1 ? 'selected':'' }} >One</option>
                        <option value="2" {{ $data->category == 2 ? 'selected':'' }} >Two</option>
                        <option value="3" {{ $data->category == 3 ? 'selected':'' }}>Three</option>
                    </select>
                        @if ($errors->has('category'))
                            <small style="color: red">{{ $errors->first('category') }}</small>
                        @endif
                </div>
       

                <div class="mb-4">
                    <label for="images" class="form-label">Choose more image</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                    @if ($errors->has('images'))
                        <small style="color: red">{{ $errors->first('images') }}</small>
                    @endif
                </div>


                @foreach($images as $image)
                    <div style="margin: 10px; display:inline-block;">
                        <img src="{{ asset('images/gallery/' . $image) }}" width="100">
                        <br>
                        <label>
                            <input type="checkbox" name="remove_images[]" value="{{ $image }}">
                            Remove
                        </label>
                    </div>
                @endforeach


                <button type="submit" class="btn btn-primary">Update Now</button>
            </form>
        </div>
    </div>

@endsection