
@extends('layouts.admin.master')
@section('title','index')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Employees</h2>
        </div>
        @if(Auth::user()->role->name=='Admin')
        <div class ="float-end">  
            <a class="btn btn-primary btn-icon-spilt" href ="{{route('employee.create')}}"> Create Employee</a>
          </div>
          @endif  
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
                        <th>Employee Id</th>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                      <td>{{$employee->id}}</td>
                      <td>{{$employee->title}}</td>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->designation}}</td>
                      <td>
                        <a href="{{route('employee.show',$employee->id)}}"><button class="btn btn-primary">Show</button></a>
                        <a href="{{route('employee.edit',$employee->id)}}"><button class="btn btn-info">Edit</button></a>
                        <a href="{{route('employee.delete',$employee->id)}}"><button class="btn btn-danger">Delete</button></a>
                      
                      </td>
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
