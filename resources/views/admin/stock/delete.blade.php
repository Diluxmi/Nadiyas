@extends('layouts.admin.master')
@section('title','productdelete')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4>Are sure you want to delete this Stock!</h4>
                </div>
            </div>
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
        </div>
        @endif
    {!!Form::open()->route('stock.destroy',[$stock->id])->method('delete')!!}
        <div class="float-start">
            <button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i>Delete</button>
            <a class="btn btn-dark" href="{{ route('stock.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>
        </div>
    {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection
