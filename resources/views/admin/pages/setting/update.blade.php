@extends('admin.index')

@section('content')
    @include('admin.layouts.page_title', ['pageTitle'=>'Update Member'])
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-wid-bg-sm"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-50">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom rounded border-bottom-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                <i class="fas fa-home"></i> Personal Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                <i class="far fa-user"></i> Change Password
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-4">
                    
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-danger">*:message</div>')) !!}
                    @endif
                    <div class="tab-content">
                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                            <form action="{{route('setting.onupdate', $model->id)}}" method="POST" class="row needs-validation" novalidate>
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input name="first_name" value="{{$model->first_name}}" type="text" class="form-control" id="first_name" placeholder="Enter text" required>
                                            <div class="invalid-feedback">First name is required</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input name="last_name" value="{{$model->last_name}}" type="text" class="form-control" id="last_name" placeholder="Enter text" required>
                                            <div class="invalid-feedback">Last name is required</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" value="{{$model->email}}" type="text" class="form-control" id="email" placeholder="Enter email" required>
                                            <div class="invalid-feedback">Email is required</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input name="phone_number" value="{{$model->phone}}" type="text" class="form-control" id="phone_number" placeholder="Enter phone number" required>
                                            <div class="invalid-feedback">Phone number is required</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="role">Role</label>
                                            <select class="form-select" name="role" aria-label="Default select example" required>
                                                <option @if($model->role == 'ADMIN') selected @endif value="ADMIN">Admin</option>
                                                <option @if($model->role == 'READ') selected @endif value="READ">Read</option>
                                                <option @if($model->role == 'WRITE') selected @endif value="WRITE">Write</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="status">Status</label>
                                            <select class="form-select" name="status" aria-label="Default select example">
                                                <option @if($model->status == 'ACTIVE') selected @endif value="ACTIVE">Active</option>
                                                <option @if($model->status == 'INACTIVE') selected @endif value="INACTIVE">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="{{route('setting.team')}}" class="btn btn-light">Back</a>
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="changePassword" role="tabpanel">
                            @include('admin.pages.setting.change-password')
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-template')
    <script src="{{asset('backend-assets/js/validate-form.js')}}"></script>
@endsection