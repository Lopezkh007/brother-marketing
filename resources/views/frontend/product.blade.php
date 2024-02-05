@extends('layout.master')
@section('title')
    Product Page
@endsection
@section('content')

    <!-- Start offcanvas filter sidebar -->
    <div class="offcanvas__filter--sidebar widget__area">
        <button type="button" class="offcanvas__filter--close" data-offcanvas>
            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path></svg> <span class="offcanvas__filter--close__text">Close</span>
        </button>
        <div class="offcanvas__filter--sidebar__inner">
            <div class="single__widget widget__bg">
                <h2 class="widget__title h3">Categories</h2>
                <ul class="widget__categories--menu">
                    @foreach ($category as $cate)
                        <li class="widget__categories--menu__list">
                            <label class="widget__categories--menu__label d-flex align-items-center">
                                <img class="widget__categories--menu__img" src="{{asset('uploads/category-icon/'.$cate->icon)}}" alt="categories-img">
                                <span class="widget__categories--menu__text">
                                    @if (config('app.locale')=='kh')
                                        {{$cate->title->kh ? $cate->title->kh : $cate->title->en}}
                                    @else
                                        {{$cate->title->en}}
                                    @endif
                                </span>
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="single__widget widget__bg">
                <h2 class="widget__title h3">Brands</h2>
                <ul class="widget__categories--menu">
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="{{url('product')}}">Brands1
                    </a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="{{url('product')}}">Brands2</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="{{url('product')}}">Brands3</a></li>
                </ul>
            </div>
            <div class="single__widget widget__bg">
                <h2 class="widget__title h3">Top Rated Product</h2>
                <div class="shop__sidebar--product">
                    <div class="small__product--card d-flex">
                        <div class="small__product--thumbnail">
                            <a class="display-block" href="{{url('productDetail')}}"><img src="{{asset('assets/img/product/small-product/product6.webp')}}" alt="product-img"></a>
                        </div>
                        <div class="small__product--content">
                            <h3 class="small__product--card__title"><a href="{{url('productDetail')}}">Black Air Pods </a></h3>
                            <div class="small__product--card__price">
                                <span class="current__price">$239.52</span>
                            </div>
                            <ul class="rating small__product--rating d-flex">
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon"> 
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"/>
                                         </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="small__product--card d-flex">
                        <div class="small__product--thumbnail">
                            <a class="display-block" href="{{url('productDetail')}}"><img src="{{asset('assets/img/product/small-product/product7.webp')}}" alt="product-img"></a>
                        </div>
                        <div class="small__product--content">
                            <h3 class="small__product--card__title"><a href="{{url('productDetail')}}">Amazon Cloud  </a></h3>
                            <div class="small__product--card__price">
                                <span class="current__price">$178.52</span>
                            </div>
                            <ul class="rating small__product--rating d-flex">
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon"> 
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"/>
                                         </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="small__product--card d-flex">
                        <div class="small__product--thumbnail">
                            <a class="display-block" href="{{url('productDetail')}}"><img src="{{asset('assets/img/product/small-product/product8.webp')}}" alt="product-img"></a>
                        </div>
                        <div class="small__product--content">
                            <h3 class="small__product--card__title"><a href="{{url('productDetail')}}">Lorem ipsum sit. </a></h3>
                            <div class="small__product--card__price">
                                <span class="current__price">$276.52</span>
                            </div>
                            <ul class="rating small__product--rating d-flex">
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </li>
                                <li class="rating__list">
                                    <span class="rating__icon"> 
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"/>
                                         </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End offcanvas filter sidebar -->
    
    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg4" 
            style="background-image: url('{{asset('uploads/banners/'.$banners->image)}}')">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <!-- <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title">Products</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="index.html" class="breadcrumb-text">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Product</span></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start shop section -->
        <div class="shop__section section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 shop-col-width-lg-4">
                        <div class="shop__sidebar--widget widget__area d-none d-lg-block">
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title h3">Categories</h2>
                                <ul class="widget__categories--menu">
                                    @foreach ($category as $cate)
                                        <li class="widget__categories--menu__list">
                                            <label class="widget__categories--menu__label d-flex align-items-center">
                                                <img class="widget__categories--menu__img" src="{{asset('uploads/category-icon/'.$cate->icon)}}" alt="categories-img">
                                                <span class="widget__categories--menu__text">
                                                    @if (config('app.locale')=='kh')
                                                        {{$cate->title->kh?$cate->title->kh:$cate->title->en}}
                                                    @else
                                                        {{$cate->title->en}}
                                                    @endif
                                                </span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>                    
                            <div class="single__widget widget__bg">
                                <form action="">
                                <h2 class="widget__title h3">Brands</h2>
                                <ul class="widget__categories--menu">
                                    @foreach ($brands as $brand)
                                        <li class="widget__categories--menu__list">
                                            <label class="widget__categories--menu__label d-flex align-items-center">
                                                <input type="radio" name="brands" value="npoil" checked>
                                                <span class="widget__categories--menu__text">
                                                    @if (config('app.locale')=='kh')
                                                        {{$brand->title->kh?$brand->title->kh:$brand->title->en}}
                                                    @else
                                                        {{$brand->title->en}}
                                                    @endif
                                                </span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                                </form>
                            </div>
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title h3">New Product</h2>
                                <div class="shop__sidebar--product">
                                    @foreach ($productNews as $item)
                                        <div class="small__product--card d-flex">
                                            <div class="small__product--thumbnail">
                                                <a class="display-block" href="{{route('productdetail',$item->id)}}">
                                                    <img src="{{asset('uploads/products/'.$item->image)}}" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="small__product--content">
                                                <h3 class="small__product--card__title">
                                                    <a href="{{route('productdetail',$item->id)}}">
                                                        @if (config('app.locale')=='kh')
                                                            {{$item->name->kh?$item->name->kh:$item->name->en}}
                                                        @else
                                                            {{$item->name->en}}
                                                        @endif
                                                    </a>
                                                </h3>
                                                <div class="small__product--card__price">
                                                    <span class="current__price">${{$item->discount}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 shop-col-width-lg-8">
                        <div class="shop__right--sidebar">
                            <div class="shop__product--wrapper">
                                <div class="shop__header d-flex align-items-center justify-content-between mb-30">
                                    <div class="product__view--mode d-flex align-items-center">
                                        <button class="widget__filter--btn d-flex d-lg-none align-items-center" data-offcanvas>
                                            <svg  class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80"/><circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/></svg> 
                                            <span class="widget__filter--btn__text">Filter</span>
                                        </button>
                                        <div class="product__view--mode__list product__short--by align-items-center d-flex ">
                                            <label class="product__view--label">Prev Page :</label>
                                            <div class="select shop__header--select">
                                                <select class="product__view--select">
                                                    <option selected value="1">65</option>
                                                    <option value="2">40</option>
                                                    <option value="3">42</option>
                                                    <option value="4">57 </option>
                                                    <option value="5">60 </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="product__view--mode__list product__short--by align-items-center d-flex">
                                            <label class="product__view--label">Sort By :</label>
                                            <div class="select shop__header--select">
                                                <select class="product__view--select">
                                                    <option selected value="1">Sort by latest</option>
                                                    <option value="2">Sort by popularity</option>
                                                    <option value="3">Sort by newness</option>
                                                    <option value="4">Sort by  rating </option>
                                                </select>
                                            </div>
                                             
                                        </div>
                                        <div class="product__view--mode__list">
                                            <div class="product__tab--one product__grid--column__buttons d-flex justify-content-center">
                                                <button class="product__grid--column__buttons--icons active" 
                                                    aria-label="grid btn" data-toggle="tab" data-target="#product_grid">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                                        <g  transform="translate(-1360 -479)">
                                                          <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4" transform="translate(1360 479)" fill="currentColor"/>
                                                          <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4" transform="translate(1360 484)" fill="currentColor"/>
                                                          <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4" transform="translate(1365 479)" fill="currentColor"/>
                                                          <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4" transform="translate(1365 484)" fill="currentColor"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <button class="product__grid--column__buttons--icons" 
                                                    aria-label="list btn" data-toggle="tab" data-target="#product_list">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                                        <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                                          <g  transform="translate(12 -2)">
                                                            <g id="Group_1326" data-name="Group 1326">
                                                              <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                                              <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                                            </g>
                                                            <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                                              <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                                              <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                                            </g>
                                                            <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                                              <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3" height="2" transform="translate(1364 487)" fill="currentColor"/>
                                                              <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9" height="2" transform="translate(1368 487)" fill="currentColor"/>
                                                            </g>
                                                          </g>
                                                        </g>
                                                      </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="product__showing--count">Showing {{$product->firstItem()}}–{{$product->lastItem()}} of {{$product->total()}} results</p>
                                </div>
                                <div class="tab_content">
                                    <div id="product_grid" class="tab_pane fade active show" 
                                        role="tabpanel" aria-labelledby="product_grid">
                                        <div class="product__section--inner">
                                            <div class="row mb--n30">
                                                @foreach ($product as $item)
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                        <article class="product__card">
                                                            <div class="product__card--thumbnail">
                                                                <a class="product__card--thumbnail__link display-block" href="{{route('productdetail',$item->id)}}">
                                                                    <img class="product__card--thumbnail__img product__primary--img" src="{{asset('uploads/products/'.$item->image)}}" alt="product-img">
                                                                    <img class="product__card--thumbnail__img product__secondary--img" src="{{asset('uploads/products/'.$item->image_back)}}" alt="product-img">
                                                                </a>
                                                                <!-- <span class="product__badge">-14%</span> -->
                                                                <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                                    <li class="product__card--action__list">
                                                                        <a class="product__card--action__btn" title="Quick View" 
                                                                        data-bs-toggle="modal" 
                                                                        data-bs-target="#examplemodal-{{$item->id}}" 
                                                                        href="javascript:void(0)">
                                                                            <svg class="product__card--action__btn--svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z" fill="currentColor"></path>
                                                                            </svg>
                                                                            <span class="visually-hidden">Quick View</span>  
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product__card--content">
                                                                <h3 class="product__card--title"><a 
                                                                    href="{{route('productdetail',$item->id)}}">
                                                                    @if (config('app.locale')=='kh')
                                                                        {{$item->name->kh?$item->name->kh:$item->name->en}}
                                                                    @else
                                                                        {{$item->name->en}}
                                                                    @endif
                                                                </a></h3>
                                                                <div class="product__card--price">
                                                                    <span class="current__price">${{$item->discount}}</span>
                                                                    <span class="old__price"> ${{$item->price}}</span>
                                                                </div>
                                                                <div class="product__card--footer">
                                                                    <a class="product__card--btn primary__btn" href="{{route('productdetail',$item->id)}}">
                                                                        View Detail
                                                                    </a>
                                                                </div>    
                                                            </div>
                                                        </article>
                                                    </div>
                                                    {{-- Quick View --}}
                                                    <div class="modal fade" id="examplemodal-{{$item->id}}" tabindex="-1" aria-hidden="true"> 
                                                        <div class="modal-dialog quickview__main--wrapper modal-dialog-centered">
                                                        <div class="modal-content quickview__main__content">
                                                            <div class="modal-header quickview_m_header">
                                                                <button type="button" class="btn-close quickview__close--btn" data-bs-dismiss="modal" 
                                                                aria-label="Close">✕</button>
                                                            </div>
                                                            <div class="modal-body quickview__inner">
                                                                <div class="row row-cols-lg-2 row-cols-md-2">
                                                                    <div class="col">
                                                                        <div class="quickview__gallery">
                                                                            <div class="product__media--preview  swiper">
                                                                                <div class="swiper-wrapper">
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product1.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product1.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product1.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product2.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product2.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product2.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product3.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product3.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product3.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product4.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product4.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product4.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product5.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product5.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product5.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product__media--nav swiper">
                                                                                <div class="swiper-wrapper">
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product1.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product2.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product3.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product4.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product5.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper__nav--btn swiper-button-next">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"  class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                                                </div>
                                                                                <div class="swiper__nav--btn swiper-button-prev">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"  class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="quickview__info">
                                                                            <form action="#">
                                                                                <h2 class="product__details--info__title mb-15">
                                                                                    @if (config('app.locale')=='kh')
                                                                                        {{$item->name->kh ? $item->name->kh : $item->name->en}}
                                                                                    @else
                                                                                        {{$item->name->en}}
                                                                                    @endif
                                                                                </h2>
                                                                                <div class="product__card--price mb-15">
                                                                                    <span class="current__price">
                                                                                        ${{$item->discount}}
                                                                                    </span>
                                                                                    <span class="old__price">
                                                                                        ${{$item->price}}
                                                                                    </span>
                                                                                </div>
                                                                                <p class="product__details--info__desc mb-15">
                                                                                    @if (config('app.locale')=='kh')
                                                                                        {{$item->short_des->kh ? $item->short_des->kh : $item->short_des->en}}
                                                                                    @else
                                                                                        {{$item->short_des->en}}
                                                                                    @endif
                                                                                </p>
                                                                                <div class="product__variant">
                                                                                    <div class="product__variant--list mb-20">
                                                                                        <fieldset class="variant__input--fieldset">
                                                                                            <legend class="product__variant--title mb-10">Capacity :</legend>
                                                                                            <ul class="variant__size d-flex">
                                                                                                <li class="variant__size--list">
                                                                                                    <input id="weight1" name="weight" type="radio" checked>
                                                                                                    <label class="variant__size--value red" for="weight1">1.2L</label>
                                                                                                </li>
                                                                                                <li class="variant__size--list">
                                                                                                    <input id="weight2" name="weight" type="radio">
                                                                                                    <label class="variant__size--value red" for="weight2">3L</label>
                                                                                                </li>
                                                                                                <li class="variant__size--list">
                                                                                                    <input id="weight3" name="weight" type="radio">
                                                                                                    <label class="variant__size--value red" for="weight3">5L</label>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="quickview__social d-flex align-items-center">
                                                                                    <label class="quickview__social--title">Social Share:</label>
                                                                                    <ul class="quickview__social--wrapper mt-0 d-flex">
                                                                                        <li class="quickview__social--list">
                                                                                            <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com/camgotech1">
                                                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                                                                </svg>
                                                                                                <span class="visually-hidden">Facebook</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="quickview__social--list">
                                                                                            <a class="quickview__social--icon" target="_blank" href="https://twitter.com">
                                                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                                                                </svg>
                                                                                                <span class="visually-hidden">Twitter</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="quickview__social--list">
                                                                                            <a class="quickview__social--icon" target="_blank" href="https://www.instagram.com">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                                                                </svg>
                                                                                                <span class="visually-hidden">Instagram</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="quickview__social--list">
                                                                                            <a class="quickview__social--icon" target="_blank" href="https://www.youtube.com">
                                                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                                                                    <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                                                                </svg>
                                                                                                <span class="visually-hidden">Youtube</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div> 
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div id="product_list" class="tab_pane">
                                        <div class="product__section--inner product__section--style3__inner">
                                            <div class="row row-cols-1 mb--n30">
                                                @foreach ($product as $item)
                                                    <div class="col mb-30">
                                                        <div class="product__card product__list d-flex align-items-center">
                                                            <div class="product__card--thumbnail product__list--thumbnail">
                                                                <a class="product__card--thumbnail__link display-block" href="{{route('productdetail',$item->id)}}">
                                                                    <img class="product__card--thumbnail__img product__primary--img" src="{{asset('uploads/products/'.$item->image)}}" alt="product-img">
                                                                    <img class="product__card--thumbnail__img product__secondary--img" src="{{asset('uploads/products/'.$item->image_back)}}" alt="product-img">
                                                                </a>
                                                                <!-- <span class="product__badge">-20%</span> -->
                                                                <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                                    <li class="product__card--action__list">
                                                                        <a class="product__card--action__btn" title="Quick View" data-bs-toggle="modal" data-bs-target="#examplemodal-{{$item->id}}" href="javascript:void(0)">
                                                                            <svg class="product__card--action__btn--svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z" fill="currentColor"></path>
                                                                            </svg>
                                                                            <span class="visually-hidden">Quick View</span>  
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product__card--content product__list--content">
                                                                <h3 class="product__card--title"><a 
                                                                    href="{{route('productdetail',$item->id)}}">
                                                                    @if (config('app.locale')=='kh')
                                                                        {{$item->name->kh?$item->name->kh:$item->name->en}}
                                                                    @else
                                                                        {{$item->name->en}}
                                                                    @endif    
                                                                </a></h3>
                                                                
                                                                <div class="product__list--price">
                                                                    <span class="current__price">${{$item->price-($item->price*($item->discount/100))}}</span>
                                                                    <span class="old__price"> ${{$item->price}}</span>
                                                                </div>
                                                                <p class="product__card--content__desc mb-20">
                                                                    @if (config('app.locale')=='kh')
                                                                        {{$item->short_des->kh?$item->short_des->kh:$item->short_des->en}}
                                                                    @else
                                                                        {{$item->short_des->en}}
                                                                    @endif
                                                                </p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Quick View --}}
                                                    <div class="modal fade" id="examplemodal-{{$item->id}}" tabindex="-1" aria-hidden="true"> 
                                                        <div class="modal-dialog quickview__main--wrapper modal-dialog-centered">
                                                        <div class="modal-content quickview__main__content">
                                                            <div class="modal-header quickview_m_header">
                                                                <button type="button" class="btn-close quickview__close--btn" data-bs-dismiss="modal" 
                                                                aria-label="Close">✕</button>
                                                            </div>
                                                            <div class="modal-body quickview__inner">
                                                                <div class="row row-cols-lg-2 row-cols-md-2">
                                                                    <div class="col">
                                                                        <div class="quickview__gallery">
                                                                            <div class="product__media--preview  swiper">
                                                                                <div class="swiper-wrapper">
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product1.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product1.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product1.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product2.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product2.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product2.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product3.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product3.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product3.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product4.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product4.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product4.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--preview__items">
                                                                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="{{asset('assets/img/product/big-product/product5.webp')}}"><img class="product__media--preview__items--img" src="{{asset('assets/img/product/big-product/product5.webp')}}" alt="product-media-img"></a>
                                                                                            <div class="product__media--view__icon">
                                                                                                <a class="product__media--view__icon--link glightbox" href="{{asset('assets/img/product/big-product/product5.webp')}}" data-gallery="product-media-preview">
                                                                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                                                    <span class="visually-hidden">product view</span> 
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product__media--nav swiper">
                                                                                <div class="swiper-wrapper">
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product1.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product2.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product3.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product4.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="swiper-slide">
                                                                                        <div class="product__media--nav__items">
                                                                                            <img class="product__media--nav__items--img" src="{{asset('assets/img/product/small-product/product5.webp')}}" alt="product-nav-img">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="swiper__nav--btn swiper-button-next">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"  class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                                                </div>
                                                                                <div class="swiper__nav--btn swiper-button-prev">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"  class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="quickview__info">
                                                                            <form action="#">
                                                                                <h2 class="product__details--info__title mb-15">
                                                                                    @if (config('app.locale')=='kh')
                                                                                        {{$item->name->kh ? $item->name->kh : $item->name->en}}
                                                                                    @else
                                                                                        {{$item->name->en}}
                                                                                    @endif
                                                                                </h2>
                                                                                <div class="product__card--price mb-15">
                                                                                    <span class="current__price">
                                                                                        ${{$item->discount}}
                                                                                    </span>
                                                                                    <span class="old__price">
                                                                                        ${{$item->price}}
                                                                                    </span>
                                                                                </div>
                                                                                <p class="product__details--info__desc mb-15">
                                                                                    @if (config('app.locale')=='kh')
                                                                                        {{$item->short_des->kh ? $item->short_des->kh : $item->short_des->en}}
                                                                                    @else
                                                                                        {{$item->short_des->en}}
                                                                                    @endif
                                                                                </p>
                                                                                <div class="product__variant">
                                                                                    <div class="product__variant--list mb-20">
                                                                                        <fieldset class="variant__input--fieldset">
                                                                                            <legend class="product__variant--title mb-10">Capacity :</legend>
                                                                                            <ul class="variant__size d-flex">
                                                                                                <li class="variant__size--list">
                                                                                                    <input id="weight1" name="weight" type="radio" checked>
                                                                                                    <label class="variant__size--value red" for="weight1">1.2L</label>
                                                                                                </li>
                                                                                                <li class="variant__size--list">
                                                                                                    <input id="weight2" name="weight" type="radio">
                                                                                                    <label class="variant__size--value red" for="weight2">3L</label>
                                                                                                </li>
                                                                                                <li class="variant__size--list">
                                                                                                    <input id="weight3" name="weight" type="radio">
                                                                                                    <label class="variant__size--value red" for="weight3">5L</label>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="quickview__social d-flex align-items-center">
                                                                                    <label class="quickview__social--title">Social Share:</label>
                                                                                    <ul class="quickview__social--wrapper mt-0 d-flex">
                                                                                        <li class="quickview__social--list">
                                                                                            <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com/camgotech1">
                                                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                                                                </svg>
                                                                                                <span class="visually-hidden">Facebook</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="quickview__social--list">
                                                                                            <a class="quickview__social--icon" target="_blank" href="https://twitter.com">
                                                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                                                                </svg>
                                                                                                <span class="visually-hidden">Twitter</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="quickview__social--list">
                                                                                            <a class="quickview__social--icon" target="_blank" href="https://www.instagram.com">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                                                                </svg>
                                                                                                <span class="visually-hidden">Instagram</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="quickview__social--list">
                                                                                            <a class="quickview__social--icon" target="_blank" href="https://www.youtube.com">
                                                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                                                                    <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                                                                </svg>
                                                                                                <span class="visually-hidden">Youtube</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div> 
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination__area">
                                    {{$product->links('paginates.defaul')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End shop section -->
    </main>
    
@endsection