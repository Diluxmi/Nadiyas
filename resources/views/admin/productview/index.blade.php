@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')

<main>
            <!-- Breadcrumb -->
    <div class="py-3 bg-gray-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 my-2">
                    <h1 class="m-0 h4 text-center text-lg-start"></h1>
                </div>
                <div class="col-lg-6 my-2">
                    <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
            <!-- End Breadcrumb -->
            <!-- Shop -->
    <section class="py-6">
        <div class="container-fluid px-xxl-8">
            <div class="row flex-row-reverse">
                <!-- Sidebar -->
                <div class="col-lg-4 col-xl-3 ps-xl-5 offcanvas-lg offcanvas-end px-0 px-lg-3" tabindex="-1" id="shop_filter" aria-labelledby="shop_filterLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="shop_filterLabel">Shop Filter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#shop_filter" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body flex-column">
                        <!-- Categories -->
                        <div class="shop-sidebar-block">
                            <div class="shop-category-list collapse show" id="shop_categories">
                                <ul class="nav flex-column">
                                </ul>
                            </div>
                        </div>

            <div class="shop-sidebar-block">
                <div class="shop-sidebar-title">
                    <a class="h5" data-bs-toggle="collapse" href="#shop_Gender" role="button" aria-expanded="true" aria-controls="shop_Gender">Gender <i class="bi bi-chevron-up"></i></a>
                </div>
                <div class="shop-sidebar-list collapse show" id="shop_Gender">
                    <ul>
                    <li class="custom-radio">
                        <input class="custom-control-input" id="gen1" type="radio" name="Gender" checked>
                        <label class="custom-control-label" for="gen1">Men</label>
                    </li>
                    <li class="custom-radio">
                        <input class="custom-control-input" id="gen2" type="radio" name="Gender">
                        <label class="custom-control-label" for="gen2">Women</label>
                    </li>
                    <li class="custom-radio">
                        <input class="custom-control-input" id="gen3" type="radio" name="Gender">
                        <label class="custom-control-label" for="gen3">Boys</label>
                    </li>
                    <li class="custom-radio">
                        <input class="custom-control-input" id="gen4" type="radio" name="Gender">
                        <label class="custom-control-label" for="gen4"> Girls</label>
                    </li>
                </ul>
            </div>
        </div>
                                <!-- End Gender -->
                                <!-- Color -->
        <div class="shop-sidebar-block">
            <div class="shop-sidebar-title">
                <a class="h5" data-bs-toggle="collapse" href="#shop_Color" role="button" aria-expanded="true" aria-controls="shop_Color">Color <i class="bi bi-chevron-up"></i></a>
            </div>
            <div class="shop-sidebar-list collapse show" id="shop_Color">
                <ul>
                <li class="custom-checkbox checkbox-color">
                    <input class="custom-control-input" id="colorsidebar1" type="checkbox" checked="">
                    <label class="custom-control-label" style="color: #1F45FC;" for="colorsidebar1">
                    <span class="text-body">Royal Blue</span>
                    </label>
                </li>
                <li class="custom-checkbox checkbox-color">
                    <input class="custom-control-input" id="colorsidebar2" type="checkbox">
                    <label class="custom-control-label" style="color: #FCD71E;" for="colorsidebar2">
                    <span class="text-body">Yellow</span>
                    </label>
                </li>
                <li class="custom-checkbox checkbox-color">
                    <input class="custom-control-input" id="colorsidebar3" type="checkbox">
                    <label class="custom-control-label" style="color: #000;" for="colorsidebar3">
                        <span class="text-body">Black</span>
                    </label>
                </li>
                <li class="custom-checkbox checkbox-color">
                    <input class="custom-control-input" id="colorsidebar4" type="checkbox">
                    <label class="custom-control-label" style="color: #f73636;" for="colorsidebar4">
                    <span class="text-body">Red</span>
                    </label>
                </li>
                <li class="custom-checkbox checkbox-color">
                    <input class="custom-control-input" id="colorsidebar5" type="checkbox" disabled="">
                    <label class="custom-control-label" style="color: #17a2b8;" for="colorsidebar5">
                    <span class="text-body">Cyan</span>
                    </label>
                </li>
            </ul>
        </div>
    </div>
                                <!-- End Color -->
    <div class="shop-sidebar-block">
        <div class="shop-sidebar-title">
            <a class="h5" data-bs-toggle="collapse" href="#shop_brand" role="button" aria-expanded="true" aria-controls="shop_brand">Brands <i class="bi bi-chevron-up"></i></a>
        </div>
        <div class="shop-sidebar-list collapse show" id="shop_brand">
        <ul>
            <li class="custom-checkbox">
                <input class="custom-control-input" id="brand1" type="checkbox">
                <label class="custom-control-label" for="brand1">Adidas</label>
            </li>
            <li class="custom-checkbox">
                <input class="custom-control-input" id="brand2" type="checkbox">
                <label class="custom-control-label" for="brand2">Levis</label>
            </li>
            <li class="custom-checkbox">
                <input class="custom-control-input" id="brand3" type="checkbox">
                <label class="custom-control-label" for="brand3">Puma</label>
            </li>
            <li class="custom-checkbox">
                <input class="custom-control-input" id="brand5" type="checkbox">
                <label class="custom-control-label" for="brand5">Converse</label>
            </li>
            </ul>
        </div>
    </div>
                                <!-- End Brands -->
                                <!-- Brands -->
                    <div class="shop-sidebar-block">
                        <div class="shop-sidebar-title">
                            <a class="h5" data-bs-toggle="collapse" href="#shop_price" role="button" aria-expanded="true" aria-controls="shop_price">Price <i class="bi bi-chevron-up"></i></a>
                        </div>
                        <div class="shop-sidebar-list collapse show" id="shop_price">
                        <ul>
                            <li class="custom-checkbox">
                                <input class="custom-control-input" id="price1" type="checkbox">
                                <label class="custom-control-label" for="price1">
                                    $10.00 - $49.00
                                </label>
                            </li>
                            <li class="custom-checkbox">
                                <input class="custom-control-input" id="price2" type="checkbox">
                                <label class="custom-control-label" for="price2">$50.00 - $99.00</label>
                            </li>
                            <li class="custom-checkbox">
                                <input class="custom-control-input" id="price3" type="checkbox">
                                <label class="custom-control-label" for="price3">$100.00 - $199.00 </label>
                            </li>
                            <li class="custom-checkbox">
                                <input class="custom-control-input" id="price4" type="checkbox">
                                <label class="custom-control-label" for="price4">$200.00 and Up</label>
                            </li>
                        </ul>
                            <div class="d-flex align-items-center pt-3">
                                <input type="number" class="form-control form-control-sm" placeholder="$10.00" min="10">
                                <div class="text-gray-350 mx-2">‒</div>
                                <input type="number" class="form-control form-control-sm" placeholder="$350.00" max="350">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="shop-top-bar d-flex pb-3">
                        <div class="layout-change">
                            <a class="btn btn-sm active" href="#"><i class="bi bi-grid"></i></a>
                        </div>
                    </div>
                    <div class="row g-3">
                                <!-- Product Box -->
                        @foreach($products as $product)
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-card-1">
                                <div class="product-card-image">
                                    <div class="badge-ribbon">
                                        <span class="badge bg-danger">Sale</span>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn btn-outline-primary"> <i class="fi-heart"></i></a>
                                        <a href="#" class="btn btn-outline-primary"><i class="fi-repeat"></i></a>
                                        <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="fi-eye"></i></a>
                                    </div>
                                     <div class="product-media"> 
                                        <a href="{{route('productview.show',$product->id)}}">
                                            <img class="img-fluid" src= "{{asset('storage/'.$product->image)}}" style="height:300px; width:300px;" title="" alt="">
                                        </a>

                                        <form method="Post" action="{{route('cart.store',[$product->id,$customer->id])}}" enctype="multipart/form-data">            
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
                                <div class="product-card-info">
                                   
                                    <h6 class="product-title">
                                        <a href="#">{{$product->name}}</a>
                                    </h6>
                                    <div class="product-price">
                                        <span class="text-primary">Rs.{{$product->price}}</span>   
                                    </div>
                                    <div class="nav-thumbs">
                                    <div class="form-check radio-text form-check-inline">
                                        <input class="form-check-input" type="radio" name="size3" id="btnradio1" checked>
                                        <label class="radio-text-label" for="btnradio1">{{$product->size}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                                
                                <!-- End Product Box -->
                               
                            <div class="shop-bottom-bar d-flex align-items-center border-top pt-3 mt-3">
                                <div>Showing: 1 - 12 of 17</div>
                                <div class="ms-auto">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Box -->
                       
                    </div>
                </div>
            </section>
        
        </main>
        @endsection