@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left ml-2"><h3>About</h3></div>
          <div class ="float-end">  
            <a class="btn btn-primary btn-icon-spilt" href ="{{route('about.create')}}"> Create Year Information</a>
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
          <th>title</th>
          <th>pdf</th>
          
          <th></th>
        </tr>
              <tbody>
              @foreach($abouts as $about) 
              <tr>
                    <td>{{$about->title}}</td>
                    <td>{{$about->filename}}</td>
                    <td>
                        <a href="{{route('about.show',$about->id)}}" class="btn btn-primary"><span class="text">show</span></a>
                       
                        <a href="{{route('about.delete',$about->id)}}" class="btn btn-danger"><span>Delete</span></a>
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