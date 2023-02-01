@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Department</h2>
    </div>
        <div class ="float-end">
      
        
    <a class="btn btn-primary btn-icon-spilt" href ="{{route('department.create')}}"> Create Department</a>

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
                      <th>Department Id</th>
                      <th>Department Name</th>
                    
                      <th>Action</th>
                    </tr>
                        <tbody>
                          @foreach($departments as $department)
                          <tr>
                            <td>{{$department->id}}</td>
                            <td>{{$department->name}}</td>
                            <td>
                                <a href="{{route('department.show',$department->id)}}" class="btn btn-primary"><span class="text">Show</span></a>
                                <a href="{{route('department.edit',$department->id)}}" class="btn btn-dark"><span class="text"><i class="mdi mdi-file-check btn-icon-append"></i>Edit</span></a>
                                <a href="{{route('department.delete',$department->id)}}" class="btn btn-danger"><span class="text"><i class="mdi mdi-file-check btn-icon-append"></i>Delete</span></a>
                                
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