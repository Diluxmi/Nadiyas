@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card shadow p-3 mb-5 bg-white rounded border-info">
                <div class="card-header rounded border-primary">
                    <div class="float-left">
                        <a href="{{route('stock.index')}}" class="float-left btn btn-primary btn-rounded"><i class="mdi mdi-arrow-left-bold"></i></a>
                        <h3>Stock</h3>
                    </div>
                </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                {{ session('success') }}
                </div>
                @endif
                    <form method="Post" action="{{ route('stock.store')}}" enctype="multipart/form-data">
                 @csrf
                 @include('admin.stock._form')
                <div class="row">
                    <div class="col-12">
                        <div class="float-end">
                        <br>
                        <button  class="btn btn-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i>
                          Create
                        </button>
                        <a class="btn btn-dark btn-md" href="{{ route('stock.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection