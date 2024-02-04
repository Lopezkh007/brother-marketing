<form action="{{route('setting.update-profile')}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="firstnameInput" class="form-label">First Name</label>
                <input name="first_name" type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="{{$model->first_name}}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="lastnameInput" class="form-label">Last Name</label>
                <input name="last_name" type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname" value="{{$model->last_name}}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="phonenumberInput" class="form-label">Phone Number</label>
                <input name="phone_number" type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="{{$model->phone}}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email Address</label>
                <input name="email" type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="{{$model->email}}">
            </div>
        </div>
        
        <div class="col-lg-12">
            <div class="hstack gap-2 justify-content-end">
                <a href="{{route('setting.index')}}" class="btn btn-light">Refresh</a>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</form>