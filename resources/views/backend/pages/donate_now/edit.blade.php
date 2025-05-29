@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Update Donate Section</h5>
        <div class="card-body">
            <form action="{{ route('updateDonateNow',$data->id) }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $data->title }}" placeholder="Enter Section Title">
                    @if ($errors->has('title'))
                        <small style="color: red">{{ $errors->first('title') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="desc" class="form-label">Description</label>
                    <textarea type="text" rows="12" name="desc" class="form-control" placeholder="Write section descriptions">{{ $data->desc }}</textarea>
                    @if ($errors->has('desc'))
                        <small style="color: red">{{ $errors->first('desc') }}</small>
                    @endif
                </div>
                  
                <button type="submit" class="btn btn-primary">Update Now</button>
            </form>
        </div>
    </div>

@endsection