@extends('backend.layout.backend_layout')

@section('content')
  <div class="card">
    <h5 class="card-header">Top Header Controller</h5>
    <div class="card-body">
    <form action="{{ route('storeTopHeader') }}" method="post">
      @csrf
      <div class="mb-4">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Enter Official Email Address">
      @if ($errors->has('email'))
      <small style="color: red">{{ $errors->first('email') }}</small>
    @endif
      </div>
      <div class="mb-4">
      <label for="location" class="form-label">Institute Address</label>
      <input type="text" name="location" class="form-control" placeholder="KRCT Location">
      @if ($errors->has('location'))
      <small style="color: red">{{ $errors->first('location') }}</small>
    @endif
      </div>
      <div class="mb-4">
      <label for="office_phone" class="form-label">Official Contact Number</label>
      <input type="text" name="office_phone" class="form-control" placeholder="Enter Official Number">
      @if ($errors->has('office_phone'))
      <small style="color: red">{{ $errors->first('office_phone') }}</small>
    @endif
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
  </div>


      <div class="card">
                <h5 class="card-header">KRCT Website Visitor Contact Lists</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Location</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data as $header)
                    <tr>
                        <td>
                          {{ $header->email }}
                        </td>
                        <td>{{ $header->office_phone }}</td>
                        <td>{{ $header->location }}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="icon-base bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('editTopHeader',$header->id) }}"><i class="icon-base bx bx-edit-alt me-1"></i> Edit</a>
                              <button class="dropdown-item delete-btn"  data-id="{{ $header->id }}"> <i class=" icon-base bx bx-trash me-1"></i> Delete</button>
                              <form id="delete-form-{{ $header->id }}" 
                                    action="{{ route('deleteTopHeader', $header->id) }}" 
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