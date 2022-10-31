

  <div class="row">
  <div class="col-3">
{!!Form::file('image','Image')!!}
</div>
      <div class="col-3">
        {!!Form::select('department', 'Department',['women'=>'Women','men'=>'Men','kid'=>'Kids','ethnic'=>'Ethnic','houseandhold'=>'House & Hold','motherandbaby'=>'Mother & Baby','Accessory'=>'Accessories','cosmetic'=>'Cosmetic','toy'=>'Toys',])!!}
      </div>

      <div class="col-2">
        {!!Form::select('category', 'Category',['blouse'=>'Blouse','skirt'=>'Skirt','top'=>'Top','tshirt'=>'Tshirt','frock'=>'Frock','jeans'=>'Jeans','bottom'=>'Bottom','short'=>'Short','pant'=>'Pant','3quarter'=>'3Quarter','skinny'=>'Skinny','hoodies'=>'Hoodies','jacket'=>'Jacket','dangiri'=>'Dangiri',])!!}
      </div>
      <div class="col-2"> 
        {!!Form::select('brand','Brand',['s'=>'S','m'=>'M','l'=>'L','xl'=>'XL','xxl'=>'XXL','xxxl'=>'XXXL','xxxxl'=>'XXXXL','1-10'=>'1-10'])!!}
      </div>
     
     
      <div class="col-2"> 
        {!!Form::select('size','Size',['s'=>'S','m'=>'M','l'=>'L','xl'=>'XL','xxl'=>'XXL','xxxl'=>'XXXL','xxxxl'=>'XXXXL','1-10'=>'1-10'])!!}
      </div>
     
</div>  

<div class="row">
<div class="col-3">
        {!!Form::select('collar','Collar',['wc'=>'WC','woc'=>'WOC','cc'=>'CC'])!!}
      </div>
      <div class="col-3">
      {!!Form::select('material','Material',['plain'=>'Plain','printed'=>'Printed','stripe'=>'Stripe','check'=>'Check','autolock'=>'Autolock','buckle'=>'Buckle','cotton'=>'Cotton'])!!}
      </div>
      <div class="col-3">
        {!!Form::select('sleeve','Sleeve',['s'=>'S','l'=>'L','3quarter'=>'3Quarter'])!!}
      </div>
      <div class="col-3">
      {!!Form::select('type','Type',['slimfit'=>'Slim fit','regularfit'=>'Reguar fit','casual wear'=>'Casual Wear','formalwear'=>'Formal Wear'])!!}
      </div>
</div>

<div class="row">
<div class="col-4">
  {!!Form::select('colour','Colour',['red'=>'Red','blue'=>'Blue'])!!}
</div>
<div class="col-4">
  {!!Form::text('price','price')!!}
</div>

</div>
  
                   
      



                       