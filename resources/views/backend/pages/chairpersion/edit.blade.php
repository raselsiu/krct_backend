@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Update Chairperson Info</h5>
        <div class="card-body">
            <form action="{{ route('updateChairPerson',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $data->name }}" placeholder="Enter Chairperson Name">
                    @if ($errors->has('name'))
                        <small style="color: red">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{ $data->designation }}" placeholder="Write Designation">
                    @if ($errors->has('designation'))
                        <small style="color: red">{{ $errors->first('designation') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label">Upload a Profile Photo Here</label>
                    <input type="file" name="image" class="form-control">
                    @if ($errors->has('image'))
                        <small style="color: red">{{ $errors->first('image') }}</small>
                    @endif
                </div>



                <span class="badge text-bg-dark">Social Links</span>

                <div class="mb-4">
                    <label for="fb" class="form-label">Facebook</label>
                    <input type="text" name="fb" class="form-control" value="{{ $data->fb }}" placeholder="facebook.com/ID_NO">
                    @if ($errors->has('fb'))
                        <small style="color: red">{{ $errors->first('fb') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="twit" class="form-label">X ID (previously known as a Twitter ID)</label>
                    <input type="text" name="twit" class="form-control" value="{{ $data->twit }}" placeholder="x.com/34234234">
                    @if ($errors->has('twit'))
                        <small style="color: red">{{ $errors->first('twit') }}</small>
                    @endif
                </div>

                 <div class="mb-4">
                    <label for="yt" class="form-label">Youtube</label>
                    <input type="text" name="yt" class="form-control" value="{{ $data->yt }}" placeholder="youtube.com/channel_name">
                    @if ($errors->has('yt'))
                        <small style="color: red">{{ $errors->first('yt') }}</small>
                    @endif
                </div>


                <span class="badge text-bg-dark">Description</span>

                <div class="mb-4">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" id="editor" placeholder="Write description...">{{ $data->description }}</textarea>
                    @if ($errors->has('description'))
                        <small style="color: red">{{ $errors->first('description') }}</small>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection