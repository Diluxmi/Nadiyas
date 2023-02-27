@extends('layouts.admin.master')
@section('title','index')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left ml-2"><h3>Stock</h3></div>
          <div class ="float-end">  
            <a class="btn btn-primary btn-icon-spilt" href ="{{route('stock.create')}}"> Add Stock</a>
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
                  <th>Stock Id</th>
                  <th>Product Id</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th></th>
                </tr>
                  <tbody>
                    @foreach($stocks as $stock)
                   <tr>
                    <td>{{$stock->id}}</td>
                    <td>{{$stock->product->id}}</td>
                    <td>{{$stock->product->name}}</td>
                    <td>{{$stock->quantity}}</td>
                         <td>
                      
                          <a href="{{route('stock.edit',$stock->id)}}" class="btn btn-dark"><span class="text"><i class="mdi mdi-file-check btn-icon-append"></i>Update</span></a>
                          <a href="{{route('stock.delete',$stock->id)}}" class="btn btn-danger"><span class="text"><i class="mdi mdi-delete"></i>Delete</span></a>
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