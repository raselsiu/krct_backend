@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Update About Us</h5>
        <div class="card-body">
            <form action="{{ route('updateAboutUs',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $data->title }}" placeholder="Notice Title">
                    @if ($errors->has('title'))
                        <small style="color: red">{{ $errors->first('title') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Event Date">
                    @if ($errors->has('image'))
                        <small style="color: red">{{ $errors->first('image') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="editor">{{ $data->description }}</textarea>
                    @if ($errors->has('description'))
                        <small style="color: red">{{ $errors->first('description') }}</small>
                    @endif
                </div>




                <button type="submit" class="btn btn-primary">Update Now</button>
            </form>
        </div>
    </div>

@endsection


@push('js')
@endpush