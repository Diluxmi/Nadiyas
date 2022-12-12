@extends('layouts.admin.master')
@section('title','Department List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div >
                <a href="{{route('department.index')}}" class="float-left btn btn-primary"><i class="mdi mdi-arrow-left-bold"></i></a>
                    <h2 class="float-left ml-2">Department Details</h2>
                </div>
            </div>
            <div class="card-body">

            <table class="table">
                    <tr>
                        <th>Department Id</th>
                        <th>Department Name</th>
                    </tr>
                
                <tbody>
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{$department->name}}</td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
