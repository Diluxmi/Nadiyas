@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')

<main>
            <!-- Breadcrumb -->
            <div class="py-3 bg-gray-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 my-2">
                            <h1 class="m-0 h4 text-center text-lg-start">{{$product->name}} Details</h1>
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
                                            <a class="gallery-link" href="{{asset('storage/'.$product->image)}}"><i class="bi bi-arrows-fullscreen"></i></a>
                                            <img class="img-fluid" src= "{{asset('storage/'.$product->image)}}" style="height:400px; width:430px;" title="" alt="">
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                           
                            <div class="swiper swiper_thumb_gallery product-thumb">
                                <div class="swiper-wrapper">
                                @foreach($photos as $photo)
                                    <div class="swiper-slide">
                                      
                                        <div class="pd-gallery-slide-thumb">
                                            <img src="{{asset('storage/'.$photo->image)}}"  style="height:150px; width:150px;" class="img-fluid" title="" alt="">
                                        </div>
                                       
                                    </div>
                                    @endforeach
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
                                    <span>Product name</span>
                                </div>
                                <div class="products-title mb-2">
                                    <h4 class="h4">{{$product->name}}</h4>
                                </div>
                               
                                <div class="product-attribute">
                                    <label class="fs-6 text-dark pb-2 fw-500">Size</label>
                                    <div class="nav-thumbs nav mb-3">
                                 
                                        <div class="form-check radio-text form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="size_d3" id="xs_2" checked="">
                                            <label class="radio-text-label" for="xs_2">{{$product->size}}</label> 
                                        </div>

                                    </div>
                                   <!-- <label class="fs-6 text-dark pb-2 fw-500">Color</label>
                                    <div class="nav-thumbs nav mb-3">
                                        <div class="form-check radio-color large form-check-inline me-2">
                                            <input class="form-check-input" type="radio" name="color_1" id="color_01" checked="">
                                            <label class="radio-color-label" for="color_01">
                                                {{$product->colour}}
                                            </label>
                                        </div></div>-->
                                </div>
                               
                                <div class="product-detail-actions d-flex flex-wrap pt-3">
                                    
                                    <div class="cart-button mb-3 d-flex">
                                      
                                    <form method="Post" action="{{route('cart.store',$product->id)}}" enctype="multipart/form-data">            
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        <input type="hidden" value ="{{$product->image}}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <div class="product-cart-btn">
                                            <button class="btn btn-primary btn-sm w-100">
                                            <i class="fi-shopping-cart"></i>Add to cart</button>
                                        </div>
                                        @csrf
                                        </form>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Details -->
                    </div>
                </div>
            </section>
            
        </main>



@endsection