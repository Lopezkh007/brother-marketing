@extends('layout.master')
@section('title')
    Service-Detail
@endsection
@section('content')
    <!-- Start preloader -->
    {{-- <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>	

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div> --}}
    <!-- End preloader -->

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

        <!-- Start blog details section -->
        <section class="blog__details--section section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="blog__details--wrapper">
                            <div class="entry__blog">
                                <div class="blog__post--header mb-30">
                                    <h2 class="post__header--title mb-15">
                                        @if (config('app.locale')=='kh')
                                            {{$services->title->kh?$services->title->kh:$services->title->en}}
                                        @else
                                            {{$services->title->en}}
                                        @endif
                                    </h2>
                                    <p class="blog__post--meta">Posted by : admin / On : May 26, 2022 / In : <a class="blog__post--meta__link" href="{{url('productDetail')}}">Company, Image, Travel</a></p>                                     
                                </div>
                                <div class="blog__thumbnail mb-30">
                                    <img class="blog__thumbnail--img border-radius-10" 
                                    src="{{asset('uploads/service/'.$services->thumbnail)}}" alt="blog-img" width="100%">
                                </div>
                                <div class="blog__details--content">
                                    <h3 class="blog__details--content__subtitle mb-25">
                                        @if (config('app.locale')=='kh')
                                            {{$services->summary->kh?$services->summary->kh:$services->summary->en}}
                                        @else
                                            {{$services->summary->en}}
                                        @endif
                                    </h3>
                                    <p class="blog__details--content__desc mb-20">
                                        @if (config('app.locale')=='kh')
                                            {{$services->description->kh?$services->description->kh:$services->description->en}}
                                        @else
                                            {{$services->description->en}}
                                        @endif
                                    </p>
                                    <p class="blog__details--content__desc mb-30"> Vel ipsa officiis nobis eveniet omnis consequuntur neque quasi, in, optio rerum suscipit totam odio. Alias necessitatibus nulla accusantium voluptatem ipsum voluptatum, vero in impedit nobis cupiditate ea, dicta eos facilis eaque optio laudantium non neque itaque? Possimus officia aut accusamus illum, adipisci, nihil numquam minus eum fugit, beatae minima facilis magni.</p>
                                    <blockquote class="blockquote__content bg__gray--color mb-30">
                                        <p class="blockquote__content--desc">Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                    </blockquote>
                                    <p class="blog__details--content__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus sapiente omnis sunt labore mollitia, quaerat incidunt sequi, ut alias accusamus nostrum magni fugit facilis dignissimos illum repellendus et numquam adipisci quos. Eos omnis maiores beatae cum a consequatur magnam sequi neque, at numquam qui ipsam unde veritatis voluptates quam dicta! Ipsam, mollitia illo fuga vel culpa reprehenderit quisquam maxime nesciunt. Sunt quaerat inventore aspernatur quibusdam corrupti numquam mollitia exercitationem rem alias consectetur hic iusto dignissimos nostrum odio, cumque impedit.</p>
                                </div>
                            </div>
                            <div class="blog__tags--social__media d-flex align-items-center justify-content-between">
                                <div class="blog__tags--media d-flex align-items-center">
                                    <label class="blog__tags--media__title">Releted Tags :</label>
                                    <ul class="d-flex">
                                        <li class="blog__tags--media__list"><a class="blog__tags--media__link" href="{{url('servicess')}}">Popular</a></li>
                                        <li class="blog__tags--media__list"><a class="blog__tags--media__link" href="{{url('servicess')}}">Business</a></li>
                                        <li class="blog__tags--media__list"><a class="blog__tags--media__link" href="{{url('servicess')}}">desgin</a></li>
                                        <li class="blog__tags--media__list"><a class="blog__tags--media__link" href="{{url('servicess')}}">Service</a></li>
                                    </ul>
                                </div>
                                <div class="blog__social--media d-flex align-items-center">
                                    <label class="blog__social--media__title">Social Share :</label>
                                    <ul class="d-flex">
                                        <li class="blog__social--media__list">
                                            <a class="blog__social--media__link" target="_blank" 
                                            href="{{asset($contact->facebook)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="blog__social--media__list">
                                            <a class="blog__social--media__link" target="_blank" 
                                            href="{{asset($contact->twitter)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                    <path data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="blog__social--media__list">
                                            <a class="blog__social--media__link" target="_blank" 
                                            href="{{asset($contact->instagram)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="blog__social--media__list">
                                            <a class="blog__social--media__link" target="_blank" 
                                            href="{{asset($contact->youtube)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                    <path data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="related__post--area mb-50">
                                <div class="section__heading border-bottom mb-30">
                                    <h2 class="section__heading--maintitle">Related <span>Articles</span></h2>
                                </div>
                                <div class="row row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n28">
                                    <div class="col mb-28">
                                        <div class="related__post--items">
                                            <div class="related__post--thumb border-radius-10 mb-20">
                                                <a class="display-block" href="{{url('blogDetail')}}"><img class="related__post--img display-block border-radius-10" src="assets/img/blog/related-post1.webp" alt="related-post"></a>
                                            </div>
                                            <div class="related__post--text">
                                                <h3 class="related__post--title mb-10"><a class="related__post--title__link" href="{{url('blogDetail')}}">Post With Gallery</a></h3>
                                                <span class="related__post--deta">February 14, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mb-28">
                                        <div class="related__post--items">
                                            <div class="related__post--thumb border-radius-10 mb-20">
                                                <a class="display-block" href="{{url('blogDetail')}}"><img class="related__post--img display-block border-radius-10" src="assets/img/blog/related-post2.webp" alt="related-post"></a>
                                            </div>
                                            <div class="related__post--text">
                                                <h3 class="related__post--title mb-10"><a class="related__post--title__link" href="{{url('blogDetail')}}">Post With Vedio</a></h3>
                                                <span class="related__post--deta">February 14, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="blog__sidebar--widget left widget__area">
                            <div class="single__widget widget__search widget__bg">
                                <h2 class="widget__title h3">Search Objects</h2>
                                <form class="widget__search--form" action="#">
                                    <label>
                                        <input class="widget__search--form__input" placeholder="Search..." type="text">
                                    </label>
                                    <button class="widget__search--form__btn" aria-label="search button">
                                        <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                    </button>
                                </form>
                            </div>
                            <div class="single__widget widget__bg">
                                <h2 class="widget__title h3">Post Article</h2>
                                <div class="widget__post--article">
                                    <div class="post__article--items d-flex align-items-center">
                                        <div class="post__article--thumbnail">
                                            <a class="display-block" href="{{url('blogDetail')}}">
                                                <img class="post__article--thumbnail__img" src="assets/img/blog/blog1.webp" alt="article-img">
                                            </a>
                                        </div>
                                        <div class="post__article--content">
                                            <h3 class="post__article--content__title"><a href="{{url('blogDetail')}}">Black Air Pods </a></h3>
                                            <span class="meta__deta">May 26, 2022</span>
                                        </div>
                                    </div>
                                    <div class="post__article--items d-flex align-items-center">
                                        <div class="post__article--thumbnail">
                                            <a class="display-block" href="{{url('blogDetail')}}">
                                                <img class="post__article--thumbnail__img" src="assets/img/blog/blog2.webp" alt="article-img">
                                            </a>
                                        </div>
                                        <div class="post__article--content">
                                            <h3 class="post__article--content__title"><a href="{{url('blogDetail')}}">Oil & Lubricants </a></h3>
                                            <span class="meta__deta">May 26, 2022</span>
                                        </div>
                                    </div>
                                    <div class="post__article--items d-flex align-items-center">
                                        <div class="post__article--thumbnail">
                                            <a class="display-block" href="{{url('blogDetail')}}">
                                                <img class="post__article--thumbnail__img" src="assets/img/blog/blog3.webp" alt="article-img">
                                            </a>
                                        </div>
                                        <div class="post__article--content">
                                            <h3 class="post__article--content__title"><a href="{{url('blogDetail')}}">Fluids & Chemicals </a></h3>
                                            <span class="meta__deta">May 26, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog details section -->
    </main>

@endsection