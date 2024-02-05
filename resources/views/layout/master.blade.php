<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/Brother.ico')}}">
    
  <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/glightbox.min.css')}}">
  <link href="{{asset('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap')}}" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>
    <header class="header__section">
        <div class="header__topbar border-bottom">
            <div class="container">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <ul class="header__topbar--info d-none d-lg-flex">
                        <li class="header__info--list">
                            <a class="header__info--link" target="_blank" href="{{asset('https://www.google.com/maps/place/Phnom+Penh,+Cambodia/@11.579654,104.7253749,11z/data=!3m1!4b1!4m6!3m5!1s0x3109513dc76a6be3:0x9c010ee85ab525bb!8m2!3d11.5563738!4d104.9282099!16zL20vMGRsd2o?entry=ttu')}}">STORES</a>
                        </li>
                        
                        <li class="header__info--list">
                            <a class="header__info--link" href="{{asset('mailto:info@example.com')}}">
                                <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.368 9.104C7.26133 9.17867 7.13867 9.216 7 9.216C6.86133 9.216 6.744 9.17867 6.648 9.104L0.36 4.624C0.264 4.56 0.178667 4.54933 0.104 4.592C0.04 4.624 0.00800002 4.69867 0.00800002 4.816V11.984C0.00800002 12.112 0.0506667 12.2187 0.136 12.304C0.221333 12.3893 0.322667 12.432 0.44 12.432H13.56C13.6773 12.432 13.7787 12.3893 13.864 12.304C13.96 12.2187 14.008 12.112 14.008 11.984V4.816C14.008 4.69867 13.9707 4.624 13.896 4.592C13.8213 4.54933 13.736 4.56 13.64 4.624L7.368 9.104ZM6.76 8.32C6.84533 8.37333 6.92533 8.4 7 8.4C7.08533 8.4 7.16533 8.37333 7.24 8.32L12.52 4.56C12.6373 4.464 12.696 4.352 12.696 4.224V0.783999C12.696 0.666666 12.6533 0.570666 12.568 0.495999C12.4933 0.410666 12.3973 0.367999 12.28 0.367999H1.72C1.60267 0.367999 1.50667 0.410666 1.432 0.495999C1.35733 0.570666 1.32 0.666666 1.32 0.783999V4.224C1.32 4.37333 1.37333 4.48533 1.48 4.56L6.76 8.32ZM3.784 2.064H9.96C10.088 2.064 10.1947 2.112 10.28 2.208C10.3653 2.29333 10.408 2.4 10.408 2.528C10.408 2.64533 10.3653 2.74667 10.28 2.832C10.1947 2.91733 10.088 2.96 9.96 2.96H3.784C3.656 2.96 3.54933 2.91733 3.464 2.832C3.37867 2.74667 3.336 2.64533 3.336 2.528C3.336 2.4 3.37867 2.29333 3.464 2.208C3.54933 2.112 3.656 2.064 3.784 2.064ZM3.784 3.632H9.96C10.088 3.632 10.1947 3.68 10.28 3.776C10.3653 3.86133 10.408 3.96267 10.408 4.08C10.408 4.19733 10.3653 4.304 10.28 4.4C10.1947 4.48533 10.088 4.528 9.96 4.528H3.784C3.656 4.528 3.54933 4.48533 3.464 4.4C3.37867 4.31467 3.336 4.21333 3.336 4.096C3.336 3.968 3.37867 3.86133 3.464 3.776C3.54933 3.68 3.656 3.632 3.784 3.632Z" fill="#FF2D37"/>
                                </svg>
                                 info@brother-marketing.com</a>
                        </li>
                    </ul>
                    <div class="header__top--right d-flex align-items-center">
                        <ul class="quickview__social--wrapper mt-0 d-flex">
                            <li class="quickview__social--list">
                                <a class="quickview__social--icon" target="_blank" href="{{asset('https://www.facebook.com')}}">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                        <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                    </svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                            <li class="quickview__social--list">
                                <a class="quickview__social--icon" target="_blank" href="{{asset('https://twitter.com')}}">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                        <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                    </svg>
                                    <span class="visually-hidden">Twitter</span>
                                </a>
                            </li>
                            <li class="quickview__social--list">
                                <a class="quickview__social--icon" target="_blank" href="{{asset('https://www.instagram.com')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                        <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                            <li class="quickview__social--list">
                                <a class="quickview__social--icon" target="_blank" href="{{asset('https://www.youtube.com')}}">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                        <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                    </svg>
                                    <span class="visually-hidden">Youtube</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__header header__sticky">
            <div class="container">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                            <span class="visually-hidden">Offcanvas Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="{{url('/')}}"><img class="main__logo--img" src="{{asset('assets/img/logo/Brother-Marketing.png')}}" alt="logo-img"></a></h1>
                    </div>
                    <div class="header__search--widget d-none d-lg-block header__sticky--none">
                        <form class="d-flex header__search--form border-radius-5" action="#">
                            <!-- <div class="header__select--categories select">
                                <select class="header__select--inner">
                                    <option selected value="1"> All categories</option>
                                    <option value="2">Car Oil</option>
                                    <option value="3">Morto Orl</option>
                                    <option value="4">Container Oil </option>
                                    <option value="5">Car Acessories </option>
                                </select>
                            </div> -->
                            <div class="header__search--box">
                                <label>
                                    <input class="header__search--input" placeholder="@lang('website.search-for-product')" type="text">
                                </label>
                                <button class="header__search--button bg__primary text-white" aria-label="search button" type="submit">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z" fill="currentColor"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="header__menu d-none d-lg-block header__sticky--block">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{url()->current()==url('/')?"active":null}}" href="{{url('/')}}">@lang('website.home')
                                    </a>
                                </li>
                                <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link {{url()->current()==url('about')?"active":null}}" href="{{url('about')}}">@lang('website.about-us')
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{url()->current()==url('product')?"active":null}}" href="{{url('product')}}">@lang('website.products')</a>  
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{url()->current()==url('services')?"active":null}}" href="{{url('services')}}">@lang('website.services')
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{url()->current()==url('news')?"active":null}}" href="{{url('news')}}">@lang('website.news')
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{url()->current()==url('contact')?"active":null}}" href="{{url('contact')}}">@lang('website.contact-us')</a>  
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__account header__sticky--none">
                        <ul class="header__account--wrapper d-flex align-items-center">
                            <li class="header__account--items d-none d-lg-block">
                                <a href="" class="call-phone"><span>016 437 343</span></a>
                                <a href="" class="call-phone"><span>/ 011 437 343</span></a>
                            </li>
                            <li class="header__account--items  header__account--search__items mobile__d--block d-sm-2-none">
                                <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                    <span class="visually-hidden">Search</span>  
                                </a>
                            </li>
                            <li class="header__account--items header__minicart--items">
                                <a class="header__account--b minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="white" d="m7.772 2.439l1.077-.344c1.008-.322 2.086.199 2.518 1.217l.86 2.028c.375.883.167 1.922-.514 2.568L9.82 9.706c.117 1.076.478 2.135 1.084 3.177a8.68 8.68 0 0 0 2.271 2.595l2.276-.76c.862-.287 1.801.044 2.33.821l1.232 1.81c.616.904.505 2.15-.258 2.916l-.818.821c-.814.817-1.976 1.114-3.052.778c-2.539-.792-4.873-3.143-7.003-7.053c-2.133-3.916-2.885-7.24-2.258-9.968c.264-1.148 1.082-2.063 2.15-2.404"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__account header__sticky--block">
                        <ul class="header__account--wrapper d-flex align-items-center">
                            <li class="header__account--items2  header__account--search__items d-sm-2-none">
                                <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                    <span class="visually-hidden">Search</span>  
                                </a>
                            </li>
                            <li class="header__account--items1 d-none d-lg-block">
                                <a href="" class="call-phone"><span>016 437 343</span></a>
                                <a href="" class="call-phone"><span>/ 011 437 343</span></a>
                            </li>
                            <li class="header__account--items header__minicart--items">
                                <a class="header__account--b minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="white" d="m7.772 2.439l1.077-.344c1.008-.322 2.086.199 2.518 1.217l.86 2.028c.375.883.167 1.922-.514 2.568L9.82 9.706c.117 1.076.478 2.135 1.084 3.177a8.68 8.68 0 0 0 2.271 2.595l2.276-.76c.862-.287 1.801.044 2.33.821l1.232 1.81c.616.904.505 2.15-.258 2.916l-.818.821c-.814.817-1.976 1.114-3.052.778c-2.539-.792-4.873-3.143-7.003-7.053c-2.133-3.916-2.885-7.24-2.258-9.968c.264-1.148 1.082-2.063 2.15-2.404"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom d-none d-lg-block">
            <div class="container">
                <div class="header__bottom--inner__style3 position__relative d-flex align-items-center justify-content-between">
                    <div class="header__menu header__menu--style4">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link  {{url()->current()== url('/')?"active":null}}" 
                                        href="{{url('/')}}">
                                        @lang('website.home')
                                    </a>
                                </li>
                                <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link {{url()->current()== url('about') ?"active":null}}" 
                                        href="{{url('about')}}">
                                        @lang('website.about-us')
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{url()->current()==url('product')?"active":null}}" href="{{url('product')}}">@lang('website.products')</a>  
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{url()->current()==url('services')?"active":null}}" href="{{url('services')}}">@lang('website.services')
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{url()->current()==url('news')?"active":null}}" href="{{url('news')}}">@lang('website.news')
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link {{url()->current() == url('contact')?"active":null}}" href="{{url('contact')}}">@lang('website.contact-us')</a>  
                                </li>                                                                 
                            </ul>
                        </nav>
                    </div>
                    <div class="language__currency style4 d-none d-lg-block">
                        <ul class="d-flex align-items-center">
                            <li class="language__currency--list">
                                <a class="account__currency--link text-black" 
                                    href="{{route('changeLang', ['lang' => 'kh'])}}">
                                    <img class="currency__link--icon" src="{{asset('assets/img/icon/cambodia.png')}}" alt="currency">
                                </a>
                            </li>
                            <li class="language__currency--list">
                                <a class="account__currency--link text-black" 
                                    href="{{route('changeLang', ['lang' => 'en'])}}">
                                    <img class="currency__link--icon2" src="{{asset('assets/img/icon/English.png')}}" alt="currency">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="{{url('/')}}">
                        <img src="{{asset('assets/img/logo/Brother-Marketing.png')}}" alt="Grocee Logo" width="158" height="36">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{url('/')}}">@lang('website.home')</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{url('about')}}">@lang('website.about-us')</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{url('product')}}">@lang('website.products')</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{url('services')}}">@lang('website.services')</a>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="{{url('news')}}">@lang('website.news')</a></li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="{{url('contact')}}">@lang('website.contact-us')</a></li>
                    </ul>
                    <div class="offcanvas__account--wrapper d-flex">
                        <ul class="d-flex align-items-center">
                            <li class="language__currency--list">
                                <a class="account__currency--link text-black" href="{{route('changeLang',['lang'=>'kh'])}}">
                                    <img class="currency__link--icon" src="{{asset('assets/img/icon/cambodia.png')}}" alt="currency">
                                </a>
                                </li>
                                <li class="language__currency--list">
                                <a class="account__currency--link text-black" href="{{route('changeLang',['lang'=>'en'])}}">
                                    <img class="currency__link--icon2" src="{{asset('assets/img/icon/English.png')}}" alt="currency">
                                </a>
                            </li>
                        </ul>
                    </div>   
                </nav>
            </div>
        </div>

        <!-- Start serch box area -->
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">@lang('website.search-product')</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="@lang('website.search-product')" type="text">
                    </label>
                    <button class="predictive__search--button text-white" aria-label="search button"><svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
            </button>
        </div>
        <!-- End serch box area -->
        
    </header>

    @yield('content')

    <!-- Start footer section -->
     <footer class="footer__section footer__bg">
        <div class="container">
            
            <div class="main__footer">
                <div class="row ">
                    <div class="col-lg-4 col-md-10">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title">About Us <button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <div class="footer__widget--inner">
                                <p class="footer__widget--desc">Corporate clients and leisure travelers has
                                    been relying on Groundlink for dependable
                                    safe, and professional chauffeured car end
                                    service in major cities across World.</p>
                                <ul class="social__share footer__social d-flex">
                                    <li class="social__share--list">
                                        <a class="social__share--icon__style2" target="_blank" href="">
                                            <svg width="11" height="17" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="social__share--list">
                                        <a class="social__share--icon__style2" target="_blank" href="https://twitter.com">
                                            <svg width="16" height="14" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="social__share--list">
                                        <a class="social__share--icon__style2" target="_blank" href="https://www.instagram.com">
                                            <svg width="16" height="15" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"/>
                                            </svg>  
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                    <li class="social__share--list">
                                        <a class="social__share--icon__style2" target="_blank" href="https://www.pinterest.com">
                                            <svg width="16" height="17" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.5625 7.75C13.5625 4.00391 10.5273 0.96875 6.78125 0.96875C3.03516 0.96875 0 4.00391 0 7.75C0 10.6484 1.77734 13.082 4.29297 14.0664C4.23828 13.5469 4.18359 12.7266 4.32031 12.125C4.45703 11.6055 5.11328 8.76172 5.11328 8.76172C5.11328 8.76172 4.92188 8.35156 4.92188 7.75C4.92188 6.82031 5.46875 6.10938 6.15234 6.10938C6.72656 6.10938 7 6.54688 7 7.06641C7 7.64062 6.61719 8.51562 6.42578 9.33594C6.28906 9.99219 6.78125 10.5391 7.4375 10.5391C8.64062 10.5391 9.57031 9.28125 9.57031 7.44922C9.57031 5.80859 8.39453 4.6875 6.75391 4.6875C4.8125 4.6875 3.69141 6.13672 3.69141 7.61328C3.69141 8.21484 3.91016 8.84375 4.18359 9.17188C4.23828 9.22656 4.23828 9.30859 4.23828 9.36328C4.18359 9.58203 4.04688 10.0469 4.04688 10.1289C4.01953 10.2656 3.9375 10.293 3.80078 10.2383C2.95312 9.82812 2.43359 8.59766 2.43359 7.58594C2.43359 5.45312 3.99219 3.48438 6.91797 3.48438C9.26953 3.48438 11.1016 5.17969 11.1016 7.42188C11.1016 9.74609 9.625 11.6328 7.57422 11.6328C6.89062 11.6328 6.23438 11.2773 6.01562 10.8398C6.01562 10.8398 5.6875 12.1523 5.60547 12.4531C5.44141 13.0547 5.03125 13.793 4.75781 14.2305C5.38672 14.4492 6.07031 14.5312 6.78125 14.5312C10.5273 14.5312 13.5625 11.4961 13.5625 7.75Z" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Pinterest</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title ">Menu<button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">
                                
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="my-account.html">About Us</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="cart.html">Product</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="cart.html">Services</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="login.html">News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title ">Page <button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="contact.html">Contact Us</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="about.html">About Us</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="wishlist.html">Wishlist</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title ">Facebook Like Page<button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                    <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <div class="footer__page">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fprofile.php%3Fid%3D100090094434639&tabs&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" height="130" style="width: 100%;border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">
                    <div class="footer__logo">
                        <a class="footer__logo--link" href="home.html"><img class="footer__img" src="assets/img/logo/Brother-Marketing-footer.png" alt="logo-img"></a>
                    </div>
                    <p class="copyright__content" style="margin-bottom: 0 !important;">
                        <span class="text__secondary">© 2024</span> 
                        Brother Marketing
                        <!-- <a class="copyright__content--link" target="_blank" href="https://themeforest.net/search/hooktheme">Hooktheme</a>--> .  All Rights Reserved.</p>
                    <p class="copyright__content">
                        Design by:<a class="copyright__content--link" target="_blank" href="https://www.camgotech.com">www.camgotech.com</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <!-- Scroll top bar -->
     <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

     <!-- All Script JS Plugins here  -->
     <script src="{{asset('assets/js/vendor/popper.js')}}" defer="defer"></script>
     <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}" defer="defer"></script>
     <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
     <script src="{{asset('assets/js/plugins/glightbox.min.js')}}"></script>
   
    <!-- Customscript js -->
    <script src="{{asset('assets/js/script.js')}}"></script>
  
</body>
</html>