
  <div class="row">
    <div class ="col-4">
      <div class="form-group">
        <label for ="department_id">Departments:</label><br/>
          <select id="department_id" name="department_id" class="form-control">
            <option value="">Select Department</option>
              @foreach ($departments as $department)
              <option value ="{{$department->id}}">{{$department->name}}</option>
              @endforeach
          </select>
        </div>
      </div>

<div class="col-4">
      <div class="form-group">
        <label for ="categorytype_id">Category Type</label>
        <select id ="categorytype_id" name="categorytype_id" class="form-control"></select>
      </div>
  </div>  
   
  <div class="col-4">
    <div class="form-group">
        <label for ="category_id">Category</label>
        <select id ="category_id" name="category_id" class="form-control"></select>
    </div>
  </div>

  <div class="row">
      <div class="col-5">{!!Form::text('name',' Product Name')!!}</div>
      <div class="col-5 ">{!!Form::text('size','Size')!!}</div>
  </div>
</div>

<div class="row">
<div class="col-5">{!!Form::text('description','Description')!!}</div>
</div>


<div class="row">
    <div class="col-5 ">{!!Form::text('price','price')!!}</div> 
    <div class="col-5 ">{!!Form::select('colour','Colour',['red'=>'Red','blue'=>'Blue','green'=>'Green','yellow'=>'Yellow','gray'=>'Gray','purple'=>'Purple','black'=>'Black','white'=>'White','pink'=>'Pink',])!!}</div> 
</div>


<div class ="row">
  <div class="col-3 d-none" id="brand" >{!!Form::text('brand','Brand')!!}</div>
  <div class="col-3 d-none" id="sleeve">{!!Form::select('sleeve','Sleeve',['short'=>'Short','long'=>'Long','quarter'=>'Quarter'])!!}</div>
  <div class="col-3 d-none" id="coller">{!!Form::select('coller','Coller',['wc'=>'With coller','woc'=>'Without Coller','cc'=>'Chines Coller'])!!}</div>
</div>

<div class="row">
<div class="col-3 d-none" id="material">{!!Form::text('material','Material')!!}</div>
  <div class="col-3 d-none" id="material_style">{!!Form::text('material_style','Material Style')!!}</div>
  <div class="col-3 ">{!!Form::file('image','Image')!!}</div>
</div>


  @section('js')
    <script>
     $(document).ready(function(){
       function departmentChange(department,categorytype){
          if(department){
           $.ajax({
              type: "GET",
              url:"{{route('get.category3')}}? department="+department,
                success: function(res){
                if(res){
                 $('#categorytype_id').empty();
                  $('#categorytype_id').append('<option> Select Categorytype</option>');
                     $.each(res,function(key,value){
                        if(categorytype==value.id){
                            $("#categorytype_id").append('<option value="'+value.id+'" selected>'+value.name+'</option>');
                        }else{
                          $("#categorytype_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                        }
                        })
                      }else{
                        $('#categorytype_id').empty();
                      }
                    }
                      });
                }else{
                  $('#categorytype_id').empty();
                }
              }

              $('#department_id').change(function(){
                 var department=this.value;
              departmentChange(department);
      });
    
     function categorytypeChange(categorytype,category){
          if(categorytype){ 
            $.ajax({
              type: "GET",
              url:"{{route('get.category1')}}? categorytype="+categorytype,
              success: function(res){
                if(res){
                  $('#category_id').empty();
                  $('#category_id').append('<option> Select Category</option>');

                      $.each(res,function(key,value){
                        if(category==value.id){
                            $("#category_id").append('<option value="'+value.id+'" selected>'+value.name+'</option>');
                        }else{
                          $("#category_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                        }
                        })
                      }else{
                        $('#category_id').empty();
                      }
                    }
                      });
                }else{
                  $('#category_id').empty();

                }
              }

              $('#categorytype_id').change(function(){

                var categorytype=this.value;
                categorytypeChange(categorytype);
                $('#brand').addClass('d-none');
                $('#coller').addClass('d-none');
                $('#material').addClass('d-none');
                $('#material_style').addClass('d-none');
                $('#sleeve').addClass('d-none');
               
              });

              $('#category_id').change(function(){
              var category=this.value;
                 categoryChange(category);
                 $('#brand').addClass('d-none');
                $('#coller').addClass('d-none');
                $('#material').addClass('d-none');
                $('#material_style').addClass('d-none');
                $('#sleeve').addClass('d-none');
              
            });
             function categoryChange(category){
                        if(category){
                           $.ajax({
                            type:"GET",
                            url:"{{route('get.category2')}}? category="+category,
                            success:function(res){
                        if(res){
                            $.each(res,function(key,value){
                            $.each(JSON.parse (value.subcategory),function(key1,value1){
                            $('#'+ value1).removeClass('d-none');
                             });
                        })
                        }
                        }
                      })
                    }    
                  } 
                });
    </script>
 @endsection
  
                   
      



                       