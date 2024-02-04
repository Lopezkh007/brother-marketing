@extends('admin.index')

@section('content')
    @include('admin.layouts.page_title', ['pageTitle'=>'Site Setting'])
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-wid-bg-sm"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-50">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('admin/site-setting/general') ? 'active' : ''}}"
                                href="{{route('site-setting.index', 'general')}}">
                                General
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('admin/site-setting/about') ? 'active' : ''}}"
                                href="{{route('site-setting.index', 'about')}}">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('admin/site-setting/contact') ? 'active' : ''}}"
                                href="{{route('site-setting.index', 'contact')}}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-4">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel">
                           @yield('site-setting-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection