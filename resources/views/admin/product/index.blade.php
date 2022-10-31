@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Product</h2>
    </div>
        <div class ="float-end">
      
        @if(Auth::user()->role->name=='Admin')
    <a class="btn btn-primary btn-icon-spilt" href ="{{route('product.create')}}"> Create product</a>
@endif
        </div>
</div>
        <br>

        <div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
     
                      <table class="table">
                    <tr>
                      <th>Product Id</th>
                      <th>Category</th>
                      <th>Image</th>
                      <th>Size</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                        <tbody>
                          @foreach($products as $product)
                          <tr>
                            <td class=col-1>{{$product->id}}</td>
                            <td class="col-1">{{$product->category}}</td>
                            <td><img src="{{url('public/images/'.$product->image)}}"></td>
                            <td class="col-1">{{$product->size}}</td>
                            <td class="col-1">{{'Rs.'.$product->price}}</td>
                            <td>
                                <a href="{{route('product.show')}}" class="btn btn-primary"><span class="text">Show</span></a>
                                <a href="" class="btn btn-info"><span class="text"><i class="mdi mdi-cart"></i>Shopping Cart</span></a>
                                <a href="" class="btn btn-dark"><span class="text"><i class="mdi mdi-file-check btn-icon-append"></i>Edit</span></a>
                                <a href="" class="btn btn-danger"><span class="text"><i class="mdi mdi-delete"></i>Delete</span></a>
                              </td>
                          </tr>
                          @endforeach 
                        </tbody>
                        </table>
                        </div>                   
</div>
      </div>
      </div>
      </div>

@endsection