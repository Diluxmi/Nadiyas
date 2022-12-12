<script src="{{asset('customer/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('customer/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('customer/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('customer/vendor/magnific/jquery.magnific-popup.min.js')}}"></script>
   <script src="{{asset('customer/vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('customer/vendor/count-down/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('customer/vendor/jarallax/jarallax-all.js')}}"></script>
 <script src="{{asset('customer/js/custom.js')}}"></script>
    <script src="{{asset('customer/js/theme.js')}}"></script>
    <script>
        function listcategories(department,category){
          if(department){
            $.ajax({
                    type: "GET",
                    url:"{{route('get.category')}}? department="+department,
                    success: function(res){
                      $('#'+department).empty();
                      
                      if(res){
                        
                        $.each(res,function(key,value){
                          $('#'+department).append('<div class="container p-3 p-lg-4"> <div class="row gy-4"><div class="col-lg-6"><div class="row gy-4"><div class="col-6"><ul class="list-unstyled link-list-style-03"> <li ><a href="{{route('productview.index')}}">'+ value.name+'</a></li> </ul></div></div></div></div>');
                          
                        })
                        }
                      }
                    });
                  } 
                }  
      </script>
