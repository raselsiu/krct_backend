@extends('backend.layout.backend_layout')


@section('content')
    <div class="card">
        <h5 class="card-header">Volunteer - Details</h5>
        <div class="card-body">
            <div class="row">
            <div class="col-lg-12 mb-12 mb-xl-0">
                <div>
                    Volunteer Status: &nbsp;&nbsp; <a href="{{ route('toggleStatusVolunteerSingle',$volunteer->id) }}" class="btn btn-sm btn-outline-primary">{{ $volunteer->status == 0 ? 'Accept Request': 'Mark as Pending' }}</a>
                </div>
                <div class="demo-inline-spacing mt-4">
                <div class="list-group">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Name: {{ $volunteer->firstname }} {{ $volunteer->lastname }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Email: {{ $volunteer->email }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Phone: {{ $volunteer->phone }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Description: {{ $volunteer->desc }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Status:  
                        <span class="badge text-bg-{{ $volunteer->status == 0 ? 'warning': 'primary'}}">{{ $volunteer->status == 0 ? 'Pending': 'Approved'}}</span>
                        </a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">
                        <img src="{{ asset('images/volunteers/'.$volunteer->image) }}" alt="volunteer" width="100">
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

