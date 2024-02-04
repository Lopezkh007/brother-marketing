@extends('admin.index')

@section('content')
    @include('admin.layouts.page_title', ['pageTitle'=>'Create Member'])
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-wid-bg-sm"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-50">
                <div class="card-body p-4">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-danger">*:message</div>')) !!}
                    @endif
                    <form action="{{route('setting.onsave')}}" method="POST" class="row needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input name="first_name" type="text" class="form-control" id="first_name" placeholder="Enter text" required>
                                    <div class="invalid-feedback">First name is required</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Enter text" required>
                                    <div class="invalid-feedback">Last name is required</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Enter email" required>
                                    <div class="invalid-feedback">Email is required</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="Enter phone number" required>
                                    <div class="invalid-feedback">Phone number is required</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter password" required>
                                    <div class="invalid-feedback">Password is required</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input name="password_confirmation" type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" required/>
                                    <div class="invalid-feedback">Password is required</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="role">Role</label>
                                    <select class="form-select" name="role" aria-label="Default select example" required>
                                        <option selected value="">-- Select Role --</option>
                                        <option value="ADMIN">Admin</option>
                                        <option value="READ">Read</option>
                                        <option value="WRITE">Write</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select class="form-select" name="status" aria-label="Default select example">
                                        <option selected value="">-- Select Status --</option>
                                        <option value="ACTIVE" selected>Active</option>
                                        <option value="INACTIVE">Inactive</option>
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
            </div>
        </div>
    </div>
@endsection

@section('script-template')
    <script src="{{asset('backend-assets/js/validate-form.js')}}"></script>
@endsection