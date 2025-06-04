@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Become Volunteer Description</h5>
        <div class="card-body">
            <form action="{{ route('updateBecomeVolunteer',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="desc" class="form-label">Description</label>
                    <textarea type="text" name="desc" rows="12" class="form-control" placeholder="Write Short Descriptions">{{ $data->desc }}</textarea>
                    @if ($errors->has('desc'))
                        <small style="color: red">{{ $errors->first('desc') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" rows="12" class="form-control">
                    @if ($errors->has('image'))
                        <small style="color: red">{{ $errors->first('image') }}</small>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update Now</button>
            </form>
        </div>
    </div>

@endsection