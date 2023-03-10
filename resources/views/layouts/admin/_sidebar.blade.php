 <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
                <div class="nav-profile-image">
                  <img src="{{asset('admin/img/nadiyas.png')}}" style="width:150px; float:right;"title="" alt="" />
                 </div>
                <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                  <span class="font-weight-semibold mb-1 mt-2 text-center text-red"></span>
                </div>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
              <i class="mdi mdi-home"></i>
              <span class="menu-title">Home</span>
            </a>
        </li>
         
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#user" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-account"></i> <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
                <div class="collapse" id="user">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('employee.index')}}">Employee</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}">Customer</a>
                      </li>
                  </ul>
                </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#department" aria-expanded="false" aria-controls="ui-basic">
                  <i class="mdi mdi-bank"></i><span class="menu-title">Dept & Cat</span>
                  <i class="menu-arrow"></i>
            </a>
                <div class="collapse" id="department">
                  <ul class="nav flex-column sub-menu">

                    <li class="nav-item">
                      <a class="nav-link" href="{{route('department.index')}}"><i class="mdi mdi-bank"></i>
                        <span class="menu-title">Department</span> </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{route('categorytype.index')}}"><i class="mdi mdi-store"></i>
                        <span class="menu-title">Category Type</span></a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{route('category.index')}}">
                      <i class="mdi mdi-store"></i><span class="menu-title">Category</span>
                      </a>
                    </li>

                  </ul>
            </div>
          </li>

          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="true" aria-controls="ui-basic">
                <i class="mdi mdi-pencil"></i><span class="menu-title">Product Create</span>
                <i class="menu-arrow"></i>
              </a>
            <div class="collapse" id="product">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}"><i class="mdi mdi-pencil"></i>
                  <span class="menu-title">Product</span></a>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{route('photo.index')}}"> <i class="mdi mdi-pencil"></i>
                  <span class="menu-title">Product Photos</span></a>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{route('size.index')}}">
                    <i class="mdi mdi-pencil"></i><span class="menu-title">Size</span></a>
                </li>

                <li class="nav-item"><a class="nav-link" href="">
                  <i class="mdi mdi-pencil"></i> <span class="menu-title">Stock</span>
                  </a>
                </li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('about.index1')}}">
              <i class="mdi mdi-bank"></i><span class="menu-title">About</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('job.index')}}">
            <i class="mdi mdi-pencil"></i><span class="menu-title">Job</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#report" aria-expanded="true" aria-controls="ui-basic">
              <i class="mdi mdi-pencil"></i><span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="report">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item">
                  <a class="nav-link" href="">Sales Report</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="">Order Report</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="">Stock Report</a>
                </li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#order" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-crosshairs-gps menu-icon"></i><span class="menu-title">Order</span>
                <i class="menu-arrow"></i>
              </a>
            <div class="collapse" id="order">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="">Order List</a>
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
        </ul>
      </nav>