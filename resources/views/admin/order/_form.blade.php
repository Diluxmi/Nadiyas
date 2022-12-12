<div class="row">
    <div class="col-6">{!!Form::text('name','Customer Name')!!}</div>
    <div class="col-4">{!!Form::text('phonenumber','Mobile Number')!!}</div>
</div>

<div class="row">
    <div class="col-12">{!!Form::text('address','Address')!!}</div>
</div>

<div class="row">
    <div class="col-3">{!! Form::text('item_count','No of Items')!!}</div>
    <div class= "col-3">{!! Form::text('total_price','Total Price')!!}</div>
    <div class="col-3">{!!Form::text('created_date','Order Date')!!} </div>
    <div class="col-3">{!!Form::text('delivery_date','Delivery Date')!!}</div>
</div>



<div class="row">
    <div class="col-3">{!!Form::select('status','Status',['pending'=>'Pending','processing'=>'Processing','completed'=>'Completed','decline'=>'Decline'])!!}</div>
    <div class="col-3">{!!Form::select('payment_method','Payment Method',['cash on delivery'=>'Cash on delivery'])!!}</div>

</div>