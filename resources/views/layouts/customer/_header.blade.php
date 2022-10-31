<header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav align-items-right">
            <div class="container pt-0">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="start">
                    <a class="navbar-brand" href=""><img src="{{ asset('/images/nadiyas logo.png') }}" class="logo" style="width: 150px; height: 100px;" alt=""></a>
</div>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                       
                        

                        <li class="dropdown nav-item active">
                            <a href="" class="nav-link " data-toggle="dropdown">Women</a>
                            <ul class="dropdown-menu">
                            
								<li><a href="{{route('women.index')}}">Categories</a></li>
                                <li><a href="">Blouse</a></li>
								<li><a href="shop-detail.html">Skirt</a></li>
                                <li><a href="cart.html">Jeans</a></li>
                                <li><a href="checkout.html">T-Shirts</a></li>
                                <li><a href="wishlist.html">Shirts</a></li>
                            	
                            
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Men</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Categories</a></li>
								
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Kids</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html"></a></li>
								
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link " data-toggle="dropdown">Mother &baby</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Sidebar Shop</a></li>
								<li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="nav-link " data-toggle="dropdown">Ethnic</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Sidebar Shop</a></li>
								<li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link " data-toggle="dropdown">Accessories</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Sidebar Shop</a></li>
								<li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link " data-toggle="dropdown">Cosmetic</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Sidebar Shop</a></li>
								<li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            
                            <a href="#" class="nav-link" data-toggle="dropdown">House& Hold</a>
                        
                            <ul class="dropdown-menu">
                            <div class="card">
                            <div class="card-body">
								<li><a href="shop.html">Sidebar Shop</a></li>
								<li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            
                                </div>
                        </div>
                            </ul>
</li>

                            <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Sort</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Categories</a></li>	
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="{{route('sale.index')}}" class="nav-link">Sale</a>
                            <ul class="dropdown-menu">
								<li><a href="">Sales</a></li>	
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Filter</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Categories</a></li></ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('career.index')}}" class="nav-link">Career</a>
                           
                        </li>

                        <li>    
                        <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                  <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                                    <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
                        </li>
                       
                       
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                <div class="end">
                   
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                   
                        <a href="{{ url('/home') }}" class="button">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="button" >Log in</a>


                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button" >Register</a>
                        @endif

                    @endauth
                </div>
            @endif
        </div>
          
        </div>
    </div>
    </nav>
  </header>