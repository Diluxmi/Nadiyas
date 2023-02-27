<div class="row">
<div class="col-6">
    {!! Form::select('product_id', 'Product Name')->options($products)!!}</div>
</div>

<div class="col-6">
    {!!Form::file('image','Image')!!}
</div>
</div>

