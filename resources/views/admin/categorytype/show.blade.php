@extends('layouts.admin.master')
@section('title','Student List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div >
                    <a href="{{route('categorytype.index')}}" class="float-left btn btn-primary "><i class="mdi mdi-arrow-left-bold"></i></a>
                    <h2 class="float-left ml-2">categorytype Details</h2>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr><th>Category Id </th>
                    <th>Categorytype </th>
                    <th>Department </th></tr>
                <tbody>
                    <tr>
                    <td>{{$categorytype->id}}</td>   
                    <td>{{$categorytype->name}}</td>
                   <td>{{$categorytype->department->name}}</td></tr>  
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
