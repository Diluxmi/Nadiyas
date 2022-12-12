<div class="row">
    <div class="col-2">{{!!Form::text('title','title')!!}}</div>
    <div class= "col-3">{{!! Form::text('name','Name')!!}}</div>
</div>
<div class="row">
    <div class="col-3">{{!! Form::text('email','Email')!!}}</div>
    <div class="col-3">{{Form::text('phonenumber','Mobile Number')}}</div>
</div>
<div class="row">
    <div class="col-3">{{Form::text('address','Address')}}</div>
</div>
<div class="row">
    <div class="col-3">{{Form::text('password','Password')->type('password')}}</div>
    <div class="col-3">{{Form::text('password_confirmation','Confirm Password')->type('password')!!}} </div>
</div>

@section('js')
    <script>
        
        @if(isset($customer))

        $('#inp-email').val("{{$customer->user->email}")
        @endif
    </script>

@endsection