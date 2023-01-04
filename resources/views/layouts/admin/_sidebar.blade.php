

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
             <img src="{{asset('admin/img/nadiyas.png')}}" style="width:150px; float:right;"title="" alt="" />
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center text-red"></span>
                
              </div>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
              <i class="mdi mdi-compass-outline menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-account"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item">
                  <a class="nav-link" href="">Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Customer</a>
                </li>
              </ul>
            </div>
          </li>
         

         
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('department.index')}}">
              <i class="mdi mdi-bank"></i>
              <span class="menu-title">Department</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('categorytype.index')}}">
              <i class="mdi mdi-store"></i>
              <span class="menu-title">Category Type</span>
            </a>
          </li>

         

          <li class="nav-item">
            <a class="nav-link" href="{{route('category.index')}}">
              <i class="mdi mdi-store"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('product.index')}}">
              <i class="mdi mdi-pencil"></i>
              <span class="menu-title">Product</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Order</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('order.index')}}">Order List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Order Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Order Invoice</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-note"></i>
              <span class="menu-title">Report </span>
            </a>
          </li>
         
         

         
       
          <li class="nav-item ">
             
             <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
             
             <div class="nav-profile-text"><span class="menu-title">SignOut</span></div>

             </a>
            
             <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
             <a class="dropdown-item" href="#">
             
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
      </nav>