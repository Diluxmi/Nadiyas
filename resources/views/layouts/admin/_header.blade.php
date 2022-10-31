<div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="">
                <img src="{{asset('new/assets/images/nadiyas logo.png')}}" style="width: 100px; height: 70px;" alt="logo" />
              
              </a>
              
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                  <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search" />
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-account-circle"></i>
                    <div class="nav-profile-text">
                    <h2></h2>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">

  <li class="nav-item"><a class="nav-link" href="{{route('home')}}"><span class="menu-title">Home</span></a></li>
 
  <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}"><span class="menu-title">Product</span></a></li>
  <li class="nav-item"><a class="nav-link" href=""><span class="menu-title">Orders</span></a></li>
  <li class="nav-item"><a class="nav-link" href=""><span class="menu-title">Invoices</span></a></li>
  <li class="nav-item"><a class="nav-link" href=""><span class="menu-title">Customer</span></a></li>
  
  <li class="nav-item"><a class="nav-link" href="#"><span class="menu-title">Women</span></a>          
 
  <div class="submenu">
      <ul class="submenu-item">
        <li class="nav-item"><a class="nav-link" href="{{route('blouse.index')}}" >Blouse</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('frock.index')}}">Frock</a></li>            
        <li class="nav-item"><a class="nav-link" href="{{route('top.index')}}">Tops</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('salwar.index')}}">Shalwar</a></li> 
        <li class="nav-item"><a class="nav-link" href="">Saree</a></li> 
        <li class="nav-item"><a class="nav-link" href="">Lehenga</a></li>          
        <li class="nav-item"><a class="nav-link" href="{{route('skirt.index')}}">Skirt</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('pant.index')}}">Pant</a></li> 
        <li class="nav-item"><a class="nav-link" href="{{route('jeans.index')}}">Jeans</a></li>          
        <li class="nav-item"><a class="nav-link" href="">Innerwear</a></li> 
      </ul>
    </div>
</li>
    
  <li class="nav-item"><a href="#" class="nav-link"><span class="menu-title">Men</span></a>
    <div class="submenu">
      <ul class="submenu-item">
        <li class="nav-item"><a class="nav-link" href="">Tshirt</a></li>
        <li class="nav-item"><a class="nav-link" href="">Shirt</a></li>            
        <li class="nav-item"><a class="nav-link" href="">Pant</a></li>
        <li class="nav-item"><a class="nav-link" href="">Jeans</a></li> 
        <li class="nav-item"><a class="nav-link" href="">Shorts</a></li> 
        <li class="nav-item"><a class="nav-link" href="">Innerwear</a></li>          
               
      </ul>
    </div>
  </li>
  <li class="nav-item"><a href="#" class="nav-link"><span class="menu-title">Kids</span></a>
    <div class="submenu">
      <ul class="submenu-item">
        <li class="nav-item"><a class="nav-link" href="">Casual Wear</a></li>
        <li class="nav-item"><a class="nav-link" href="">Formal Wear</a></li>            
        <li class="nav-item"><a class="nav-link" href="">Party Wear</a></li>
        <li class="nav-item"><a class="nav-link" href="">Sports Wear</a></li> 
        <li class="nav-item"><a class="nav-link" href="">Matanity Wear</a></li> 
        <li class="nav-item"><a class="nav-link" href="">Swim Wear</a></li>          
        <li class="nav-item"><a class="nav-link" href="">seap Wear</a></li>
        <li class="nav-item"><a class="nav-link" href="">Undergarment</a></li> 
        <li class="nav-item"><a class="nav-link" href="">Winter Wear</a></li>          
      </ul>
    </div>
  </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                
                  <span class="menu-title">Ethnic</span>
                
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                      <li class="nav-item">
                      <a class="nav-link" href="">Saree</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="">Saree</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Salwar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Vesty</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                
                  <span class="menu-title">Mother & Baby</span>
               
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="">Buttons</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Dropdown</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Typography</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                 
                  <span class="menu-title">House & Hold</span>
                  
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="">Buttons</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Dropdown</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Typography</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                
                  <span class="menu-title">Accessories</span>
                
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item">
                      <a class="nav-link" href="">Women Wear</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Men</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">kids</a>                   </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                
                  <span class="menu-title">Cosmetic</span>
                
                </a>
                <div class="submenu">
                  <ul class="submenu-item">
                      <li class="nav-item">
                      <a class="nav-link" href="">Saree</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="">Saree</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Salwar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="">Vesty</a>
                    </li>
                  </ul>
                </div>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>