
@push('css')
  <style>
    .delete-btn{
      cursor: pointer;
    }
  </style>
@endpush


@extends('backend.layout.backend_layout')

@section('content')
    <div class="card">
      <h5 class="card-header">KRCT Website Visitor Contact Lists</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th>Name</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Message</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
              @foreach ($contacts as $contact)
          <tr style="font-weight: {{ $contact->read_status == 0 ? 'bold': 'normal' }}">
              <td>
                {{ $contact->name }}
              </td>
              <td>{{ $contact->phone }}</td>
              <td>{{ $contact->email }}</td>
              <td>{{ Str::limit($contact->message,15) }}</td>
              <td><span class="badge bg-label-{{ $contact->read_status == 0 ? 'warning': 'success' }} me-1">{{ $contact->read_status == 0 ? 'Not Read': 'Read' }}</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="icon-base bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('userSingleContactView',$contact->id) }}"><i class="icon-base bx bx-edit-alt me-1"></i> View</a>
                    <button class="dropdown-item delete-btn"  data-id="{{ $contact->id }}"> <i class=" icon-base bx bx-trash me-1"></i> Delete</button>
                    <form id="delete-form-{{ $contact->id }}" 
                          action="{{ route('userSingleContactDestroy', $contact->id) }}" 
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