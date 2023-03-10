@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-left ml-2"><h3>Job</h3></div>
          <div class ="float-end">  
            <a class="btn btn-primary btn-icon-spilt" href ="{{route('job.create')}}"> Create Job Ads</a>
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
        <th>Job Id</th>
          <th>Job</th>
          <th>Photo</th>
          
          <th></th>
        </tr>
              <tbody>
                @foreach($jobs as $job)
              <tr>
                <td>{{$job->id}}</td>
                <td>{{$job->jobrole}}</td>
                <td><img src="{{asset('storage/'.$job->filename)}}"  style="height:120px; width:100px;"></td>
                <td>
                      <a href="{{route('job.delete',$job->id)}}" class="btn btn-danger"><span class="text"><i class="mdi mdi-delete"></i>Delete</span></a>
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