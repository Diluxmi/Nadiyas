@extends('layouts.admin.master')
@section('title', 'department')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
 
            <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
                <div class="float-left">
            
        <a href="{{route('department.index')}}" class="float-left btn btn-primary btn-rounded"><i class="mdi mdi-arrow-left-bold"></i></a>
   
        <h3> Create Department</h3>
                </div>
            </div>
            <div class="card-body">
                @if(session('error'))
                <div class="alert alert-warning">
                    {{session('error')}}
                </div>
                @endif
                    <form method="Post" action="{{ route('department.store')}}" enctype="multipart/form-data">
                    
                    @csrf
                    @include('admin.department._form')

                <div class="row">
                    <div class="col-12">
                    <div class="float-end">
                        <br>
                        <button  class="btn btn-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i>
                          Create
                        </button>
                        <a class="btn btn-dark btn-md" href="{{ route('department.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>
                        </div>
                    </div>
                </div>
        </form>
                
               
            </div>
        </div>
    </div>
</div>
@endsection