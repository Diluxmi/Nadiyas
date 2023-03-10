@extends('layouts.admin.master')
@section('title','employeeedit')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h3>Edit Employee</h3>
                </div>
            </div>

            <div class="card-body">
                @if(session('success'))
            <div class="alert alert-success">
                    {{session('success')}}
            </div>

                @endif {!! Form::open()->fill($employee)->route('employee.update',[$employee->id])->method('patch') !!}
                @include('admin.employee._form')
                    <div class="row">
                        <div class="col-12">
                            <div class="float-right">
                                <button  class="btn btn-primary btn-icon-text"><i class="mdi mdi-floppy"></i>Update</button>
                                <a class="btn btn-dark" href="{{ route('employee.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection