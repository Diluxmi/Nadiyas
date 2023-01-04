<div class="wrapper">
<div class="header-height-bar">

</div>
<header class="header-main bg-white header-light fixed-top header-height header-option-1">
    <!-- Header Top --><div class="header-top header-border-bottom small bg-black small">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Left --><div class="d-flex align-items-center justify-content-center d-none d-lg-block">
                    <ul class="nav white-link">
                        <li class="nav-item me-3 text-white text-opacity-85">
                            <span><i class="bi bi-clock me-2"></i> Visit time: Mon-Sun 9:00-19:00</span>
                        </li>
                        <li class="nav-item"><a href="#" class="navbar-link">
                            <i class="bi bi-headset me-2"></i> Call us now: 054-2222143</a></li>
                        </ul>
                    </div>
                   <div class="d-flex align-items-center justify-content-center w-100 w-lg-auto">
                    
                            <ul class="nav ms-auto ms-lg-3">
                        
                                </ul>
                                <div class="nav header-social justify-content-end d-none d-lg-block white-link">
                                    <a class="h-social-link" href="https://www.facebook.com/profile.php?id=100061016144319">
                                        <i class="bi bi-facebook"></i></a> 
                                        <a class="h-social-link" href="https://instagram.com/nadiyastextile?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram"></i></a>
                                    <a class="h-social-link" href="0755402434"><i class="bi bi-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container">
                            <a class="navbar-brand" href="">
                                <img src="{{asset('customer/img/nadiyas.png')}}" style="width:150px;"title="" alt=""> 
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto">

                                <li class="dropdown dropdown-full nav-item">
                                        <a href="{{route('welcome')}}" class="nav-link active">Home</a> 
                            </li>

                            <li class="dropdown dropdown-full nav-item">
                                        <a href="{{route('about.index')}}" class="nav-link">About</a> 
                            </li>

    @foreach($departments as $department)
        <li class="dropdown dropdown-full nav-item" >
            <a href="#"   onmouseover="listcategories('{{$department->id}}')" class="nav-link">{{$department->name}}</a>
            <label class="px-dropdown-toggle mob-menu"></label>    
            <div class="dropdown-menu dropdown-mega-menu py-0"   >
                <div class="container p-3 p-lg-4"><div class="row gy-4"><div class="col-lg-6"><div id="{{$department->id}}" class="row gy-4"></div></div></div></div>
                </div>
        </li>
    @endforeach
     
  </div><!-- End Menu -->
        <div class="nav flex-nowrap align-items-center header-right">
       
        <div class="nav-item">
        
        <a class="nav-link" data-bs-toggle="offcanvas" href="#header_search_popup" role="button" aria-controls="header_search_popup">
        <i class="fi-search"> </i>
            </a>

        </div>



            <div class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" id="dropdown_myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fi-user"></i>
                </a>
            <div class="dropdown-menu dropdown-menu-end mt-2 shadow" aria-labelledby="dropdown_myaccount">
                @if (Route::has('login'))
                @auth
                    <a  class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf    
                        </form> Logout</a>
                            @else
            
                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>         
                        @if (Route::has('register'))
                    <a class="dropdown-item" href="{{ route('register-user') }}">Register</a>
                    @endif  
                    @endauth
                    @endif

                @if(Route::has('login'))
                @auth
                <a class="dropdown-item" href="{{route('customer.index')}}">My account</a>
                @csrf
                @endif
                @endauth
                    <a class="dropdown-item" href="#">Wishlist</a>
                   </div> 
                </div>

                 <div class="nav-item d-none d-xl-block">
                    <a class="nav-link" href="#"><i class="fi-heart"></i></a>
                </div><!-- Cart -->
                <div class="nav-item">
                    <a class="nav-link" data-bs-toggle="offcanvas" href="#modalMiniCart" role="button" aria-controls="modalMiniCart">
                        <span class="" data-cart-items="8"><i class="fi-shopping-cart"></i></span>
                    </a>
                </div>
        <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
                                        

     </div></div></nav></header>