<div class="row">

<div class="form-group">
    <div class="col-4">
        <label for ="department_id">Departments:</label><br/>
        <select id="department_id" name="department_id" class="form-control">
            <option value="">Select Department</option>

            @foreach ($departments as $department)
              <option value ="{{$department->id}}">{{$department->name}}</option>
              @endforeach
            </select>
</div>

<div class="col-4">
      <div class="form-group">
        <label for ="categorytype_id">Category type</label>
        <select id ="categorytype_id" name="categorytype_id" class="form-control">
        </select>
    </div>
  </div>

</div>
</div>
   
      

<div class="col-4">
{!!Form::text('name','Category Name')!!}
</div>
</div>
<div class="row">
    <div class="col-2">

    <input type="checkbox" name="subcategory[]" value="brand">Brand
    </div>

    <div class="col-2">

<input type="checkbox" name="subcategory[]" value="sleeve"> Sleeve
    </div>
    <div class="col-2">
    <input type="checkbox" name="subcategory[]" value="coller">Coller
    </div>
    <div class="col-2">
    <input type="checkbox" name="subcategory[]" value="material">Material

    </div>
    <div class="col-2">
    <input type="checkbox" name="subcategory[]" value="material_style">Material Style

    </div>
    
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



            }); 
    </script>
@endsection