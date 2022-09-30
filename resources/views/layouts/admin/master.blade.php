<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.admin._meta')
@include('layouts.admin._style')
</head>


<body id="reportsPage">


        @include('layouts.admin._header')
        
    <div class="main-panel">
    <div class="content-wrapper pb-0">

    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
          @yield('content')
          @include('layouts.admin._footer')  
    </div>
    </div>
</div>

  

             @include('layouts.admin._script')
              @yield('js')
              
</body>
</html>
  