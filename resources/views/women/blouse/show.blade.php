@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <a class="float-left btn btn-primary btn-circle" href="{{route('blouse.index')}}"><i class="mdi mdi-arrow-left-bold"></i></a></div>
                        <br>    
                    <div class="float-left ml-2">Blouse Details</h2></div>
                <div class="card-body">
          
            <table class="table">
                <tbody>
                    <div class="row">
                    <div class="col-4">   
                    <tr >
                   
                    
                    <th rowspan="8"><img src="{{url('public/images/'.$blouse->image)}} "style="width: 200px; height: 300px;" ></th>
                </tr>
                </div>
                   <div class="col-6">
                    <tr><td> Size : {{ "" .$blouse->size }}</td></tr>
                    <br>
                    <tr><td>Colour : {{ "".$blouse->colour }}</td></tr>
                    <br>
                    <tr><td>Price : {{ "".'Rs'.$blouse->price}}</td></tr>
                    </div>
                
                </tbody>
                @endforeach
            </table>
        </div>
           
    </div>
</div>
</div>
@endsection

