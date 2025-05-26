@extends('backend.layout.backend_layout')

@section('content')
  <div class="card">
    <h5 class="card-header">Slider</h5>
    <div class="card-body">
    <form action="{{ route('storeSlider') }}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="mb-4">
      <label for="image" class="form-label">Pick a Slider Image</label>
      <input type="file" name="image" class="form-control">
      @if ($errors->has('image'))
        <small style="color: red">{{ $errors->first('image') }}</small>
      @endif
      </div>


      <div class="mb-4">
      <label for="slider_text" class="form-label">Slider Text</label>
      <input type="text" name="slider_text" class="form-control" placeholder="Write Slider Text">
      @if ($errors->has('slider_text'))
        <small style="color: red">{{ $errors->first('slider_text') }}</small>
      @endif
      </div>


      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
  </div>

  <br> <br>

      <div class="card">
                <h5 class="card-header">Slider Lists</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Image</th>
                        <th>Slider Text</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($slider as $slide)
                    <tr>
                        <td>
                          <img src="{{ asset('images/'.$slide->image) }}" alt="image" width="50">
                        </td>
                        <td>{{ $slide->slider_text }}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="icon-base bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <button class="dropdown-item delete-btn"  data-id="{{ $slide->id }}"> <i class=" icon-base bx bx-trash me-1"></i> Delete</button>
                              <form id="delete-form-{{ $slide->id }}" 
                                    action="{{ route('deleteSlider', $slide->id) }}" 
                                    method="POST" style="display: none;">
                                  @csrf
                                  @method('DELETE')
                              </form>
                            </div>
                          </div>
                        </td>
                      </tr>
                        @endforeach

                    </tbody>
                  </table>
                </div>
              </div>


@endsection


@push('js')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const postId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "This action cannot be undone.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Submit the hidden form
                        document.getElementById(`delete-form-${postId}`).submit();
                    }
                });
            });
        });
    });
</script>

@endpush