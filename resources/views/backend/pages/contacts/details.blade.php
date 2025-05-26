@extends('backend.layout.backend_layout')


@section('content')
    <div class="card">
        <h5 class="card-header">KRCT Website Visitor Message </h5>
        <div class="card-body">
            <div class="row">
            <div class="col-lg-12 mb-12 mb-xl-0">
                <div>
                    Message Status: &nbsp;&nbsp; <a href="{{ route('toggleStatus',$users->id) }}" class="btn btn-sm btn-outline-primary">{{ $users->read_status == 0 ? 'Mark as read': 'Mark as Unread' }}</a>
                </div>
                <div class="demo-inline-spacing mt-4">
                <div class="list-group">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Name: {{ $users->name }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Phone Number: {{ $users->phone }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">E-Mail: {{ $users->email }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action active"> Message: <br> <br> {{ $users->message }} <br> <br></a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

