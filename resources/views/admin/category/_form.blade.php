<div class="row">
<div class="col-3">
    {!!Form::select('department_id','Department Name')->options($departments)!!}
</div>
<div class="col-3">
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
    <div class="col-2">
    <input type="checkbox" name="subcategory[]" value="type">Type
    </div>
</div>