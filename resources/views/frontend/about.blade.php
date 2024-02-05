@extends('layout.master')
@section('title')
    About Page
@endsection
@section('content')

    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg1" 
        style="background-image: url('{{asset('uploads/banners/'.$banners->image)}}')">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <!-- <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title">About Us</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="index.html" class="breadcrumb-text">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>About Us</span></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start about section -->
        <section class="about__section section--padding mb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__thumb d-flex">
                            <div class="about__thumb--items">
                                <img class="about__thumb--img border-radius-5" src="{{asset('uploads/site-setting/'.$abouts->image)}}" alt="about-thumb">
                            </div>
                            <div class="about__thumb--items position__relative">
                                <img class="about__thumb--img border-radius-5" src="{{asset('uploads/site-setting/'.$abouts->image2)}}" alt="about-thumb">
                                <div class="banner__bideo--play about__thumb--play">
                                    <a class="banner__bideo--play__icon about__thumb--play__icon glightbox" href="https://vimeo.com/115041822" data-gallery="video">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 31 37">
                                            <path id="Polygon_1" data-name="Polygon 1" d="M16.783,2.878a2,2,0,0,1,3.435,0l14.977,25.1A2,2,0,0,1,33.477,31H3.523a2,2,0,0,1-1.717-3.025Z" transform="translate(31) rotate(90)" fill="currentColor"/>
                                        </svg> 
                                        <span class="visually-hidden">bideo play</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <h2 class="about__content--maintitle mb-25">
                                @if (config('app.locale')=='kh')
                                    {{$abouts->title_kh?$abouts->title_kh:$abouts->title_eng}}
                                @else
                                    {{$abouts->title_eng}}
                                @endif
                            </h2>
                            <p class="about__content--desc mb-25">
                                @if (config('app.locale')=='kh')
                                    {!!$abouts->description_kh?$abouts->description_kh:$abouts->description_eng!!}
                                @else
                                    {!!$abouts->description_eng!!}
                                @endif
                            </p>
                            <div class="about__author position__relative">
                                <h3 class="about__author--name h4">
                                    @if (config('app.locale')=='kh')
                                        {{$abouts->manager_kh?$abouts->manager_kh:$abouts->manager_eng}}
                                    @else
                                        {{$abouts->manager_eng}}
                                    @endif
                                </h3>
                                <span class="about__author--rank">General Manager</span>
                                <img class="about__author--signature" 
                                src="{{asset('uploads/site-setting/'.$abouts->image3)}}" alt="signature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about section -->

        <!-- Start team members section -->
        <section class="team__section section--padding">
            <div class="container">
                <div class="d-flex p-3 container-box">
                    <div class="cart-box">
                        <img src="{{asset('uploads/site-setting/'.$abouts->image4)}}" alt="icon" class="icon1">
                        <a href="" class="title-box"><h3>Our Vision</h3></a>
                        <p class="paragraph">
                            @if (config('app.locale')=='kh')
                                {{$abouts->vision_kh?$abouts->vision_kh:$abouts->vision_eng}}
                            @else
                                {{$abouts->vision_eng}}
                            @endif
                        </p>
                    </div>
                    <div class="cart-box">
                        <img src="{{asset('uploads/site-setting/'.$abouts->image5)}}" alt="icon" class="icon1">
                        <a href="" class="title-box"><h3>Our Mission</h3></a>
                        <p class="paragraph">
                            @if (config('app.locale')=='kh')
                                {{$abouts->ourmission_kh?$abouts->ourmission_kh:$abouts->ourmission_eng}}
                            @else
                                {{$abouts->ourmission_eng}}
                            @endif
                        </p>
                    </div>  
                    <div class="cart-box">
                        <img src="{{asset('uploads/site-setting/'.$abouts->image6)}}" alt="icon" class="icon1">
                        <a href="" class="title-box"><h3>Our Values</h3></a>
                        <p class="paragraph">
                            @if (config('app.locale')=='kh')
                                {{$abouts->ourvalues_kh?$abouts->ourvalues_kh:$abouts->ourvalues_eng}}
                            @else
                                {{$abouts->ourvalues_eng}}
                            @endif
                        </p>
                    </div>  
                </div>
            </div>
        </section>
        <!-- End team members section -->

        <!-- Start testimonial section -->
        <section class="testimonial__section testimonial__bg section--padding pt-0">
            <div class="container">
                <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">What People Are Saying</h2>
                </div>
                <div class="testimonial__section--inner">
                    <div class="testimonial__active--one  swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="{{asset('assets/img/other/testimonial-thumb1.webp')}}" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="{{asset('assets/img/other/testimonial-thumb2.webp')}}" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="{{asset('assets/img/other/testimonial-thumb3.webp')}}" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="{{asset('assets/img/other/testimonial-thumb4.webp')}}" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="{{asset('assets/img/other/testimonial-thumb5.webp')}}" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="{{asset('assets/img/other/testimonial-thumb4.webp')}}" alt="testimonial-img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper__nav--btn swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <div class="swiper__nav--btn swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </div>
                    </div>
                    <div class="testimonial__active--two swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__items--content">
                                    <p class="testimonial__items--desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <span class="testimonial__items--subtitle">Calire copper</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__items--content">
                                    <p class="testimonial__items--desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <span class="testimonial__items--subtitle">Sovannara Sak</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End testimonial section -->

        <!-- Start brand section -->
        <div class="brand__section brand__section--style3 section--padding">
            <div class="container">
                <div class="brand__section--inner__style3 d-flex justify-content-between align-items-center">
                    @foreach ($partners as $item)
                        <div class="brang__logo--items">
                            <img class="brang__logo--img" src="{{asset('uploads/partners/'.$item->image)}}" alt="brand-logo">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End brand section -->
    </main>

@endsection