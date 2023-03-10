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
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">{{$category->name}}</li>
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
            <div class="col-lg-4 col-xl-3 ps-xl-5 offcanvas-lg offcanvas-end px-0 px-lg-3" tabindex="-1" id="shop_filter" aria-labelledby="shop_filterLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="shop_filterLabel">Shop Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#shop_filter" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex-column">
                    <form method="post" action="{{ route('productview.filter')}}">
                        <div class="shop-sidebar-title">
                        <a class="h5" data-bs-toggle="collapse" href="#shop_Color" role="button" aria-expanded="true" aria-controls="shop_Color">Color </a>
                        </div>
                    <br>
                    <input type="checkbox" name="colour[]" value = "Blue">Blue
                    <br>
                    <input type="checkbox" name="colour[]" value ="Red">Red
                    <br>
                    <input type="checkbox" name="colour[]" value = "Green">Green
                    <br>
                    <input type="checkbox" name="colour[]" value = "Pink">Pink
                    <br>
                    <input type="checkbox" name="colour[]" value ="White">White
                    <br>
                    <input type="checkbox" name="colour[]" value = "Black">Black
                    <br>

                    <input type="submit" class="btn btn-primary shadow-none" value="Submit" name="submit" />
                    <!--<input type="submit" value="Delete" class="btn btn-danger shadow-none" name="delete" />-->
                    </form>
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
                                <a href="{{route('productview.show',$product->id)}}" class="btn btn-outline-primary"><i class="fi-eye"></i></a>
                            </div>
                            <div class="product-media"> 
                                <a href="{{route('productview.show',$product->id)}}">
                                    <img class="img-fluid" src= "{{asset('storage/'.$product->image)}}" style="height:350px; width:400px;" title="" alt="">
                                </a>
    
                             <!--   <form method="Post" action="{{route('cart.store',$product->id)}}" enctype="multipart/form-data">            
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value ="{{$product->image}}"  name="image">
                                <input type="hidden" value="1" name="quantity"> -->
                                <div class="product-cart-btn">
                                    <button class="btn btn-primary btn-sm w-100" onclick="alert('Please login!');">
                                   <i class="fi-shopping-cart"></i>View Only</button>
                                </div>
                            <!--    @csrf
                                </form>-->
                            </div>
                        </div>
                        <div class="product-card-info">
                            <div class="rating-star text">
                                <i class="bi-star-fill active"></i>
                                <i class="bi-star-fill active"></i>
                                <i class="bi-star-fill active"></i>
                                <i class="bi-star-fill active"></i>
                                <i class="bi-star"></i>
                            </div>
                            <h6 class="product-title"><a href="#">{{$product->name}}</a></h6>
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
                                <a class="page-link" href="" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="{{$products->links()}}">1</a></li>
                            <li class="page-item"><a class="page-link" href="{{route('productview.index')}}">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="" aria-label="Next">
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