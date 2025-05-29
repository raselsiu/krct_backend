@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Create News</h5>
        <div class="card-body">
            <form action="{{ route('storeNewsAndArticles') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                    @if ($errors->has('title'))
                        <small style="color: red">{{ $errors->first('title') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="desc" class="form-label">Description</label>
                    <textarea name="desc" class="form-control" id="editor" placeholder="Write something!"></textarea>
                    @if ($errors->has('desc'))
                        <small style="color: red">{{ $errors->first('desc') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                    @if ($errors->has('image'))
                        <small style="color: red">{{ $errors->first('image') }}</small>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection


@push('js')
@endpush