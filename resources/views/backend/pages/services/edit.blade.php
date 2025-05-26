@php
    $images = explode(',', $data->images);
@endphp

@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Update Service</h5>
        <div class="card-body">
            <form action="{{ route('updateService',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $data->title }}" placeholder="Service Title">
                    @if ($errors->has('title'))
                        <small style="color: red">{{ $errors->first('title') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="desc" class="form-label">Discription</label>
                    <textarea type="text" name="desc" rows="10" class="form-control" placeholder="Service Description">{{ $data->desc }}</textarea>
                    @if ($errors->has('desc'))
                        <small style="color: red">{{ $errors->first('desc') }}</small>
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
                        <img src="{{ asset('images/services/' . $image) }}" width="100">
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