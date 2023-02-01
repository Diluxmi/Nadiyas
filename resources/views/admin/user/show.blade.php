@extends('layouts.admin.master')
@section('title','Teacher List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <div >
               <a href="{{route('user.index')}}" class="float-left btn btn-primary btn-circle"><i class="mdi mdi-arrow-left-bold"></i></a> </div>
                <div> <h2 class="float-left ml-2"> {{$customer->name}} Details</h2></div>
            </div>
            <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <tr><td>Id:-  {{ $customer->id }}</td></tr>
                    <tr><td> Full Name :-   {{ $customer->title}}.{{$customer->name}}</td></tr>
                    <tr><td>Mobile Number :-  {{$customer->phonenumber}}</td></tr>
                    <tr><td>Email:-   {{ $customer->user->email }}</td></tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
@endsection
