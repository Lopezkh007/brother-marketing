@extends('layout.master')
@section('title')
    Product Detail Page
@endsection
@section('content')

    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg5" style="background-image: url('{{asset('uploads/banners/'.$banners->image)}}')">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <!-- <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Product</span></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start product details section -->
        <section class="product__details--section section--padding">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="product__details--media">
                            <div class="single__product--preview  swiper mb-25">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview"
                                            href="{{asset('uploads/products/'.$products->image)}}">
                                                <img class="product__media--preview__items--img" src="{{asset('uploads/products/'.$products->image)}}" alt="product-media-img">
                                            </a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox"
                                                 href="{{asset('uploads/products/'.$products->image)}}" data-gallery="product-media-preview">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                    <span class="visually-hidden">product view</span> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($products->galleries as $item)
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" 
                                                href="{{asset('uploads/products/'.$item)}}">
                                                    <img class="product__media--preview__items--img" src="{{asset('uploads/products/'.$item)}}" alt="product-media-img">
                                                </a>
                                                <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" 
                                                    href="{{asset('uploads/products/'.$item)}}" data-gallery="product-media-preview">
                                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                        <span class="visually-hidden">product view</span> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="single__product--nav swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" 
                                            src="{{asset('uploads/products/'.$products->image)}}" 
                                            alt="product-nav-img">
                                        </div>
                                    </div>
                                    @foreach ($products->galleries as $item)
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img" 
                                                src="{{asset('uploads/products/'.$item)}}" 
                                                alt="product-nav-img">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper__nav--btn swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                                <div class="swiper__nav--btn swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="col">
                        <div class="product__details--info">
                            <form action="#">
                                <h2 class="product__details--info__title mb-15">
                                    @if (config('app.locale')=='kh')
                                        {{$products->name->kh?$products->name->kh:$products->name->en}}
                                    @else
                                        {{$products->name->en}}
                                    @endif
                                </h2>
                                <div class="product__details--info__price mb-12">
                                    <span class="current__price">${{$products->discount}}</span>
                                    <span class="old__price">${{$products->price}}</span>
                                </div>
                                <p class="product__details--info__desc mb-15">
                                    @if (config('app.locale')=='kh')
                                        {{$products->short_des->kh?$product->short_des->kh:$product->short_des->en}}
                                    @else
                                        {{$products->short_des->en}}
                                    @endif
                                </p>
                                <div class="product__variant">
                                    <div class="product__variant--list mb-20">
                                        <fieldset class="variant__input--fieldset">
                                            <legend class="product__variant--title mb-8">Capacity :</legend>
                                            <ul class="variant__size d-flex">
                                                @foreach ($capacitys as $key => $item)
                                                    @if (!empty($item))
                                                        <li class="variant__size--list">
                                                            <input id="{{$item}}" name="capacity" type="radio" {{$key == 0 ? "checked" : null}}>
                                                            <label class="variant__size--value red" for="{{$item}}">{{$item}}L</label>
                                                        </li>
                                                    @else
                                                        <li class="variant__size--list">
                                                            <input id="capacity" name="capacity" type="radio" checked>
                                                            <label class="variant__size--value red" for="capacity">0L</label>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <div class="product__variant--list mb-15">
                                        <div class="product__details--info__meta">
                                            <p class="product__details--info__meta--list"><strong>Barcode:</strong> 
                                                <span>
                                                    {{$products->code}}
                                                </span> 
                                            </p>
                                            <!-- <p class="product__details--info__meta--list"><strong>Sky:</strong>  <span>4420</span> </p>
                                            <p class="product__details--info__meta--list"><strong>Vendor:</strong>  <span>Belo</span> </p> -->
                                            <p class="product__details--info__meta--list">
                                                <strong>Type:</strong>
                                                @foreach ($types as $item)
                                                    @if (!empty($item))
                                                    <span>{{$item}} | </span> 
                                                    @else
                                                    <span>No Type</span>
                                                    @endif    
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="quickview__social d-flex align-items-center mb-15">
                                    <label class="quickview__social--title">Social Share:</label>
                                    <ul class="quickview__social--wrapper mt-0 d-flex">
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" 
                                            href="{{asset($contact->facebook)}}">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" 
                                            href="{{asset($contact->twitter)}}">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" 
                                            href="{{asset($contact->instagram)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" 
                                            href="{{asset($contact->youtube)}}">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                    <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="guarantee__safe--checkout">
                                    <h5 class="guarantee__safe--checkout__title">Guaranteed Safe Checkout</h5>
                                    <img class="guarantee__safe--checkout__img" src="assets/img/other/safe-checkout.webp" alt="Payment Image">
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product details section -->

        <!-- Start product details tab section -->
        <section class="product__details--tab__section section--padding">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <ul class="product__tab--one product__details--tab d-flex mb-30">
                            <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Description</li>
                            <li class="product__details--tab__list" data-toggle="tab" data-target="#information">Additional Info</li>
                        </ul>
                        <div class="product__details--tab__inner border-radius-10">
                            <div class="tab_content">
                                <div id="description" class="tab_pane active show">
                                    <div class="product__tab--content">
                                        <div class="product__tab--content__step mb-30">
                                            <h2 class="product__tab--content__title h4 mb-10">
                                                @if (config('app.locale')=='kh')
                                                    {{$products->name->kh?$products->name->kh:$products->name->en}}
                                                @else
                                                    {{$products->name->en}}
                                                @endif
                                            </h2>
                                            <p class="product__tab--content__desc">
                                                @if (config('app.locale')=='kh')
                                                    {{$products->short_des->kh?$product->short_des->kh:$product->short_des->en}}
                                                @else
                                                    {{$products->short_des->en}}
                                                @endif
                                            </p>
                                        </div>
                                        <div class="product__tab--content__step style2 d-flex align-items-center mb-30">
                                            <div class="product__tab--content__banner">
                                                <img class="product__tab--content__banner--img border-radius-5" 
                                                src="{{asset('uploads/products/'.$products->image)}}" alt="banner-img">
                                            </div>
                                            <div class="product__tab--content__right">
                                                <p class="product__tab--content__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi tempora quibusdam libero possimus magni impedit a, facere recusandae eos ut at quod sed praesentium!</p>
                                                <div class="image__with--text__percent product__tab--percent__style">
                                                    <ul>
                                                        <li class="image__with--text__percent--list mb-20">
                                                            <span class="image__with--text__percent--top d-flex justify-content-between align-content-center">
                                                                <span class="image__with--text__percent--content">Integrative control</span>
                                                                <span class="image__with--text__percent--content">58%</span>
                                                            </span>
                                                        </li>
                                                        <li class="image__with--text__percent--list two mb-20">
                                                            <span class="image__with--text__percent--top d-flex justify-content-between align-content-center">
                                                                <span class="image__with--text__percent--content">Design Device</span>
                                                                <span class="image__with--text__percent--content">77%</span>
                                                            </span>
                                                        </li>
                                                        <li class="image__with--text__percent--list three mb-20">
                                                            <span class="image__with--text__percent--top d-flex justify-content-between align-content-center">
                                                                <span class="image__with--text__percent--content">Service Control</span>
                                                                <span class="image__with--text__percent--content">58%</span>
                                                            </span>
                                                        </li>
                                                        <li class="image__with--text__percent--list four">
                                                            <span class="image__with--text__percent--top d-flex justify-content-between align-content-center">
                                                                <span class="image__with--text__percent--content">Metar Surusn</span>
                                                                <span class="image__with--text__percent--content">69%</span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="product__tab--content__step">
                                            <p class="product__tab--content__desc">Polor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio
                                                lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. 
                                                Nulla facilisi. Nulla libero. Vivamus pharetra posuere.</p>
                                        </div>
                                    </div> 
                                </div>
                                <div id="information" class="tab_pane">
                                    <div class="product__tab--conten">
                                        <div class="product__tab--content__step">
                                            <ul class="additional__info_list">
                                                <li class="additional__info_list--item">
                                                    <span class="info__list--item-head"><strong>Capacity</strong></span>
                                                    <span  class="info__list--item-content">
                                                        @foreach ($capacitys as $item)
                                                            {{$item}}L &nbsp;&nbsp;
                                                        @endforeach
                                                    </span>
                                                </li>
                                                <li class="additional__info_list--item">
                                                    <span class="info__list--item-head"><strong>Brand</strong></span>
                                                    <span class="info__list--item-content">
                                                        @if (config('app.locale')=='kh')
                                                            {{$brands->title->kh?$brands->title->kh:$brands->title->en}}
                                                        @else
                                                            {{$brands->title->en}}
                                                        @endif
                                                    </span>
                                                </li>
                                                <li class="additional__info_list--item">
                                                    <span class="info__list--item-head"><strong>Guarantee</strong></span>
                                                    <span class="info__list--item-content">5 years</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product details tab section -->
        
        <!-- Start product section -->
        <section class="product__section section--padding ">
            <div class="container">
                <div class="section__heading border-bottom mb-30">
                    <h2 class="section__heading--maintitle">Related <span>Products</span></h2>
                </div>
                <div class="product__section--inner pb-15 product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach ($productNews as $item)
                            <div class="swiper-slide">
                                <article class="product__card">
                                    <div class="product__card--thumbnail">
                                        <a class="product__card--thumbnail__link display-block" 
                                        href="{{route('productdetail',$item->id)}}">
                                            <img class="product__card--thumbnail__img product__primary--img" 
                                            src="{{asset('uploads/products/'.$item->image)}}" alt="product-img">
                                            <img class="product__card--thumbnail__img product__secondary--img" 
                                            src="{{asset('uploads/products/'.$item->image_back)}}" alt="product-img">
                                        </a>
                                        <!-- <span class="product__badge">-14%</span> -->
                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                            <li class="product__card--action__list">
                                                <a class="product__card--action__btn" title="Quick View" data-bs-toggle="modal" data-bs-target="#examplemodals-{{$item->id}}"
                                                href="">
                                                    <svg class="product__card--action__btn--svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z" fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>  
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__card--content">
                                        <h3 class="product__card--title">
                                            <a href="{{route('productdetail',$item->id)}}">
                                                @if (config('app.locale')=='kh')
                                                    {{$item->name->kh?$item->name->kh:$item->name->en}}
                                                @else
                                                    {{$item->name->en}}
                                                @endif
                                            </a>
                                        </h3>
                                        <div class="product__card--price">
                                            <span class="current__price">${{$item->discount}}</span>
                                            <span class="old__price"> ${{$item->price}}</span>
                                        </div>
                                        <div class="product__card--footer">
                                            <a class="product__card--btn primary__btn" 
                                            href="{{route('productdetail',$item->id)}}">
                                                View Detail
                                            </a>
                                        </div>   
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->
        
    </main>
    <!-- Quickview Wrapper -->
    @foreach ($productNews as $item)

    <div class="modal fade" id="examplemodals-{{$item->id}}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog quickview__main--wrapper modal-dialog-centered">
        <div class="modal-content quickview__main__content">
            <div class="modal-header quickview_m_header">
                <button type="button" class="btn-close quickview__close--btn" data-bs-dismiss="modal" aria-label="Close">✕</button>
            </div>
            <div class="modal-body quickview__inner">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="quickview__gallery">
                            <div class="product__media--preview  swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" 
                                            href="{{asset('uploads/products/'.$item->image)}}">
                                                <img class="product__media--preview__items--img" 
                                                src="{{asset('uploads/products/'.$item->image)}}" alt="product-media-img">
                                            </a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" 
                                                href="{{asset('uploads/products/'.$item->image)}}" data-gallery="product-media-preview">
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
                                            <img class="product__media--nav__items--img" 
                                            src="{{asset('uploads/products/'.$item->image)}}" alt="product-nav-img">
                                        </div>
                                    </div>
                                    @foreach ($item->galleries as $items)
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img" 
                                                src="{{asset('uploads/products/'.$items)}}" alt="product-nav-img">
                                            </div>
                                        </div>
                                    @endforeach
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
                                        {{$item->name->kh?$item->name->kh:$item->name->en}}
                                    @else
                                        {{$item->name->en}}
                                    @endif
                                </h2>
                                    
                                <div class="product__card--price mb-15">
                                    <span class="current__price">${{$item->discount}}</span>
                                    <span class="old__price"> ${{$item->price}}</span>
                                </div>
                                <p class="product__details--info__desc mb-15">
                                    @if (config('app.locale')=='kh')
                                        {{$item->short_des->kh?$item->short_des->kh:$item->short_des->en}}
                                    @else
                                        {{$item->short_des->en}}
                                    @endif
                                </p>
                                <div class="product__variant">
                                    <div class="product__variant--list mb-20">
                                        <fieldset class="variant__input--fieldset">
                                            <legend class="product__variant--title mb-10">Capacity:</legend>
                                            <ul class="variant__size d-flex">
                                                @if (!empty($item->capacity))
                                                    @php
                                                        $capacitys = explode(',',$item->capacity)
                                                    @endphp
                                                    @foreach ($capacitys as $keys => $items)
                                                        <li class="variant__size--list">
                                                            <input id="{{$items}}" name="capacitys" type="radio">
                                                            <label class="variant__size--value blue" for="{{$items}}">{{$items}}L</label>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="variant__size--list">
                                                        <input id="weight2" name="capacitys" type="radio">
                                                        <label class="variant__size--value red" for="weight2">0L</label>
                                                    </li>
                                                @endif
                                            </ul>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="quickview__social d-flex align-items-center">
                                    <label class="quickview__social--title">Social Share:</label>
                                    <ul class="quickview__social--wrapper mt-0 d-flex">
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" 
                                                href="{{asset($contact->facebook)}}">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" 
                                                href="{{asset($contact->twitter)}}">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" 
                                                href="{{asset($contact->instagram)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" 
                                                href="{{asset($contact->youtube)}}">
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
{{-- Quick View --}}
@endsection