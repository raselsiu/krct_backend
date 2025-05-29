@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Create Gallery Category</h5>
        <div class="card-body">
            <form action="{{ route('storeCategory') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="category_name" class="form-label">Gallery Category</label>
                    <input type="text" name="category_name" class="form-control" placeholder="Write a category">
                    @if ($errors->has('category_name'))
                        <small style="color: red">{{ $errors->first('category_name') }}</small>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection