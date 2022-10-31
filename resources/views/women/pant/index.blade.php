@extends('layouts.admin.master')
@section('title', 'pant')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg- white rounded border-info">
        <div class="card-header rounded border-primary">    
            <div class="float-start">
                <h4>Pant</h4>
            </div>
<div class="float-end">
    <a class="btn btn-primary btn-icon-split" href="{{route('pant.create')}}">Create Pant</a>
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

</tbody>
</table>
</div>
</div>
</div>

</div>
</div>

@endsection