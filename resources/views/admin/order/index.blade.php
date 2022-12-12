@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
              
            
          </div>
          <div class="float-left ml-2"><h3>Order List</h3></div>
          <div class ="float-end">  
        <a class="btn btn-primary btn-icon-spilt" href ="{{route('order.create')}}"> Create Order</a>
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
              <tr >
                <th>Id</th>
                <th>Item</th>
                <th>Customer name</th>
                <th>Payment Info</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
                <th></th>
              </tr>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>product->name</td>
                    <td>->customer->name</td>
                    <td>payment_method</td>
                    <td>total_price</td>
                    <td>status</td>
                    <td>
                      <a href="" class="btn btn-danger"><span class="text"><i class="mdi mdi-delete"></i>Delete</span></a>
                    </td> 
                </tr>
              </tbody>
            </table>
          </div>                   
        </div>
      </div>
    </div>
  </div>

@endsection