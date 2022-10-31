<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layouts.customer._meta')
@include('layouts.customer._style')
</head>



<body>

        @include('layouts.customer._header')
        
  
   
          @yield('content')
          @include('layouts.customer._footer')  
   
  

             @include('layouts.customer._script')
              @yield('js')
              
</body>
</html>
  