@extends('layouts.admin.master')
@section('title','index')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Customers</h2>
        </div>   
      </div>
    <div class="row">
  <div class="col-4">
<div class="float-end">
         
</div>
</div> 
</div>
<br>
        <table class="table">
                     <tr>
                        <th>Customer Id</th>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>email</th>
                        <th>Mobile Number</th>
                        <th></th>
                    </tr>
                
      <tbody>
           @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{$customer->title}}</td>
                            <td>{{ $customer->name}}</td>
                            <td><image src="{{asset('storage/'.$customer->image)}}"  style="height:100px; width:100px;"}}></td>
                            <td>{{ $customer->user->email}}</td>
                            <td>{{ $customer->phonenumber}}</td>  
                            
                            <td>
                                <a href="{{route('user.show',[$customer->id])}}" class="btn btn-primary"><span class="text">Show</span></a>
                                <a href="{{route('user.delete',[$customer->id])}}" class="btn btn-danger"><span class="text"><i class="mdi mdi-delete"></i>Delete</span></a>
                              </td>
                          </tr>
                        </tr>


                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

               @endsection
