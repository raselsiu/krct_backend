@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Create Event Notice</h5>
        <div class="card-body">
            <form action="{{ route('storeMissionVission') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="mission_title" class="form-label">Mission Title</label>
                    <input type="text" name="mission_title" class="form-control" placeholder="Mission Title">
                    @if ($errors->has('mission_title'))
                        <small style="color: red">{{ $errors->first('mission_title') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="mission_description" class="form-label">Mission Description</label>
                    <textarea name="mission_description" class="form-control" id="editor" placeholder="Descriptions.."></textarea>
                    @if ($errors->has('mission_description'))
                        <small style="color: red">{{ $errors->first('mission_description') }}</small>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="vission_title" class="form-label">Vission Title</label>
                    <input type="text" name="vission_title" class="form-control" placeholder="Vission Title">
                    @if ($errors->has('vission_title'))
                        <small style="color: red">{{ $errors->first('vission_title') }}</small>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="vission_description" class="form-label">Vission Description</label>
                    <textarea name="vission_description" class="form-control" id="editor" placeholder="Descriptions..."></textarea>
                    @if ($errors->has('vission_description'))
                        <small style="color: red">{{ $errors->first('vission_description') }}</small>
                    @endif
                </div>




                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection


@push('js')
@endpush