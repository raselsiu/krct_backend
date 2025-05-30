@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Create Footer Gallery</h5>
        <div class="card-body">
            <form action="{{ route('storeSmallGallery') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="images" class="form-label">Upload Multiple Image to Make a Gallery</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                    @if ($errors->has('images'))
                        <small style="color: red">{{ $errors->first('images') }}</small>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection