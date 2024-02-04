<form action="{{route('setting.changepassword', $model->id)}}" method="POST" class="row needs-validation" novalidate>
    @csrf
    @method('PATCH')
    <div class="row g-2">
        <div class="col-lg-6">
            <div>
                <label for="newpasswordInput" class="form-label">New Password*</label>
                <input name="password" type="password" class="form-control" id="newpasswordInput" placeholder="Enter password" required>
                <div class="invalid-feedback">Password is required</div>
            </div>
        </div>
        <div class="col-lg-6">
            <div>
                <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                <input name="password_confirmation" type="password" class="form-control" id="confirmpasswordInput" placeholder="Enter confirm password" required>
                <div class="invalid-feedback">Password is required</div>
            </div>
        </div>
        
        <div class="col-lg-12">
            <div class="text-end">
                <a href="{{route('setting.team')}}" class="btn btn-light">Back</a>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</form>