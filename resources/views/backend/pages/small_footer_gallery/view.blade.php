@php
$images = explode(',', $data->images);
@endphp

@extends('backend.layout.backend_layout')


@section('content')
    <div class="card">
        <h5 class="card-header">Service Details</h5>
        <a href="{{ route('editSmallGallery',$data->id) }}" class="btn btn-sm btn-primary" style="width: 60px;margin-left: 25px;border-radius: 5px;">Edit</a>
        <div class="card-body">
            <div class="row">
            <div class="col-lg-12 mb-12 mb-xl-0">
                <div class="demo-inline-spacing mt-4">
                <div class="list-group">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action active">Title: {{ $data->title }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">Description: {{ $data->desc }}</a>
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action ">

                    <div class="image-gallery">
                        @foreach($images as $img)
                            <div class="image-item" style="margin: 10px; display:inline-block;">
                                <img src="{{ asset('images/footer_gallery/'. $img) }}" alt="Image" width="150" style="border: 1px solid #ccc; padding: 5px;">
                            </div>
                        @endforeach
                    </div>

                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

