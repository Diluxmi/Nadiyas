@extends('layouts.admin.master')
@section('title','bloues')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h3>Edit Top</h3>
                </div>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif {!! Form::open()->fill($top)->route('top.update',[$top->id])->method('patch') !!}
                @include('women.blouse._form')
                <div class="row">
                    <div class="col-12">
                    <div class="float-right">
                    <button  class="btn btn-primary btn-icon-text"><i class="mdi mdi-floppy"></i>Update</button>
                        <a class="btn btn-dark" href="{{ route('top.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>
                        </div>
                    </div>
                </div>
{!! Form::close()!!}
</div>
</div>
</div>
</div>
@endsection