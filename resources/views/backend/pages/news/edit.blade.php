@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Update News</h5>
        <div class="card-body">
            <form action="{{ route('updateNewsAndArticles',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $data->title }}" placeholder="Enter Title">
                    @if ($errors->has('title'))
                        <small style="color: red">{{ $errors->first('title') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    @if ($errors->has('image'))
                        <small style="color: red">{{ $errors->first('image') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="desc" class="form-label">Description</label>
                    <textarea name="desc" class="form-control" rows="12" id="editor">{{ $data->desc }}</textarea>
                    @if ($errors->has('desc'))
                        <small style="color: red">{{ $errors->first('desc') }}</small>
                    @endif
                </div>




                <button type="submit" class="btn btn-primary">Update Now</button>
            </form>
        </div>
    </div>

@endsection


@push('js')
@endpush