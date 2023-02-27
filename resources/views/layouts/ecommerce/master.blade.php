<!DOCTYPE html>
<html lang="zxx">
<head>
@include('layouts.ecommerce._meta')
@include('layouts.ecommerce._style')
</head>
<body>

<div class="offcanvas offcanvas-end" tabindex="-1" id="header_search_popup" aria-labelledby="header_search_popupLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="header_search_popupLabel">Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form class="position-relative w-100" id="searchForm" action="{{ route('productview.search')}}" >
            <div class="input-group">
                    <!-- Search input -->
            <div classs="form-group">
                <input type="text" id="search" name="search" placeholder="Search" class="form-control" />
            </div>
            <button type="submit"  class="btn btn-primary shadow-none"><i class="fi-search"></i></button>
            </div>
        </form>
    </div>
</div>



<!-- Mini Cart  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="modalMiniCart" aria-labelledby="modalMiniCartLabel">
    <div class="offcanvas-header border-bottom">
        <h6 class="offcanvas-title" id="modalMiniCartLabel">Your Cart ({{ Cart::getTotalQuantity()}})</h6>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled m-0 p-0">
            <li class="py-2">
                <div class="row align-items-center">
                    <div class="col-4">
                        <!-- Image -->
                        <a href="#">
                            <img class="img-fluid border" src="../../assets/img/fashion/1000x1000.jpg" alt="...">
                        </a>
                    </div>
                    <div class="col-8">
                        <!-- Title -->
                        <p class="mb-2">
                            <a class="text-dark fw-500" href="#">Cotton floral print Dress</a>
                            <span class="m-0 text-muted w-100 d-block">$40.00</span>
                        </p>
                        <!--Footer -->
                        <div class="d-flex align-items-center">
                            <!-- Remove -->
                            <a class="small text-dark ms-auto" href="#!">
                                <i class="bi bi-x"></i> Remove
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="offcanvas-footer border-top p-3">
       <div class="pt-4">
           <a class="btn btn-block btn-outline-dark w-100" href="">View Cart</a>
        </div>
    </div>
</div>
<!-- End Mini Cart  -->

        @include('layouts.ecommerce._header')
          @yield('content')
          @include('layouts.ecommerce._footer')   
          
          @include('layouts.ecommerce._script')
              @yield('js')        
</body>

        
</html>
  