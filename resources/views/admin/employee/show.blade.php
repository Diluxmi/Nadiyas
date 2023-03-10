@extends('layouts.admin.master')
@section('title', 'employee')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <a class="float-left btn btn-primary btn-circle" href="{{route('employee.index')}}"><i class="mdi mdi-arrow-left-bold"></i></a></div>
                        <br>
                    <div class="float-left ml-2">Employee Details</h2></div>
                        <br>
            <table class="table">
                <tbody>
                    <tr><th>Name</th><td>{{$employee->name}}</td> </tr>
                    
                    <tr><th>Email</th><td>{{$employee->user->email}}</td> </tr>
                    <tr><th>Phonenumber</th><td>{{$employee->phonenumber}}</td> </tr>
                    <tr><th>Designation</th><td>{{$employee->designation}}</td> </tr>  
                    <tr><th>Date of Joining</th><td>{{$employee->joiningdate}}</td> </tr> 
                    <tr><th>Location</th><td>{{$employee->location}}</td> </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection

