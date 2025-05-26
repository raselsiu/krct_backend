@extends('backend.layout.backend_layout')


@section('content')
    <div class="card">
        <h5 class="card-header">Event Notice Details</h5>
        <a href="{{ route('editEventNotice',$data->id) }}" class="btn btn-sm btn-primary" style="width: 100px;margin-left: 25px;border-radius: 5px;">Edit Notice</a>
        <div class="card-body">
            <div class="row">
            <div class="col-lg-12 mb-12 mb-xl-0">
                <div class="demo-inline-spacing mt-4">
                <div class="list-group">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Title: {{ $data->event_title }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Time: {{ $data->event_time }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Date: {{ $data->event_date }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Location: {{ $data->event_location }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action "> <img src="{{ asset('images/events/'.$data->image) }}" alt="image" width="250"></a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

