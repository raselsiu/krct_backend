@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Update Staff Profile</h5>
        <div class="card-body">
            <form action="{{ route('updateStaff',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Upolad your images">
                    @if ($errors->has('image'))
                        <small style="color: red">{{ $errors->first('image') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $data->name }}" placeholder="Enter your name">
                    @if ($errors->has('name'))
                        <small style="color: red">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{ $data->designation }}" placeholder="Ex 3:00 PM">
                    @if ($errors->has('designation'))
                        <small style="color: red">{{ $errors->first('designation') }}</small>
                    @endif
                </div>


                <br>

                <div class="list-group">
                    <a href="javascript:void(0);" class="disabled list-group-item list-group-item-action active">Social Links</a>
                </div>

                <br>

                <div class="mb-4">
                    <label for="fb" class="form-label">Facebook</label>
                    <input type="text" name="fb" class="form-control" value="{{ $data->fb }}" placeholder="Your Facebook Link">
                    @if ($errors->has('fb'))
                        <small style="color: red">{{ $errors->first('fb') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="twitter" class="form-label">X.COM (former Twitter)</label>
                    <input type="text" name="twitter" class="form-control" value="{{ $data->twitter }}" placeholder="Your X (Twitter) Link">
                    @if ($errors->has('twitter'))
                        <small style="color: red">{{ $errors->first('twitter') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="insta" class="form-label">Instagram</label>
                    <input type="text" name="insta" class="form-control" value="{{ $data->insta }}" placeholder="Your Instagram Link">
                    @if ($errors->has('insta'))
                        <small style="color: red">{{ $errors->first('insta') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="yt" class="form-label">Youtube</label>
                    <input type="text" name="yt" class="form-control" value="{{ $data->yt }}" placeholder="Youtube Link">
                    @if ($errors->has('yt'))
                        <small style="color: red">{{ $errors->first('yt') }}</small>
                    @endif
                </div>
                  
                <button type="submit" class="btn btn-primary">Update Now</button>
            </form>
        </div>
    </div>

@endsection