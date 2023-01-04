<!DOCTYPE html>
<html lang="zxx">
<head>
@include('layouts.ecommerce._meta')
@include('layouts.ecommerce._style')
</head>
<body>

        @include('layouts.ecommerce._header')
          @yield('content')
          @include('layouts.ecommerce._footer')   
          
          @include('layouts.ecommerce._script')
              @yield('js')        
</body>

        
</html>
  