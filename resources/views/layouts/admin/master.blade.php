<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">


<head>
@include('layouts.admin._meta')
@include('layouts.admin._style')
</head>



<body>
  <div class=" container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">

        @include('layouts.admin._header')
        
    <div class="main-panel">
    <div class="content-wrapper pb-0">

   
          @yield('content')
          @include('layouts.admin._footer')  
    </div>
    </div>
</div>

  

             @include('layouts.admin._script')
              @yield('js')
              
</body>
</html>
  