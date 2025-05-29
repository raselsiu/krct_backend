@extends('backend.layout.backend_layout')

@section('content')


      <div class="card">
                <div class="header_info">
                  <h5 class="card-header">Category</h5>
                  <a href="{{ route('createCategory') }}" class="btn btn-sm btn-primary">Create</a>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Category Name</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($category as $data)
                    <tr>
                       <td>{{ $data->category_name }}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="icon-base bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              
                              <button class="dropdown-item delete-btn"  data-id="{{ $data->id }}"> <i class=" icon-base bx bx-trash me-1"></i> Delete</button>
                              <form id="delete-form-{{ $data->id }}" 
                                    action="{{ route('deleteCategory', $data->id) }}" 
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