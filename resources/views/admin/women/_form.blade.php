<div class="row">
      <div class="col-3">
           
                   {!!Form::select('category', 'Category',['blouse'=>'Blouse','skirt'=>'Skirt','top'=>'Top','tshirt'=>'Tshirt','frock'=>'Frock','saree'=>'Saree','jeans'=>'Jeans','bottom'=>'Bottom','short'=>'Short','pant'=>'Pant','3quarter'=>'3Quarter','skinny'=>'Skinny','hoodies'=>'Hoodies','jacket'=>'Jacket','dangiri'=>'Dangiri',])!!}
          
      </div>
      <div class="col-3"> 
      {!!Form::select('size','Size',['s'=>'S','m'=>'M','l'=>'L','xl'=>'XL','xxl'=>'XXL','xxxl'=>'XXXL','xxxxl'=>'XXXXL','1-10'=>'1-10'])!!}
      </div>
      <div class="col-3">
           
      {!!Form::text('style','Style',)!!}
     
      </div>
      <div class="col-3">
      {!!Form::file('image','Image')!!}
      </div>
</div>  

<div class="row">
      <div class="col-3">
      {!!Form::text('material','Material')!!}
      </div>

      <div class="col-3">
      {!!Form::select('materialstyle','Material Style',['plain'=>'Plain','printed'=>'printed'])!!}
      </div>
     
      <div class="col-3">
      {!!Form::select('colour','Colour',['red'=>'Red','blue'=>'Blue'])!!}
      </div>
      <div class="col-3">
        {!!Form::text('price','Price')!!}
      </div>     
</div>

