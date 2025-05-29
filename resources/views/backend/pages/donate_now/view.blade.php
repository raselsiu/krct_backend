@extends('backend.layout.backend_layout')


@section('content')
    <div class="card">
        <h5 class="card-header">Volunteer Section</h5>
        <a href="{{ route('editDonateNow',$data->id) }}" class="btn btn-sm btn-primary" style="width: 70px;margin-left: 25px;border-radius: 5px;">Edit</a>
        <div class="card-body">
            <div class="row">
            <div class="col-lg-12 mb-12 mb-xl-0">
                <div class="demo-inline-spacing mt-4">
                <div class="list-group">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Title: {{ $data->title }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Description: {{ $data->desc }}</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

