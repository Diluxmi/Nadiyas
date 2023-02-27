@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left ml-2"><h3>Product Photos</h3></div>
          <div class ="float-end">  
            <a class="btn btn-primary btn-icon-spilt" href ="{{route('photo.create')}}"> Create photo</a>
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
                  <th>Name</th>
                  <th>Image</th>
                 
                  <th></th>
                </tr>
                  <tbody>
                  @foreach($photos as $photo)
                    <tr>
                   
                      <td class=col-1>{{$photo->product->id}}</td>
                      <td class="col-1">{{$photo->product->name}} </td>
                      <td class="col-1"><img src="{{asset('storage/'.$photo->image)}}"  style="height:120px; width:100px;"></td>
                      
                      
                      <td>
                         
                          <a href="{{route('photo.edit',$photo->id)}}" class="btn btn-dark"><span class="text"><i class="mdi mdi-file-check btn-icon-append"></i>Edit</span></a>
                          <a href="{{route('photo.delete',$photo->id)}}" class="btn btn-danger"><span class="text"><i class="mdi mdi-delete"></i>Delete</span></a>
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