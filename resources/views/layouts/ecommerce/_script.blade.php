<script src="{{asset('customer/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('customer/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('customer/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('customer/vendor/magnific/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('customer/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('customer/vendor/count-down/jquery.countdown.min.js')}}"></script>
<script src="{{asset('customer/vendor/jarallax/jarallax-all.js')}}"></script>
<script src="{{asset('customer/js/custom.js')}}"></script>
<script src="{{asset('customer/js/theme.js')}}"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<script>
  function listcategories(department,category){
    if(department){
      $.ajax({
        type: "GET",
        url:"{{route('get.category')}}? department="+department,
        success: function(res){
          
        $('#'+department).empty();
            if(res){
              $('#categorytype_id').empty(); 
                $.each(res['categorytypes'],function(key,value){
                var templist=' <div id="'+value.id+'" class="col-3"><h6 class="sm-title-04"> <a class="text-reset" href="#">'+ value.name+'</a></h6><ul class="list-unstyled link-list-style-02 m-0"></ul></div>';
                var templist1= $('#'+department).append(templist);   
        
                $.each(res['categories'],function(key1,value1){
                  if(value.id==value1.categorytype_id){ 
                    $(templist1).find('#'+value.id).find("ul").append('<li><a class="text-reset" href="{{route('productview.index')}}?category='+value1.id+'">'+ value1.name+'</a></li>');
                    }
                console.log(value1.id);
                 });
              });
              
              }
            }
          });
            } 
          } 
</script>

<script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";
        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>

   







    

