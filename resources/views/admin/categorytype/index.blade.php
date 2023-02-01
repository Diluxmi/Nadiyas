@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Category Type</h2>
    </div>
        <div class ="float-end">
      
        
    <a class="btn btn-primary btn-icon-spilt" href ="{{route('categorytype.create')}}"> Create Category type</a>

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
                      <th>Department</th>
                      <th>Category Type</th>
                    
                      <th>Action</th>
                    </tr>
                        <tbody>
                        @foreach($categorytypes as $categorytype)
                          <tr>
                            <td>{{$categorytype->department->name}}</td>
                            <td>{{$categorytype->name}}</td>
                            <td>
                                <a href="{{route('categorytype.show',$categorytype->id)}}" class="btn btn-primary"><span class="text">Show</span></a>
                                <a href="{{route('categorytype.edit',$categorytype->id)}}" class="btn btn-dark"><span class="text"><i class="mdi mdi-file-check btn-icon-append"></i>Edit</span></a>
                                <a href="{{route('categorytype.delete',$categorytype->id)}}" class="btn btn-danger"><span class="text">Delete</span></a>
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