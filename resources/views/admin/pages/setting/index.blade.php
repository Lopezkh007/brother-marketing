@extends('admin.index')

@section('content')
    @include('admin.layouts.page_title', ['pageTitle'=>'Setting'])
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-wid-bg-sm"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-50">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('admin/setting/team*') ? '' : 'active'}}" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                <i class="fas fa-home"></i> Personal Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                <i class="far fa-user"></i> Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('admin/setting/team*') ? 'active' : ''}}" href="{{route('setting.team')}}">
                                <i class="far fa-envelope"></i> Team
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-4">
                    <div class="tab-content">
                        <div class="tab-pane {{Request::is('admin/setting/team*') ? '' : 'active'}}" id="personalDetails" role="tabpanel">
                            @include('admin.pages.setting.personal-detail')
                        </div>
                        <div class="tab-pane" id="changePassword" role="tabpanel">
                            @include('admin.pages.setting.change-password')
                        </div>
                        <div class="tab-pane {{Request::is('admin/setting/team*') ? 'active' : ''}}" id="team" role="tabpanel">
                            @yield('setting')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection