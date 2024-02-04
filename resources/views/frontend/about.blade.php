@extends('layout.master')
@section('title')
    About Page
@endsection
@section('content')

    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg1">
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
                                <img class="about__thumb--img border-radius-5" src="{{asset('assets/img/other/about-thumb-list1.webp')}}" alt="about-thumb">
                            </div>
                            <div class="about__thumb--items position__relative">
                                <img class="about__thumb--img border-radius-5" src="{{asset('assets/img/other/about-thumb-list2.webp')}}" alt="about-thumb">
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
                            <h2 class="about__content--maintitle mb-25">Welceome to Brother Marketing </h2>
                            <p class="about__content--desc mb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo, est repellendus are quia voluptate neque reiciendis ea placeat labore maiores cum, hic ducimus ad a dolorem soluta consectetur adipisci. Perspiciatis quas ab quibusdam is.</p>
                            <p class="about__content--desc mb-25">Itaque accusantium eveniet a laboriosam dolorem? Magni suscipit est corrupti explicabo non perspiciatis, excepturi ut asperiores assumenda rerum? Provident ab corrupti sequi, voluptates repudiandae eius odit aut.</p>
                            <div class="about__author position__relative">
                                <h3 class="about__author--name h4">Sok Leng</h3>
                                <span class="about__author--rank">General Manager</span>
                                <img class="about__author--signature" src="{{asset('assets/img/icon/signature.webp')}}" alt="signature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about section -->
        
        <!-- Start counterup banner section -->
        <!-- <div class="counterup__banner--section counterup__banner__bg2" id="funfactId">
            <div class="container">
                <div class="row row-cols-1 align-items-center">
                    <div class="col">
                        <div class="counterup__banner--inner position__relative d-flex align-items-center justify-content-between">
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">YEARS OF <br>
                                    FOUNDATION</h2>
                                <span class="counterup__number js-counter" data-count="50">0</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">SKILLED TEAM <br>
                                    MEMBERS </h2>
                                <span class="counterup__number js-counter" data-count="100">0</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">HAPPY <br>
                                    CUSTOMERS</h2>
                                <span class="counterup__number js-counter" data-count="80">0</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">MONTHLY <br>
                                    ORDERS</h2>
                                <span class="counterup__number js-counter" data-count="70">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End counterup banner section -->

        <!-- Start team members section -->
        <section class="team__section section--padding">
            <div class="container">
                <div class="d-flex p-3 container-box">
                    <div class="cart-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56" class="icon1"><path fill="#b7b7b7" d="M28.01 46.456c16.556 0 27.99-13.38 27.99-17.56c0-4.201-11.454-17.56-27.99-17.56C11.68 11.335 0 24.694 0 28.895c0 4.18 11.659 17.56 28.01 17.56m0-3.238c-13.482 0-24.424-11.434-24.424-14.323c0-2.438 10.942-14.322 24.424-14.322c13.442 0 24.404 11.884 24.404 14.322c0 2.89-10.962 14.323-24.404 14.323m0-2.848c6.373 0 11.495-5.225 11.495-11.475c0-6.413-5.122-11.474-11.495-11.474c-6.413 0-11.556 5.06-11.515 11.474c.02 6.25 5.102 11.475 11.515 11.475m0-7.663c-2.13 0-3.852-1.722-3.852-3.812c0-2.11 1.721-3.81 3.852-3.81c2.11 0 3.832 1.7 3.832 3.81c0 2.09-1.721 3.812-3.832 3.812"/></svg>
                        <a href="" class="title-box"><h3>Our Vision</h3></a>
                        <p class="paragraph">Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                    <div class="cart-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon1"><g fill="none"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="#b7b7b7" d="M12 2c.375 0 .745.02 1.11.061a1 1 0 0 1-.22 1.988a8 8 0 1 0 7.061 7.061a1 1 0 1 1 1.988-.22c.04.365.061.735.061 1.11c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m-.032 5.877a1 1 0 0 1-.719 1.217A3.002 3.002 0 0 0 12 15a3.002 3.002 0 0 0 2.906-2.25a1 1 0 0 1 1.936.5A5.002 5.002 0 0 1 7 12a5.002 5.002 0 0 1 3.75-4.842a1 1 0 0 1 1.218.719m6.536-5.75a1 1 0 0 1 .617.923v1.83h1.829a1 1 0 0 1 .707 1.707L18.12 10.12a1 1 0 0 1-.707.293H15l-1.828 1.829a1 1 0 0 1-1.415-1.415L13.586 9V6.586a1 1 0 0 1 .293-.707l3.535-3.536a1 1 0 0 1 1.09-.217m-1.383 3.337L15.586 7v1.414H17l1.536-1.535h-.415a1 1 0 0 1-1-1z"/></g></svg>
                        <a href="" class="title-box"><h3>Our Mission</h3></a>
                        <p class="paragraph">Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>  
                    <div class="cart-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="icon1"><g fill="none" stroke="#b7b7b7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path d="M12 8h24l8 10l-20 24L4 18zM4 18h40M24 42l-8-24m8 24l8-24"/><path d="m8 13l-4 5l20 24l20-24l-4-5"/></g></svg>
                        <a href="" class="title-box"><h3>Our Values</h3></a>
                        <p class="paragraph">Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>  
                </div>
            </div>
            <!-- <div class="container">
                <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">Our Team Member</h2>
                </div>
                <div class="team__container">
                    <div class="row mb--n30">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="assets/img/other/team1.webp" alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Bruce Sutton</h3>
                                    <span class="team__content--subtitle">CEO - Founder</span>
                                    <ul class="team__social d-flex justify-content-center align-items-center">
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.facebook.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="15.524" viewBox="0 0 7.667 16.524">
                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://twitter.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="14.489" height="11.384" viewBox="0 0 16.489 13.384">
                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.instagram.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14.497" height="14.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.youtube.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="14.49" height="10.582" viewBox="0 0 16.49 11.582">
                                                    <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="assets/img/other/team2.webp" alt="team img">
                                </div>
                                <div class="team__content">
                                    <h3 class="team__content--title">Ellen Thornton</h3>
                                    <span class="team__content--subtitle">Spa Manager</span>
                                    <ul class="team__social d-flex justify-content-center align-items-center">
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.facebook.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="15.524" viewBox="0 0 7.667 16.524">
                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://twitter.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="14.489" height="11.384" viewBox="0 0 16.489 13.384">
                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.instagram.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14.497" height="14.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.youtube.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="14.49" height="10.582" viewBox="0 0 16.49 11.582">
                                                    <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="assets/img/other/team3.webp" alt="team img">
                                </div>
                                <div class="team__content">
                                    <h3 class="team__content--title">Milton Marsh</h3>
                                    <span class="team__content--subtitle">Products Manager</span>
                                    <ul class="team__social d-flex justify-content-center align-items-center">
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.facebook.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="15.524" viewBox="0 0 7.667 16.524">
                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://twitter.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="14.489" height="11.384" viewBox="0 0 16.489 13.384">
                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.instagram.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14.497" height="14.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.youtube.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="14.49" height="10.582" viewBox="0 0 16.49 11.582">
                                                    <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="assets/img/other/team1.webp" alt="team img">
                                </div>
                                <div class="team__content">
                                    <h3 class="team__content--title">Jackly Smith</h3>
                                    <span class="team__content--subtitle">Senior Maneger</span>
                                    <ul class="team__social d-flex justify-content-center align-items-center">
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.facebook.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="15.524" viewBox="0 0 7.667 16.524">
                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://twitter.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="14.489" height="11.384" viewBox="0 0 16.489 13.384">
                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.instagram.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14.497" height="14.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="team__social--list">
                                            <a class="team__social--icon" target="_blank" href="https://www.youtube.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="14.49" height="10.582" viewBox="0 0 16.49 11.582">
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
                </div>
            </div> -->
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
                                    <span class="testimonial__items--subtitle">Sovannara Sok</span>
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
                    <div class="brang__logo--items">
                        <img class="brang__logo--img" src="{{asset('assets/img/logo/brand-logo1.webp')}}" alt="brand-logo">
                    </div>
                    <div class="brang__logo--items">
                        <img class="brang__logo--img" src="{{asset('assets/img/logo/brand-logo2.webp')}}" alt="brand-logo">
                    </div>
                    <div class="brang__logo--items">
                        <img class="brang__logo--img" src="{{asset('assets/img/logo/brand-logo3.webp')}}" alt="brand-logo">
                    </div>
                    <div class="brang__logo--items">
                        <img class="brang__logo--img" src="{{asset('assets/img/logo/brand-logo4.webp')}}" alt="brand-logo">
                    </div>
                    <div class="brang__logo--items">
                        <img class="brang__logo--img" src="{{asset('assets/img/logo/brand-logo5.webp')}}" alt="brand-logo">
                    </div>
                </div>
            </div>
        </div>
        <!-- End brand section -->

         <!-- Start shipping section -->
         <!-- <section class="shipping__section section--padding">
            <div class="container">
                <div class="shipping__inner mb-0 style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping1.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Free Shipping</h2>
                            <p class="shipping__content--desc">Free shipping over $100</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping2.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Support 24/7</h2>
                            <p class="shipping__content--desc">Contact us 24 hours a day</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping3.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Good Price</h2>
                            <p class="shipping__content--desc">You have 30 days to Return</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping4.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Best Quality</h2>
                            <p class="shipping__content--desc">We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End shipping section -->
    </main>

@endsection