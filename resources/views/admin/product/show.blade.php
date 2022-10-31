@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <a class="float-left btn btn-primary btn-circle" href="{{route('product.index')}}"><i class="mdi mdi-arrow-left-bold"></i></a></div>
                        <div class="float-left ml-2">Product Details</h2></div>

            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        
                        <th>{{$product->product}}</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <td>{{$product->image}}</td>
                    <td><h6>Name{{ $product->category}}</h6></td>
                    <td><h6>Type</h6>{{$product->type}}</td>                    
                    <td>{{$product->size}}</td>
                    <td><h6>Price</h6>{{$product->price}}</td>
                    <td><h6>Brand</h6>{{$product->brand}}</td>
                    <td><h6>Collar</h6>{{$product->coller}}</td>
                    <td><h6>Sleeve</h6>{{$product->sleeve}}</td>
                    <td><h6>Material</h6>{{$product->materiyal}}</td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection

