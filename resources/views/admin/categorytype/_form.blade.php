<div class="row">

<div class="col-3">
    {!!Form::select('department_id','Department Name')->options($departments)!!}
</div>
<div class="col-3">
    {!!Form::text('name','Category Type ')!!}
</div>
</div>