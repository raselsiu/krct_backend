@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Create Event Notice</h5>
        <div class="card-body">
            <form action="{{ route('storeAboutUs') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Notice Title">
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
                    <textarea name="description" class="form-control" id="editor"></textarea>
                    @if ($errors->has('description'))
                        <small style="color: red">{{ $errors->first('description') }}</small>
                    @endif
                </div>




                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection


@push('js')
@endpush