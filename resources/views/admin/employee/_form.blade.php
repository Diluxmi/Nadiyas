<div class="row">
    <div class="col-2">{!!Form::select('title','title')->options(['Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss'])!!}</div>
    <div class= "col-8">{!! Form::text('name','Name')!!}</div>
</div>
<div class="row">
    <div class="col-4">{!! Form::text('email','Email')!!}</div>
    <div class="col-4">{!!Form::text('phonenumber','Mobile Number')!!}</div>
</div>
<div class="row">
    <div class="col-4">{!!Form::text('designation','Designation')!!}</div>
    <div class="col-4">{!!Form::date('joiningdate','Joining Date')!!}</div>
    <div class="col-4">{!!Form::text('location','location')!!}</div>
</div>
<div class="row">
    <div class="col-4">{!!Form::text('password','Password')->type('password')!!}</div>
    <div class="col-4">{!!Form::text('password_confirmation','Confirm Password')->type('password')!!} </div>
</div>
@section('js')
<script>
@if(isset($employee))
   
    $('#inp-email').val("{{$employee->user->email}}");

@endif
</script>
@endsection