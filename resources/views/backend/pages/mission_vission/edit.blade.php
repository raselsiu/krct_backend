@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Update Mission/Vision</h5>
        <div class="card-body">
            <form action="{{ route('updateMissionVission',$data->id) }}" method="post">
                @csrf
                <span class="badge text-bg-dark">Mission</span> <br> <br>
                <div class="mb-4">
                    <label for="mission_title" class="form-label">Mission Title</label>
                    <input type="text" name="mission_title" class="form-control" value="{{ $data->mission_title }}" placeholder="Mission Title">
                    @if ($errors->has('mission_title'))
                        <small style="color: red">{{ $errors->first('mission_title') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="mission_description" class="form-label">Mission Description</label>
                    <textarea name="mission_description" class="form-control" placeholder="Descriptions..">{{ $data->mission_description }}</textarea>
                    @if ($errors->has('mission_description'))
                        <small style="color: red">{{ $errors->first('mission_description') }}</small>
                    @endif
                </div>
                <br>
                <span class="badge text-bg-dark">Vision</span> <br> <br>
                <div class="mb-4">
                    <label for="vission_title" class="form-label">Vision Title</label>
                    <input type="text" name="vission_title" class="form-control" value="{{ $data->vission_title }}" placeholder="Vission Title">
                    @if ($errors->has('vission_title'))
                        <small style="color: red">{{ $errors->first('vission_title') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="vission_description" class="form-label">Vision Description</label>
                    <textarea name="vission_description" class="form-control" id="editor" placeholder="Descriptions...">{{ $data->vission_description }}</textarea>
                    @if ($errors->has('vission_description'))
                        <small style="color: red">{{ $errors->first('vission_description') }}</small>
                    @endif
                </div>




                <button type="submit" class="btn btn-primary">Update Now</button>
            </form>
        </div>
    </div>

@endsection


@push('js')
@endpush