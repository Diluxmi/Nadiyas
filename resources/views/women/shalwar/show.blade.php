@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <a class="float-left btn btn-primary btn-circle" href="{{route('salwar.index')}}"><i class="mdi mdi-arrow-left-bold"></i></a></div>
                        <br>    
                    <div class="float-left ml-2">Shalwar Details</h2></div>
                <div class="card-body">
          
            <table class="table">
                <tbody>
                    <div class="row">
                    <div class="col-4">   
                    <tr >
                    
                    
                    <th rowspan="8"><img src="{{url('public/images/'.$salwar->image)}} "style="width: 200px; height: 300px;" ></th>
                </tr>
                </div>
                   <div class="col-6">
                    <tr><td> Size : {{ "" .$salwar->size }}</td></tr>
                    <br>
                    <tr><td>Colour : {{ "".$salwar->colour }}</td></tr>
                    <br>
                    <tr><td>Price : {{ "".'Rs'.$salwar->price}}</td></tr>
                    </div>
                
                </tbody>
                
            </table>
        </div>
           
    </div>
</div>
</div>
@endsection

