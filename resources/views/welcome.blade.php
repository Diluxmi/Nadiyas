@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')
<main>

<div class="parallax section bg-dark"  data-jarallax-video="mp4:{{asset('customer/web.mp4')}}">
                <div class="container">
                    <div class="row justify-content-center py-10">
                        <div class="col-lg-6 text-center">
                            <h6 class="text-uppercase text-white letter-spacing-3">Exclusive</h6>
                            <h3 class="display-2 text-white font-alt mb-3">Best Collection</h3>
                            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="pt-2">
                                <a class="btn btn-outline-white" href="#">Let's Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
          


</br>

 <!-- Home Slider -->
 <div class="swiper swiper-container" data-swiper-options='{
                  "slidesPerView": 1,
                  "spaceBetween": 15,
                  "loop": true,
                  "centeredSlides": true,
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
                      "slidesPerView": 2
                    },
                    "991": {
                      "slidesPerView": 3
                    },
                    "1200": {
                      "slidesPerView": 3
                    }
                  }
                }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-no-repeat bg-cover bg-center mx-1" style="background-image: url({{asset('customer/img/kids/kids.jpg')}});">
                            <div class="container">
                                <div class="row min-vh-75 align-items-center justify-content-center py-12">
                                    <div class="col-lg-8 text-center">
                                        
                                            <h4 class="fw-500 text-uppercase mb-3">Kids</h4>
                                            <h5 class="">New LookBook</h5>
                                            <div class="pt-2">
                                                <a class="btn btn-outline-dark" href="#">Shop Now</a>
                                            </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-no-repeat bg-cover bg-center mx-1" style="background-image: url({{asset('customer/img/women/fw1.jpg')}});">
                            <div class="container">
                                <div class="row min-vh-75 align-items-center justify-content-center py-12">
                                    <div class="col-lg-8 text-center">
                                        <div class="bg- px-4 py-4 hc-slider-box">
                                            <h6 class="fw-500 text-uppercase mb-3">Women's</h6>
                                            <h5 class=" fw-600 text-uppercase">New LookBook</h5>
                                            <div class="pt-2">
                                                <a class="btn btn-outline-dark" href="#">Shop</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-no-repeat bg-cover bg-center mx-1" style="background-image: url({{asset('customer/img/men/fm1.jpg')}});">
                            <div class="container">
                                <div class="row min-vh-75 align-items-center justify-content-center py-12">
                                    <div class="col-lg-8 text-center">
                                        <div class=" px-4 py-4 hc-slider-box">
                                            <h6 class="fw-500 text-uppercase mb-3">Men's</h6>
                                            <h5 class=" fw-600 text-uppercase">New LookBook</h5>
                                            <div class="pt-2">
                                                <a class="btn btn-outline-dark" href="#">Shop</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-no-repeat bg-cover bg-center mx-1" style="background-image: url({{asset('customer/img/men/fa1.jpg')}});">
                            <div class="container">
                                <div class="row min-vh-75 align-items-center justify-content-center py-12">
                                    <div class="col-lg-8 text-center">
                                        <div class="px-4 py-4 hc-slider-box">
                                            <h5 class="fw-500 text-uppercase mb-3">Accessories</h5>
                                            <h5 class="fw-600 text-uppercase">New LookBook</h5>
                                            <div class="pt-2">
                                                <a class="btn btn-outline-dark" href="#">Shop</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-arrow-style-01 swiper-next swiper-next-02"><i class="bi bi-chevron-right"></i> </div>
                <div class="swiper-arrow-style-01 swiper-prev swiper-prev-02"><i class="bi bi-chevron-left"></i></div>
                <div class="swiper-pagination swiper-pagination-white"></div>
            </div>


<section class="section">
                <div class="container">
                    <div class="row justify-content-center section-heading">
                        <div class="col-lg-6 text-center">
                            <h3 class="fw-500 h2 m-0">Latest Arrivals</h3>
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
                                  "spaceBetween": 24
                                },
                                "1200": {
                                  "slidesPerView": 4,
                                  "spaceBetween": 24
                                }
                              }
                        }'>
                            <div class="swiper-wrapper">
                                @foreach($products as $product)
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-primary">New</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="{{route('productdetail.index')}}">
                                                    <img class="img-fluid" src="{{url('storage/'.$product->image)}}" style="height:300px; width:300px;" title="" alt="">
                                                    
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="{{route('cart.index')}}" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">$product->name</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination mt-4 d-lg-none position-relative"></div>
                        </div>
                        <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i class="bi-chevron-right"></i> </div>
                        <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi-chevron-left"></i></div>
                    </div>
                </div>
            </section>

            <!-- Home Section -->
            <div class="swiper swiper-container" data-swiper-options='{
                  "slidesPerView": 1,
                  "spaceBetween": 0,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".swiper-next-01",
                    "prevEl": ".swiper-prev-01"
                  },
                  "autoplay": {
                    "delay": 5000,
                    "disableOnInteraction": false
                  }
                }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-no-repeat bg-cover bg-center" style="background-image: url({{asset('customer/img/frontimage/f2.jpg')}});">
                            <div class="container">
                                <div class="row min-vh-85 align-items-center justify-content-center py-12">
                                    <div class="col-lg-8 text-center">
                                        <h6 class="fw-300 text-uppercase text-white mb-3 letter-spacing-6">You're Looking Good</h6>
                                        <h1 class="display-1 fw-300 text-white letter-spacing-6 text-uppercase">New LookBook</h1>
                                        <div class="pt-3">
                                            <a class="btn btn-outline-white" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-no-repeat bg-cover bg-center" style="background-image: url({{asset('customer/img/frontimage/b3.jpg')}});">
                            <div class="container">
                                <div class="row min-vh-85 align-items-center justify-content-center py-12">
                                    <div class="col-lg-8 text-center">
                                        <h6 class="fw-300 text-uppercase text-white mb-3 letter-spacing-6">You're Looking Good</h6>
                                        <h1 class="display-1 fw-300 text-white letter-spacing-6 text-uppercase">New LookBook</h1>
                                        <div class="pt-3">
                                            <a class="btn btn-outline-white" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

                        <div class="swiper-slide">
                        <div class="bg-no-repeat bg-cover bg-center" style="background-image: url({{asset('customer/img/frontimage/b4.jpg')}});">
                            <div class="container">
                                <div class="row min-vh-85 align-items-center justify-content-center py-12">
                                    <div class="col-lg-8 text-center">
                                        <h6 class="fw-300 text-uppercase text-white mb-3 letter-spacing-6">You're Looking Good</h6>
                                        <h1 class="display-1 fw-300 text-white letter-spacing-6 text-uppercase">New LookBook</h1>
                                        <div class="pt-3">
                                            <a class="btn btn-outline-white" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-arrow-style-01 swiper-next swiper-next-01"><i class="bi-chevron-right"></i> </div>
                <div class="swiper-arrow-style-01 swiper-prev swiper-prev-01"><i class="bi-chevron-left"></i></div>
                <div class="swiper-pagination swiper-pagination-white"></div>
            </div>

            

            <section class="section">
                <div class="container">
                    <div class="row justify-content-center section-heading">
                        <div class="col-lg-6 text-center">
                            <h3 class="fw-500 h2 m-0">Browse our Bestsellers</h3>
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
                                  "spaceBetween": 24
                                },
                                "1200": {
                                  "slidesPerView": 4,
                                  "spaceBetween": 24
                                }
                              }
                        }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/f2.jpg')}}" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/b3.jpg')}}" style="width:300px;" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/b4.jpg')}}" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/b7.jpg')}}" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('template/dist/assets/img/s7.jpg')}}" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('template/dist/assets/img/s9.jpg')}}" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star-fill active"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination mt-4 d-lg-none position-relative"></div>
                        </div>
                        <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i class="bi-chevron-right"></i> </div>
                        <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi-chevron-left"></i></div>
                    </div>
                </div>
            </section>

                    </br>

                    <section class="section">
                <div class="container">
                    <div class="row justify-content-center section-heading">
                        <div class="col-lg-6 text-center">
                            <h3 class="fw-500 h2 m-0"> Our Branches</h3>
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
                                  "spaceBetween": 24
                                },
                                "1200": {
                                  "slidesPerView": 4,
                                  "spaceBetween": 24
                                }
                              }
                        }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                           <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/f2.jpg')}}" title="" alt="">
                                                </a>
                                                <h5 class="product-title" align="center">Nawalapitiya</h5> 
                                           </div>
                                        </div>
                                        <div class="product-card-info">
                                            <p>NO:43, KOTHMALE ROAD, NAWALAPITIYA.</p>
                                            <p><strong>0542222143</strong></p>
                                        </div>
                                     </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                           <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/f2.jpg')}}" title="" alt="">
                                                </a>
                                                <h5 class="product-title" align="center">Gampola</h5> 
                                           </div>
                                        </div>
                                        <div class="product-card-info">
                                            <p>NO:36, STATION ROAD,<br>GAMPOLA.</p>
                                            <p><strong>0812350970</strong></p>
                                        </div>
                                     </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                           <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/f2.jpg')}}" title="" alt="">
                                                </a>
                                                <h5 class="product-title" align="center">Matale</h5> 
                                           </div>
                                        </div>
                                        <div class="product-card-info">
                                            <p>NO:131, MAIN STREET,<br> MATALE.</p>
                                            <p><strong>066-222296</strong></p>
                                        </div>
                                     </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                           <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/f2.jpg')}}" title="" alt="">
                                                </a>
                                                <h5 class="product-title" align="center">Kandy</h5> 
                                           </div>
                                        </div>
                                        <div class="product-card-info">
                                            <p>NO:494, PERADENIYA ROAD, KANDY.</p>
                                            <p><strong>081-2224211</strong></p>
                                        </div>
                                     </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                           <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/f2.jpg')}}" title="" alt="">
                                                </a>
                                                <h5 class="product-title" align="center">Kurunegala</h5> 
                                           </div>
                                        </div>
                                        <div class="product-card-info">
                                            <p>NO:136, COLOMBO ROAD, KURUNEGALA.</p>
                                            <p><strong>037-2052966</strong></p>
                                        </div>
                                     </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                           <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('customer/img/frontimage/f2.jpg')}}" title="" alt="">
                                                </a>
                                                <h5 class="product-title" align="center">Polannaruwa</h5> 
                                           </div>
                                        </div>
                                        <div class="product-card-info">
                                            <p>NO:171, BATTICALOA ROAD, POLONNARUWA.</p>
                                            <p><strong>027-2050136</strong></p>
                                        </div>
                                     </div>
                                </div>

                            </div>
                            <div class="swiper-pagination mt-4 d-lg-none position-relative"></div>
                        </div>
                        <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i class="bi-chevron-right"></i> </div>
                        <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi-chevron-left"></i></div>
                    </div>
                </div>
            </section>


 </br>
<div class="pt-3">
                <div class="container-fluid px-0">
                    <div class="swiper-hover-arrow position-relative">
                        <div class="swiper swiper-container" data-swiper-options='{
                            "slidesPerView": 2,
                            "spaceBetween": 0,
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
                                    "slidesPerView": 4
                                },
                                "991": {
                                    "slidesPerView": 4
                                },
                                "1200": {
                                    "slidesPerView": 6
                                },
                                "1300": {
                                    "slidesPerView": 7
                                }
                            }
                        }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="px-3 px-md-6 py-1 w-100 border float-start" href="#">
                                        <img class="mx-auto d-block" src="{{asset('customer/img/brand/moose.png')}}" title="" alt="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="px-3 px-md-6 py-1 w-100 border float-start" href="#">
                                        <img class="mx-auto d-block" src="{{asset('customer/img/brand/vintage.png')}}" title="" alt="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="px-3 px-md-6 py-1 w-100 border float-start" href="#">
                                        <img class="mx-auto d-block" src="{{asset('customer/img/brand/brand3.jpeg')}}" title="" alt="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="px-3 px-md-6 py-1 w-100 border float-start" href="#">
                                        <img class="mx-auto d-block" src="{{asset('customer/img/brand/brand4.jpeg')}}" title="" alt="">
                                    </a>
                                </div>
                                
                            </div>
                            <div class="swiper-pagination mt-4 d-lg-none position-relative"></div>
                        </div>
                        <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i class="bi bi-chevron-right"></i> </div>
                        <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi bi-chevron-left"></i></div>
                    </div>
                </div>
            </div>
                    </main>
@endsection