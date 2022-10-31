<div class="row">

        <div class="col-3">
        {!!Form::text('name','Name')!!}
        </div>
        <div class="col-3">
      {!!Form::file('image','Image')!!}
      </div>

    
    <div class="col-2"> 
      {!!Form::select('size','Size',['s'=>'S','m'=>'M','l'=>'L','xl'=>'XL','xxl'=>'XXL','xxxl'=>'XXXL','xxxxl'=>'XXXXL','1-10'=>'1-10'])!!}
      </div>
     
      
      <div class="col-3">
      {!!Form::select('material_style','Material Style',['plain'=>'Plain','printed'=>'printed'])!!}
      </div>
     
</div>  

<div class="row">
      <div class="col-4">
      {!!Form::text('material','Material')!!}
      </div>

      
      <div class="col-4">
      {!!Form::select('colour','Colour',['red'=>'Red','blue'=>'Blue'])!!}
      </div>
      <div class="col-4">
        {!!Form::text('price','Price')!!}
      </div>     
</div>

