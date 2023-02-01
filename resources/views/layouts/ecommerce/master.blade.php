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
        <form class="position-relative w-100">
            <div class="input-group">
                <!-- Search input -->
                <input class="form-control shadow-none" type="text" name="search" id="search" placeholder="What are you looking for?">
                <!-- Search button -->
                <button type="button" id="search" class="btn btn-primary shadow-none">
                    <i class="fi-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>

        @include('layouts.ecommerce._header')
          @yield('content')
          @include('layouts.ecommerce._footer')   
          
          @include('layouts.ecommerce._script')
              @yield('js')        
</body>

        
</html>
  