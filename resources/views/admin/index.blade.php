<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard | {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/Brother.ico') }}">
    @include('admin.shared.style_css')
</head>

<body>
    <div id="layout-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>

    @include('admin.shared.script')
    <script>
        @if (Session::has('success'))
            Toast("{{Session::get('success')}}", 'success');
        @endif
        @if (Session::has('error'))
            Toast("{{Session::get('error')}}", 'error');
        @endif
    </script>
</body>

</html>