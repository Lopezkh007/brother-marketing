@extends('layout.master')
@section('title')
    Service Page
@endsection
@section('content')

    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg3" 
        style="background-image: url('{{asset('uploads/banners/'.$banner->image)}}')">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding">
            <div class="container">
                <div class="section__heading border-bottom mb-30">
                    <h2 class="section__heading--maintitle">Services</h2>
                </div>
                <div class="blog__section--inner">
                    <div class="row mb--n30">
                        @foreach ($services as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="blog__card">
                                    <div class="blog__card--thumbnail">
                                        <a class="blog__card--thumbnail__link" href="{{url('blogDetail')}}">
                                            <img class="blog__card--thumbnail__img" 
                                            src="{{asset('uploads/service/'.$item->thumbnail)}}" alt="blog-img">
                                        </a>  
                                    </div>
                                    <div class="blog__card--content">
                                        <h3 class="blog__card--title">
                                            <a href="{{url('blogDetail')}}">
                                                @if (config('app.locale')=='kh')
                                                    {{$item->title->kh?$item->title->kh:$item->title->en}}
                                                @else
                                                    {{$item->title->en}}
                                                @endif
                                            </a>
                                        </h3>
                                        <p class="blog__card--desc">
                                            @if (config('app.locale')=='kh')
                                                {{$item->summary->kh?$item->summary->kh:$item->summary->en}}
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
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <div class="pagination__area">
        @if (!empty($services->paginator))
            {{$services->links('paginates.defaul')}}
        @else
            <nav class="pagination justify-content-center">
                <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                    <li class="pagination__list">
                        <a href="#" class="pagination__item--arrow  link ">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg>
                            <span class="visually-hidden">page left arrow</span>
                        </a>
                    <li>
                    <li class="pagination__list"><span class="pagination__item pagination__item--current">1</span></li>
                    <li class="pagination__list">
                        <a href="#" class="pagination__item--arrow  link ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                            <span class="visually-hidden">page right arrow</span>
                        </a>
                    <li>
                </ul>
            </nav>
        @endif
        </div>
        <!-- End blog section -->
    </main>

@endsection