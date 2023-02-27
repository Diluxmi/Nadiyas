<div class="row">
<div class="col-3">
    {!!Form::select('product_id','Product Name')->options($products)!!}
</div>
<div class="col-3">
    {!!Form::text('quantity','Quantity')!!}
</div>

</div>