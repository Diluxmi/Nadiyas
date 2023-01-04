@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <a class="float-left btn btn-primary btn-circle" href="{{route('product.index')}}"><i class="mdi mdi-arrow-left-bold"></i></a></div>
                        <br>
                    <div class="float-left ml-2">Product Details</h2></div>
                        <br>
            <table class="table">
                <tbody>
                    <tr><th>Name</th><td>{{$product->name}}</td> </tr>
                    <div class="card-img">
                    <tr><th>Image</th><td><td><img src="{{url('storage/'.$product->image)}}"  style="height:250px; width:200px;"></td></td></td> </tr>
                    </div>
                    <tr><th>Size</th><td>{{$product->size}}</td> </tr>
                    <tr><th>Price</th><td>{{'Rs'.' .'.$product->price}}</td> </tr>
                    <tr><th>Colour</th><td>{{$product->colour}}</td> </tr>  
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection

