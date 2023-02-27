@extends('layouts.admin.master')
@section('title','bloues')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h3>Edit Product</h3>
                </div>
            </div>

            <div class="card-body">
                @if(session('success'))
            <div class="alert alert-success">
                    {{session('success')}}
            </div>

                @endif {!! Form::open()->fill($product)->route('product.update',[$product->id])->method('patch') !!}
                @include('admin.product._form')
                    <div class="row">
                        <div class="col-12">
                            <div class="float-right">
                                <button  class="btn btn-primary btn-icon-text"><i class="mdi mdi-floppy"></i>Update</button>
                                <a class="btn btn-dark" href="{{ route('product.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection