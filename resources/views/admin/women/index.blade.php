@extends('layouts.admin.master')
@section('title', 'women')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg- white rounded border-info">
        <div class="card-header rounded border-primary">    
            <div class="float-start">
                <h3>Women Products</h3>
            </div>
<div class="float-end">
    <a class="btn btn-primary btn-icon-split" href="{{route('women.create')}}">Create Product</a>
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
    <th>Product Id</th>
    <th>Category</th>
    <th>Image</th>
    <th>Size</th>
    <th>Price</th>
</tr>
<tbody>
    @foreach($womens as $women)
    <tr>
        <td>{{$women->id}}</td>
        <td>{{$women->category}}</td>
        <td><img src="{{url('public/images/'.$women->image)}}"></td>
        <td>{{$women->size}}</td>
        <td>{{'Rs'.$women->price}}</td>
        <td>
            <a href="" class="btn btn-primary"><span class="text">Show</span></a>
            <a href="" class="btn btn-info"><span class="text"><i class="mdi mdi-cart"></i>Shopping Cart</span></a>
            <a href="" class="btn btn-dark"><span class="text"><i class="mdi mdi-file-check btn-icon-append"></i>Edit</span></a>
            <a href="" class="btn btn-danger"><span class="text"><i class="mdi mdi-delete"></i>Delete</span></a>
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