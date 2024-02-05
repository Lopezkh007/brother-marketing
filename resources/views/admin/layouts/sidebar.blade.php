<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <div class="navbar-brand-box navbar-brand-box__start">
        <a href="{{route('dashboard')}}" class="logo logo-light">
            <span class="logo-sm ms-2">
                {{-- <img src="{{ asset('SKW_logo_3_Header_Admin.png') }}" alt="" height="25"> --}}
            </span>
            <span class="logo-lg">
                <div class="d-flex py-3">
                    {{-- <img src="{{ asset('SKW_logo_3_Header_Admin.png') }}" alt="" height="45"> --}}
                </div>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin') ? 'active' : ''}}" href="{{route('dashboard')}}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/slider*') ? 'active' : ''}}" 
                        href="{{route('slider.index')}}">
                        <i class="ri-slideshow-3-line"></i> <span data-key="t-slider">Slider</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/banner*') ? 'active' : ''}}" 
                        href="{{route('banner.index')}}">
                        <i class="ri-advertisement-line"></i> <span data-key="t-slider">Banner</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/brands*') ? 'active' : ''}}" 
                        href="{{route('brand.index')}}">
                        <i class="ri-flag-line"></i> <span data-key="t-category">Brand</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/categories*') ? 'active' : ''}}" 
                        href="{{route('category.index')}}">
                        <i class="ri-flag-line"></i> <span data-key="t-category">Category</span>
                    </a>
                </li>
               
                
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/products*') ? 'active' : ''}}" 
                        href="{{route('product.index')}}">
                        <i class="ri-store-line"></i> <span data-key="t-product">Product</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/partner*') ? 'active' : ''}}" 
                        href="{{route('partner.index')}}">
                        <i class="ri-hand-coin-line"></i> <span data-key="t-slider">Partner</span>
                    </a>
                </li>
               <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/service*') ? 'active' : ''}}" 
                        href="{{route('service.index')}}">
                        <i class="ri-article-line"></i> <span data-key="t-service">Service</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/blogs*') ? 'active' : ''}}" 
                        href="{{route('blogs.index')}}">
                        <i class="ri-article-line"></i> <span data-key="t-blogs">News & Event</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/setting*') ? 'active' : ''}}" href="{{route('setting.index')}}">
                        <i class="ri-group-line"></i> <span data-key="t-setting">User Setting</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/site-setting*') ? 'active' : ''}}" href="{{route('site-setting.index','general')}}">
                        <i class="ri-equalizer-line"></i> <span data-key="t-setting">Site Setting</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{Request::is('admin/languages*') ? 'active' : ''}}" 
                        href="{{route('translate')}}">
                        <i class="ri-translate-2"></i> <span data-key="t-setting">Translate</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->

<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
