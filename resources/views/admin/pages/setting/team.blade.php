@extends('admin.pages.setting.index')

@section('setting')
<div class="row">
    <div class="col-lg-12" id="table__gridjs--container">
        <a class="btn btn-success table__gridjs--create" href="{{route('setting.create')}}">
            <i class="ri-add-fill me-1 align-bottom"></i> Add Members
        </a>
        <div id="table-gridjs"></div>  
    </div>
</div>

@endsection

@section('script-template')
    <script src="{{asset('backend-assets/libs/gridjs/gridjs.umd.js')}}"></script>
    <script src="{{asset('backend-assets/js/pages/user.init.js')}}"></script>
@endsection