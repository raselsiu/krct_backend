@extends('backend.layout.backend_layout')


@section('content')
    <div class="card">
        <h5 class="card-header">Staff - Details</h5>
        <a href="{{ route('editStaff',$data->id) }}" class="btn btn-sm btn-primary" style="width: 70px;margin-left: 25px;border-radius: 5px;">Edit</a>
        <div class="card-body">
            <div class="row">
            <div class="col-lg-12 mb-12 mb-xl-0">
                <div class="demo-inline-spacing mt-4">
                <div class="list-group">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Name: {{ $data->name }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Designation: {{ $data->designation }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action active">Your Social Links</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Facebook:  ➠ {{ $data->fb }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">X.COM (Twitter):  ➠ {{ $data->twitter }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Instagram: ➠ {{ $data->insta }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Youtube: ➠ {{ $data->yt }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action "> <img src="{{ asset('images/staff/'.$data->image) }}" alt="image" width="250"></a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

