@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')

<main>
            <!-- Breadcrumb -->
            <div class="py-3 bg-gray-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 my-2">
                            <h1 class="m-0 h4 text-center text-lg-start">Shop</h1>
                        </div>
                        <div class="col-lg-6 my-2">
                            <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                                <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <!-- Product Details -->
            <section class="product-details py-6">
                <div class="container">
                    <div class="row">
                        <!-- Product Gallery -->
                        <div class="col-lg-6 lightbox-gallery product-gallery">
                            <div class="swiper swiper_gallery">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide">
                                            <a class="gallery-link" href="../../assets/img/fashion/1000x1000.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide">
                                            <a class="gallery-link" href="../../assets/img/fashion/1000x1000.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide">
                                            <a class="gallery-link" href="../../assets/img/fashion/1000x1000.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide">
                                            <a class="gallery-link" href="../../assets/img/fashion/1000x1000.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide">
                                            <a class="gallery-link" href="../../assets/img/fashion/1000x1000.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide">
                                            <a class="gallery-link" href="../../assets/img/fashion/1000x1000.jpg"><i class="bi bi-arrows-fullscreen"></i></a>
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper swiper_thumb_gallery product-thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide-thumb">
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide-thumb">
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide-thumb">
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide-thumb">
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide-thumb">
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pd-gallery-slide-thumb">
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-arrow-style-03 swiper-next swiper-next-pd-details_thumb"><i class="bi bi-chevron-right"></i> </div>
                                <div class="swiper-arrow-style-03 swiper-prev swiper-prev-pd-details_thumb"><i class="bi bi-chevron-left"></i></div>
                            </div>
                        </div>
                        <!-- End Product Gallery -->
                        <!-- Product Details -->
                        <div class="col-lg-6 ps-lg-5">
                            <div class="product-detail pt-4 pt-lg-0">
                                <div class="products-brand pb-2">
                                    <span>Brand name</span>
                                </div>
                                <div class="products-title mb-2">
                                    <h4 class="h4">Fine-knit sweater</h4>
                                </div>
                                <div class="rating-star text small pb-4">
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star"></i>
                                    <small>(4 Reviews )</small>
                                </div>
                                <div class="product-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                </div>
                                <div class="product-attribute">
                                    <label class="fs-6 text-dark pb-2 fw-500">Size</label>
                                    <div class="nav-thumbs nav mb-3">
                                        <div class="form-check radio-text form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="size_d3" id="xs_2" checked="">
                                            <label class="radio-text-label" for="xs_2">XS</label>
                                        </div>
                                        <div class="form-check radio-text form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="size_d3" id="s_2">
                                            <label class="radio-text-label" for="s_2">S</label>
                                        </div>
                                        <div class="form-check radio-text form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="size_d3" id="m_2">
                                            <label class="radio-text-label" for="m_2">M</label>
                                        </div>
                                        <div class="form-check radio-text form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="size_d3" id="l_2">
                                            <label class="radio-text-label" for="l_2">L</label>
                                        </div>
                                    </div>
                                    <label class="fs-6 text-dark pb-2 fw-500">Color</label>
                                    <div class="nav-thumbs nav mb-3">
                                        <div class="form-check radio-color large form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="color_1" id="color_01" checked="">
                                            <label class="radio-color-label" for="color_01">
                                                <span style="background-color: #126532;"></span>
                                            </label>
                                        </div>
                                        <div class="form-check radio-color large form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="color_1" id="color_2">
                                            <label class="radio-color-label" for="color_2">
                                                <span style="background-color: #ff9922;"></span>
                                            </label>
                                        </div>
                                        <div class="form-check radio-color large form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="color_1" id="color_3">
                                            <label class="radio-color-label" for="color_3">
                                                <span style="background-color: #326598;"></span>
                                            </label>
                                        </div>
                                        <div class="form-check radio-color large form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="color_1" id="color_4">
                                            <label class="radio-color-label" for="color_4">
                                                <span style="background-color: #126578;"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-down count-down-02 mb-3" data-countdown="January 01, 2023 15:00:00"></div>
                                <div class="product-price fs-3 fw-500 mb-2">
                                    <del class="text-muted fs-6">$38.<small>50</small></del>
                                    <span class="text-primary">$28.<small>50</small></span>
                                </div>
                                <div class="product-detail-actions d-flex flex-wrap pt-3">
                                    <div class="cart-qty me-3 mb-3">
                                        <div class="dec qty-btn qty_btn">-</div>
                                        <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                        <div class="inc qty-btn qty_btn">+</div>
                                    </div>
                                    <div class="cart-button mb-3 d-flex">
                                        <a class="btn btn-dark me-3" href="{{route('cart.index')}}">
                                            <i class="fi-shopping-cart"></i> Add to cart
                                        </a>
                                        <button class="btn btn-outline-dark me-3">
                                            <i class="fi-heart"></i>
                                        </button>
                                        <button class="btn btn-outline-dark">
                                            <i class="fi-repeat"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info-buttons nav pt-4">
                                    <a href="#" class="me-3" data-bs-toggle="modal" data-bs-target="#px_size_chart_modal"><i class="bi bi-scissors"></i>Size guide</a>
                                    <a href="#" class="" data-bs-toggle="modal" data-bs-target="#px_shipping_modal"><i class="bi bi-truck me-2"></i>Shipping</a>
                                    <a href="#" class="ms-auto" data-bs-toggle="modal" data-bs-target="#px_ask_modal"><i class="bi bi-envelope ms-auto"></i>Ask about product</a>
                                </div>
                                <div class="pt-3 border-top mt-3 small">
                                    <p class="theme-link mb-2">
                                        <label class="m-0 text-dark">Categories:</label>
                                        <a href="#">Sunglasses</a>,
                                        <a href="#">Winter</a>,
                                        <a href="#">Shorts</a>,
                                        <a href="#">Cool</a>
                                    </p>
                                    <p class="theme-link mb-2">
                                        <label class="m-0 text-dark">Tags:</label>
                                        <a href="#">Fashion</a>,
                                        <a href="#">Women</a>,
                                        <a href="#">Winter</a>
                                    </p>
                                    <p class="theme-link m-0">
                                        <label class="m-0 text-dark">Share:</label>
                                        <a class="icon icon-sm icon-secondary me-2" href="#">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a class="icon icon-sm icon-secondary me-2" href="#">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                        <a class="icon icon-sm icon-secondary me-2" href="#">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                        <a class="icon icon-sm icon-secondary me-2" href="#">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="pt-4">
                                    <img class="img-fluid" src="../../assets/img/fashion/payment-details.png" title="" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- End Product Details -->
                    </div>
                </div>
            </section>
            <!-- End Product Details -->
            <!-- Product Tabs -->
            <section class="pb-6 py-md-6 pb-lg-10 pt-lg-5">
                <div class="container">
                    <div class="product-tabs">
                        <ul class="nav product-nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link active" id="pd_description_tab" data-bs-toggle="tab" data-bs-target="#pd_description" role="tab" aria-controls="pd_description" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" id="pd_information_tab" data-bs-toggle="tab" data-bs-target="#px_information" role="tab" aria-controls="px_information" aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link" id="pd_reviews_tab" data-bs-toggle="tab" data-bs-target="#pd_reviews" role="tab" aria-controls="pd_reviews" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="pd_description" role="tabpanel" aria-labelledby="pd_description_tab">
                                <div class="row">
                                    <div class="col-lg-7 pe-lg-10">
                                        <h5>Details Description</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <h5 class="pt-3">Sample Unordered List</h5>
                                        <ul class="mb-5">
                                            <li>Comodous in tempor ullamcorper miaculis</li>
                                            <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                                            <li>Divamus sit amet purus justo.</li>
                                            <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                                        </ul>
                                        <h5>Sample Ordered Lista</h5>
                                        <ol>
                                            <li>Comodous in tempor ullamcorper miaculis</li>
                                            <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                                            <li>Divamus sit amet purus justo.</li>
                                            <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                                        </ol>
                                        <blockquote class="bg-gray-100 p-3 lead fw-400 mt-5 text-dark border-start border-primary border-5">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                                        </blockquote>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="pb-3">
                                            <img src="../../assets/img/fashion/1000x1000.jpg" class="img-fluid" title="" alt="">
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <div class="d-flex border p-3">
                                                    <div class="fs-1 text-primary">
                                                        <i class="bi bi-truck"></i>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <h6 class="mb-1">Free shipping</h6>
                                                        <p class="m-0">Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex border p-3">
                                                    <div class="fs-1 text-primary">
                                                        <i class="bi bi-headphones"></i>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <h6 class="mb-1">Contact us 24/7</h6>
                                                        <p class="m-0">Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex border p-3">
                                                    <div class="fs-1 text-primary">
                                                        <i class="bi bi-box-arrow-in-left"></i>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <h6 class="mb-1">30 Days Return</h6>
                                                        <p class="m-0">Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex border p-3">
                                                    <div class="fs-1 text-primary">
                                                        <i class="bi bi-shield-lock"></i>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <h6 class="mb-1">100% Secure Payment</h6>
                                                        <p class="m-0">Lorem ipsum dolor sit amet</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="px_information" role="tabpanel" aria-labelledby="pd_information_tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <table class="table text-sm">
                                            <tbody>
                                                <tr>
                                                    <th class="fw-500 text-dark">Product #</th>
                                                    <td class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisic elit</td>
                                                </tr>
                                                <tr>
                                                    <th class="fw-500 text-dark">Available packaging</th>
                                                    <td class="text-muted ">consectetur adipisic elit eiusm tempor</td>
                                                </tr>
                                                <tr>
                                                    <th class="fw-500 text-dark">Weight</th>
                                                    <td class="text-muted ">Ut enim ad minim venialo quis nostrud</td>
                                                </tr>
                                                <tr>
                                                    <th class="fw-500 text-dark">Sunt in culpa qui</th>
                                                    <td class="text-muted ">labore et dolore magna aliqua.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-6">
                                        <table class="table text-sm">
                                            <tbody>
                                                <tr>
                                                    <th class="fw-500 text-dark">Weight</th>
                                                    <td class="text-muted">dolor sit amet </td>
                                                </tr>
                                                <tr>
                                                    <th class="fw-500 text-dark">Sunt in culpa qui</th>
                                                    <td class="text-muted ">Lorem ipsum dolor sit amet </td>
                                                </tr>
                                                <tr>
                                                    <th class="fw-500 text-dark">Product #</th>
                                                    <td class="text-muted ">Lorem ipsum dolor sit amet </td>
                                                </tr>
                                                <tr>
                                                    <th class="fw-500 text-dark">Available packaging</th>
                                                    <td class="text-muted ">Lorem ipsum dolor sit amet </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pd_reviews" role="tabpanel" aria-labelledby="pd_reviews_tab">
                                <div class="row">
                                    <div class="col-lg-8 pe-lg-8">
                                        <div class="row align-items-end">
                                            <div class="col-sm-6">
                                                <h5 class="m-0">Reviews</h5>
                                                <div class="rating-star small">
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star"></i>
                                                    <span>4.85/5 (400 Reviews)</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-sm-end">
                                                <a href="#">View all review</a>
                                            </div>
                                        </div>
                                        <div class="d-flex review-box border-top mt-4 pt-4">
                                            <div>
                                                <div class="review-image">
                                                    <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <h6>Nancy Bayer</h6>
                                                <div class="rating-star small">
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star"></i>
                                                    <span>13 April 2012</span>
                                                </div>
                                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                            </div>
                                        </div>
                                        <div class="d-flex review-box border-top mt-4 pt-4">
                                            <div>
                                                <div class="review-image">
                                                    <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <h6>Nancy Bayer</h6>
                                                <div class="rating-star small">
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star"></i>
                                                    <span>13 April 2012</span>
                                                </div>
                                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                            </div>
                                        </div>
                                        <div class="d-flex review-box border-top mt-4 pt-4">
                                            <div>
                                                <div class="review-image">
                                                    <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <h6>Nancy Bayer</h6>
                                                <div class="rating-star small">
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star"></i>
                                                    <span>13 April 2012</span>
                                                </div>
                                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                            </div>
                                        </div>
                                        <div class="d-flex review-box border-top mt-4 pt-4">
                                            <div>
                                                <div class="review-image">
                                                    <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <h6>Nancy Bayer</h6>
                                                <div class="rating-star small">
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star-fill active"></i>
                                                    <i class="bi small bi-star"></i>
                                                    <span>13 April 2012</span>
                                                </div>
                                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="border p-4 sticky-lg-top review-form mt-4 mt-lg-0">
                                            <h5 class="mb-3 pb-3 border-bottom">WRITE A REVIEW</h5>
                                            <form>
                                                <div class="row g-2">
                                                    <div class="col-sm-6">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control form-control-sm">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" name="email" class="form-control form-control-sm">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="form-label m-0 pe-3 w-100">Rating</label>
                                                        <div class="rating-star">
                                                            <i class="bi small bi-star-fill"></i>
                                                            <i class="bi small bi-star-fill"></i>
                                                            <i class="bi small bi-star-fill"></i>
                                                            <i class="bi small bi-star-fill"></i>
                                                            <i class="bi small bi-star-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Review Title</label>
                                                        <input type="text" name="review" class="form-control form-control-sm">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Body of Review (1500)</label>
                                                        <textarea rows="5" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-sm-12 pt-2">
                                                        <button class="btn btn-primary">Submit Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Product Tabs -->
            <!-- You may also like -->
            <section class="section bg-gray-100">
                <div class="container">
                    <div class="row justify-content-center mb-4 mb-lg-6">
                        <div class="col-lg-6 text-center">
                            <h3 class="h2 mb-2">You might also like these</h3>
                            <p class="fs-6 m-0">Read Today’s News.</p>
                        </div>
                    </div>
                    <div class="swiper-hover-arrow position-relative">
            <div class="swiper swiper-container" data-swiper-options='{
                      "slidesPerView": 2,
                      "spaceBetween": 24,
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
                          "slidesPerView": 3
                        },
                        "1200": {
                          "slidesPerView": 4
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
                                        <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="" class="btn btn-primary btn-sm w-100">
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
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star"></i>
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
                                        <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
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
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star"></i>
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
                                        <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
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
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star"></i>
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
                                        <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
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
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star"></i>
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
                                        <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
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
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star"></i>
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
                                        <img class="img-fluid" src="../../assets/img/fashion/1000x1000.jpg" title="" alt="">
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
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star"></i>
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
            <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i class="bi bi-chevron-right"></i> </div>
            <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi bi-chevron-left"></i></div>
        </div>
                </div>
            </section>
            <!-- End You may also like -->
        </main>



@endsection