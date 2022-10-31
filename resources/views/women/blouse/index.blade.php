@extends('layouts.admin.master')
@section('title', 'women')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg- white rounded border-info">
        <div class="card-header rounded border-primary">    
            <div class="float-start">
                <h4>Blouse</h4>
            </div>
<div class="float-end">
    <a class="btn btn-primary btn-icon-split" href="{{route('blouse.create')}}">Create Blouse</a>
</div>
</div>
<br>
<div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
</div>
@endif


<table class="table">

    <tr>
    <th>Name</th>
    <th>Image</th>
    <th>size</th>
    <th>Price</th>
    <th>Colour</th>
    <th></th>
</tr>
<tbody>
  @foreach($blouses as $blouse)
    <tr>
        <td>{{$blouse->name}}</td>
        <td><img src="{{url('public/images/'.$blouse->image)}}"></td>
        <td>{{$blouse->size}}</td>
        <td>{{'Rs'.$blouse->price}}</td>
        <td>{{$blouse->colour}}</td>
       
        <td>
            <a href="{{route('blouse.show')}}" class="btn btn-primary"><span class="text">Show</span></a>
            <a href="" class="btn btn-info"><span class="text"><i class="mdi mdi-cart"></i>Shopping Cart</span></a>
            <a href="{{route('blouse.edit')}}" class="btn btn-dark"><span class="text"><i class="mdi mdi-file-check btn-icon-append"></i>Edit</span></a>
            <a href="{{route('blouse.delete')}}" class="btn btn-danger"><span class="text"><i class="mdi mdi-delete"></i>Delete</span></a>
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