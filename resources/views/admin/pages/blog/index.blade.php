@extends('admin.index')


@section('content')
    @include('admin.layouts.page_title', ['pageTitle'=>'News & Event'])
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-wid-bg-sm"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-50 py-4 px-3">
                <div class="row">
                    <div class="col-lg-12" id="table__gridjs--container">
                        <a class="btn btn-primary table__gridjs--create" href="{{route('blogs.form')}}">
                            <i class="ri-add-fill me-1 align-bottom"></i> Create New
                        </a>
                        <div id="table-gridjs"></div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-template')
    <script src="{{asset('backend-assets/libs/gridjs/gridjs.umd.js')}}"></script>
    <script src="{{asset('backend-assets/js/pages/blog.init.js')}}"></script>
@endsection