<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.admin._meta')
@include('layouts.admin._style')
</head>


<body>
<div class="container-scroller">
         
                    @include('layouts.admin._sidebar')
                
            <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border me-3"></div>Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles default primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles light"></div>
          </div>
        </div>
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
  