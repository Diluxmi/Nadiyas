@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left ml-2"><h3>Product Size</h3></div>
          <div class ="float-end">  
            <a class="btn btn-primary btn-icon-spilt" href ="{{route('size.create')}}"> Create photo</a>
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
                  <th>Product Name</th>
                  <th>Size</th>
                  
                 
                  <th>Action</th>
                </tr>
                  <tbody>
                  @foreach($sizes as $size)
                    <tr>
                   
                      <td class=col-1>{{$size->product->name}}</td>
                      <td class="col-1">{{$size->size}} </td>
                      <td>
                          <a href="{{route('size.delete',$size->id)}}" class="btn btn-danger"><span class="text"><i class="mdi mdi-delete"></i>Delete</span></a>
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