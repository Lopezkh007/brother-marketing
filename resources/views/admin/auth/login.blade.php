<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Sign In | {{config('app.name')}} - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/Brother.ico') }}">
    @include('admin.shared.style_css')
</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <div class="auth-page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="mt-2">
                                    <img src="{{ asset('assets/img/logo/Brother-Marketing.png') }}" width="180" class="mb-2"/>
                                    <h3 class="text-primary" style="color: #151529 !important;">Admin Login</h3>
                                    <p class="text-muted">Sign in to continue to Brother-Marketing admin.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{route('authenticate')}}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input name="password" type="password" class="form-control pe-5" placeholder="Enter password" id="password-input" required>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>
                                        @error('email')
                                            <span class="text-sm text-danger mt-2">{{$message}}</span>
                                        @enderror

                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit" style="background-color: #151529 !important;">Sign In</button>
                                        </div>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.shared.script')
    <script src="{{ URL::asset('admin-assets/js/app.js') }}"></script>
</body>

</html>