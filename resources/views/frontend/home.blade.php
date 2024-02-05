@extends('layout.master')
@section('title')
    Home Page
@endsection
@section('content')
    <main class="main__content_wrapper">
        <section class="hero__slider--section">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    @foreach ($slider as $s)
                    <div class="swiper-slide ">
                        <div class="hero__slider--items style4 slider4__items--bg1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7">
                                        <div class="slider__content style4">
                                            <span class="slider__subtitle style4">
                                                @if(config('app.locale') == 'kh')
                                                    {{$s->subtitle->kh ? $s->subtitle->kh : $s->subtitle->en}}
                                                @else
                                                    {{$s->subtitle->en}}
                                                @endif
                                                
                                            </span>
                                            <h2 class="slider__maintitle style4 h1">
                                                @if (config('app.locale')=='kh')
                                                    {{$s->title->kh ? $s->title->kh : $s->title->en}}
                                                @else
                                                    {{$s->title->en}}
                                                @endif    
                                            </h2>
                                            <p class="slider__desc style4">
                                                @if (config('app.locale')=='kh')
                                                    {{$s->des->kh ? $s->des->kh : $s->des->en}}
                                                @else
                                                    {{$s->des->en}}
                                                @endif
                                            </p>
                                            <a 
                                                class="primary__btn slider__btn" 
                                                href="{{ $s->navigate_to ? $s->navigate_to : url('product')}}"
                                                target="{{ $s->redirect_new_tap == 1 ? '_blank' : '_self' }}"
                                            >
                                                @if (config('app.locale')=='kh')
                                                    {{$s->label->kh ? $s->label->kh : $s->label->en}}
                                                @else 
                                                    {{$s->label->en ? $s->label->en : 'Shop now'}}
                                                @endif
                                                
                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58745 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178V3.6178Z" fill="currentColor"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__slider--layer__style4">
                                <img class="slider__layer--img " src="{{asset('uploads/sliders/'.$s->image)}}" alt="slider-img">
                            </div> 
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="slider__pagination swiper-pagination"></div>
            </div>
        </section>
        <section class="categories__section section--padding1">
            <div class="container">
                <div class="row mb--n25">
                    @foreach ($category as $cats)
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                            <div class="categories__card text-center">
                                <img src="{{asset('uploads/category-icon/'.$cats->icon)}}" alt="car" class="image-icon">
                                <a class="categories__card--link" href="{{url('product')}}">
                                    <h2 class="categories__title">
                                        @if (config('app.locale')=='kh')
                                            {{$cats->title->kh ? $cats->title->kh : $cats->title->en}}
                                        @else
                                            {{$cats->title->en}}
                                        @endif
                                    </h2>
                                </a>   
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="product__section section--padding  pt-0">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom d-flex justify-content-between mb-30">
                    <h2 class="section__heading--maintitle">@lang('website.feature-products')</h2>
                    <ul class="nav tab__btn--wrapper" role="tablist">
                        @foreach ($brands as $key => $brand)
                            <li class="tab__btn--item" role="presentation">
                                <button class="tab__btn--link {{$key == 0 ? "active" : null}}" 
                                    data-bs-toggle="tab" 
                                    data-bs-target="#brand-{{$brand->id}}" type="button"   
                                    role="tab" aria-selected="true">
                                    @if (config('app.locale')=='kh')
                                        {{$brand->title->kh ? $brand->title->kh : $brand->title->en}}
                                    @else
                                        {{$brand->title->en}}
                                    @endif
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="product__section--inner">
                    <div class="tab-content" id="nav-tabContent">
                        @foreach ($brands as $key => $brand)
                            <div class="tab-pane fade {{$key == 0 ? "show active" : null}}" 
                                id="brand-{{$brand->id}}" role="tabpanel" 
                                aria-labelledby="brand-{{$brand->id}}-tab" tabindex="0">
                                <div class="product__wrapper">
                                    <div class="row mb--n30">
                                        @foreach ($brand->products as $product)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block" 
                                                            href="{{route('productdetail',$product->id)}}">
                                                            <img class="product__card--thumbnail__img product__primary--img" 
                                                                src="{{asset('uploads/products/'.$product->image)}}" alt="product-img">
                                                            <img class="product__card--thumbnail__img product__secondary--img"
                                                                src="{{asset('uploads/products/'.$product->image_back)}}" alt="product-img">
                                                        </a>
                                                        <!-- <span class="product__badge">-14%</span> -->
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a class="product__card--action__btn" title="Quick View" 
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#examplemodal-{{$product->id}}" 
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
                                                            <a href="{{route('productdetail',$product->id)}}">
                                                                @if (config('app.locale')=='kh')
                                                                    {{$product->name->kh ? $product->name->kh : $product->name->en}}
                                                                @else
                                                                    {{$product->name->en}}
                                                                @endif
                                                            </a>
                                                        </h3>
                                                        <div class="product__card--price">
                                                            <span class="current__price">${{$product->discount}}</span>
                                                            <span class="old__price"> ${{$product->price}}</span>
                                                        </div> 
                                                        <div class="product__card--footer">
                                                            <a class="product__card--btn primary__btn" href="{{route('productdetail',$product->id)}}">
                                                                View Detail
                                                            </a>
                                                        </div>  
                                                    </div>
                                                </article>
                                            </div>
                                            {{-- Quick View --}}
                                            <div class="modal fade" id="examplemodal-{{$product->id}}" tabindex="-1" aria-hidden="true">
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
                                                                                    href="{{asset('uploads/products/'.$product->image)}}">
                                                                                        <img class="product__media--preview__items--img" 
                                                                                        src="{{asset('uploads/products/'.$product->image)}}" alt="product-media-img">
                                                                                    </a>
                                                                                    <div class="product__media--view__icon">
                                                                                        <a class="product__media--view__icon--link glightbox" 
                                                                                        href="{{asset('uploads/products/'.$product->image)}}" data-gallery="product-media-preview">
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
                                                                                    src="{{asset('uploads/products/'.$product->image)}}" alt="product-nav-img">
                                                                                </div>
                                                                            </div>
                                                                            @foreach ($product->galleries as $items)
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
                                                                                {{$product->name->kh?$product->name->kh:$product->name->en}}
                                                                            @else
                                                                                {{$product->name->en}}
                                                                            @endif
                                                                        </h2>
                                                                            
                                                                        <div class="product__card--price mb-15">
                                                                            <span class="current__price">${{$product->discount}}</span>
                                                                            <span class="old__price"> ${{$product->price}}</span>
                                                                        </div>
                                                                        <p class="product__details--info__desc mb-15">
                                                                            @if (config('app.locale')=='kh')
                                                                                {{$product->short_des->kh?$product->short_des->kh:$product->short_des->en}}
                                                                            @else
                                                                                {{$product->short_des->en}}
                                                                            @endif
                                                                        </p>
                                                                        <div class="product__variant">
                                                                            <div class="product__variant--list mb-20">
                                                                                <fieldset class="variant__input--fieldset">
                                                                                    <legend class="product__variant--title mb-10">Capacity:</legend>
                                                                                    <ul class="variant__size d-flex">
                                                                                        @if (!empty($product->capacity))
                                                                                            @php
                                                                                                $capacitys = explode(',',$product->capacity)
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
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->
        
        <!-- Start product section -->
        <section class="deal__product--section4 section--padding pt-0">
            <div class="container">
                <div class="section__heading  border-bottom mb-30">
                    <h2 class="section__heading--maintitle">@lang('website.hot-sale')</h2>
                </div>
                <div class="product__section--inner">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="banner__area position__relative">
                                <a class="banner__thumbnail display-block" href="{{url('product')}}"><img class="banner__thumbnail--img banner__max--height4" src="{{asset('assets/img/banner/banner15.webp')}}" alt="banner-img">
                                    <div class="banner__content--style4 right">
                                        <span class="banner__content--style4__subtitle">Starting at <span>$79.9</span></span>
                                        <h2 class="banner__content--style4__title">MOST <span>ESSENTIALS</span></h2>
                                        <h3 class="banner__content--style4__title2">SHOP AND SAVE BIG</h3>
                                        <span class="banner__content--style4__btn primary__btn">Shop now 
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- @foreach ($productHot as $item) --}}
                        <div class="col-xl-3  col-lg-4 col-md-6">
                            <div class="deals__product--card">
                                <div class="deals-new">
                                    <div class="deals__product--card__thumbnail">
                                    <a class="display-block" href="{{route('productdetail',$productHot->id)}}">
                                        <img class="deals__product--card__thumbnail--img" src="{{asset('uploads/products/'.$productHot->image)}}" alt="product-img">
                                    </a>
                                    </div>
                                    <div class="deals__product--card__content text-center">
                                        <h3 class="deals__product--title"><a href="{{route('productdetail',$productHot->id)}}">
                                            @if (config('app.locale')=='kh')
                                                {{$productHot->name->kh ? $productHot->name->kh : $productHot->name->en}}
                                            @else
                                                {{$productHot->name->en}}
                                            @endif
                                        </a></h3>
                                        <div class="product__card--price">
                                            <span class="current__price">${{$productHot->discount}}</span>
                                            <span class="old__price"> ${{$productHot->price}}</span>
                                        </div>    
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start shipping section -->
        <section class="shipping__section">
            <div class="container">
                @if (!empty($banner->image))
                    <img src="{{asset('uploads/banners/'.$banner->image)}}" alt="banner" class="image-banner">
                @else
                    <img src="{{asset('assets/img/banner/breadcrumb-banner.webp')}}" alt="banner" class="image-banner">
                @endif
                {{-- <img src="{{asset('uploads/banners/'.$banner->image)}}" alt="banner" class="image-banner"> --}}
            </div>
        </section>
        <!-- End shipping section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding pt-0">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom d-flex justify-content-between align-items-end mb-30">
                    <h2 class="section__heading--maintitle">@lang('website.lastest-news')</h2>
                    <a class="view__all--link"href="{{url('news')}}">@lang('website.view-all')</a>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach ($news as $item)
                            <div class="swiper-slide">
                                <div class="blog__card">
                                    <div class="blog__card--thumbnail">
                                        <a class="blog__card--thumbnail__link" href="{{url('blogDetail')}}"><img class="blog__card--thumbnail__img" src="{{asset('uploads/blogs/'.$item->thumbnail)}}" alt="blog-img"></a>
                                        <span class="blog__card--meta__date">20 <br> Oct</span>  
                                    </div>
                                    <div class="blog__card--content">
                                        <span class="blog__card--meta">By: Rasalina</span>
                                        <h3 class="blog__card--title"><a href="{{url('blogDetail')}}">
                                            @if (config('app.locale')=='kh')
                                                {{$item->title->kh ? $item->title->kh : $item->title->en}}
                                            @else
                                                {{$item->title->en}}
                                            @endif
                                        </a></h3>
                                        <p class="blog__card--desc">
                                            @if (config('app.locale')=='kh')
                                                {{$item->summary->kh ? $item->summary->kh : $item->summary->en}}
                                            @else
                                                {{$item->summary->en}}
                                            @endif
                                        </p>
                                        <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                            <a class="blog__card--btn__link" href="{{url('blogDetail')}}">Read more 
                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                            <ul class="social__share blog__card--social d-flex">
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://www.facebook.com">
                                                        <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"/>
                                                        </svg>
                                                        <span class="visually-hidden">Facebook</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"/>
                                                        </svg>
                                                        <span class="visually-hidden">Twitter</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://www.instagram.com">
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"/>
                                                        </svg>  
                                                        <span class="visually-hidden">Instagram</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://www.youtube.com">
                                                        <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z" fill="currentColor"/>
                                                        </svg>
                                                        <span class="visually-hidden">Youtube</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>    
                                        
                                    </div>
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
        </section>
        <!-- End blog section -->

    </main>
@endsection