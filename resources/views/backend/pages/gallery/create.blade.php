@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
        <h5 class="card-header">Create Service</h5>
        <div class="card-body">
            <form action="{{ route('storeGallery') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label hidden for="title" class="form-label">Title</label>
                    <input type="hidden" type="text" name="title" class="form-control" placeholder="Enter Image Title">
                    @if ($errors->has('title'))
                        <small style="color: red">{{ $errors->first('title') }}</small>
                    @endif
                </div>


                    <div class="mb-4">
                        <label for="category" class="form-label">Select Category</label>
                        <select id="category" name="category" class="form-select form-select-sm">
                          <option>Select One</option>
                          @foreach ($categories as $category)
                          <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                          @endforeach
                        </select>
                            @if ($errors->has('category'))
                                <small style="color: red">{{ $errors->first('category') }}</small>
                            @endif
                      </div>
       

                <div class="mb-4">
                    <label for="images" class="form-label">Select Photo(Single or Multiple)</label>
                    <input type="file" name="images[]" class="form-control" multiple required>
                    @if ($errors->has('images'))
                        <small style="color: red">{{ $errors->first('images') }}</small>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection