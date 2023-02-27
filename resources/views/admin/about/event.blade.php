@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')


<section class="py-3">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-lg-3">
                            <div class="position-relative hover-scale">
                                <div class="hover-scale-in">
                                    <img class="w-100" src="{{asset('customer/img/event/2.jpg')}}" title="" alt="">
                                </div>
                               
                            </div>
                            <div class="position-relative hover-scale mt-3">
                                <div class="hover-scale-in">
                                    <img class="w-100" src="{{asset('customer/img/event/4.jpg')}}" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative hover-scale">
                                <div class="hover-scale-in">
                                    <img class="w-100" src="{{asset('customer/img/event/7.jpg')}}" title="" alt="">
                                </div>
                                </div>
                            </div>
                         <div class="col-lg-3">
                            <div class="position-relative hover-scale">
                                <div class="hover-scale-in">
                                    <img class="w-100" src="{{asset('customer/img/event/1.jpg')}}" title="" alt="">
                                </div>
                            </div>
                            <div class="position-relative hover-scale mt-3">
                                <div class="hover-scale-in">
                                    <img class="w-100" src="{{asset('customer/img/event/3.jpg')}}" title="" alt="">
                                </div>  
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="row justify-content-center section-heading">
                        <div class="col-lg-6 text-center">
                            <h3 class="fw-500 h2 m-0">Event Gallery</h3>
                        </div>
                    </div>
                    <div class="swiper-hover-arrow position-relative">
                        <div class="swiper swiper-container" data-swiper-options='{
                              "slidesPerView": 2,
                              "spaceBetween": 10,
                              "loop": true,
                              "pagination": {
                                "el": ".swiper-pagination",
                                "clickable": true
                                },
                              "navigation": {
                                "nextEl": ".swiper-next-02",
                                "prevEl": ".swiper-prev-02"
                              },
                              "autoplay": {
                                "delay": 3500,
                                "disableOnInteraction": false
                              },
                              "breakpoints": {
                                "600": {
                                  "slidesPerView": 3
                                },
                                "991": {
                                  "slidesPerView": 3,
                                  "spaceBetween": 10
                                },
                                "1200": {
                                  "slidesPerView": 4,
                                  "spaceBetween": 24
                                }
                              }
                        }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-card-3">
                                        <div class="product-card-image">
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/event/7.jpg')}}" title="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-3">
                                        <div class="product-card-image">
                                           <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/event/3.jpg')}}" title="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-3">
                                        <div class="product-card-image">
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/event/4.jpg')}}" title="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-3">
                                        <div class="product-card-image">
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/event/2.jpg')}}" title="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-3">
                                        <div class="product-card-image">
                                           <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/event/7.jpg')}}" title="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-3">
                                        <div class="product-card-image">
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/event/7.jpg')}}" title="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination mt-4 d-lg-none position-relative"></div>
                        </div>
                        <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i class="bi bi-chevron-right"></i> </div>
                        <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi bi-chevron-left"></i></div>
                    </div>
                </div>
            </section>
@endsection