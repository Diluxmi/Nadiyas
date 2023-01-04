@extends('layouts.admin.master')
@section('title','department')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
               
                <div class="float-left">
                    <h2>Edit Category</h2>
                </div>
            </div>
            <div class="card-body">
                @if (session('error'))
                <div class="alert alert-warning">
                    {{ session('error') }}
                </div>
                @endif
                {!! Form::open()->fill($categorytype)->route('categorytype.update',[$categorytype->id])->method('patch') !!}
                @include('admin.categorytype._form')
                <div class="row">
                    <div class="col-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md"><i class="mdi mdi-floppy"></i>Update</button>
                        <a class="btn btn-dark btn-md" href="{{ route('categorytype.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
