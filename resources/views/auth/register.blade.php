@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')


<main><!-- Breadcrumb -->
<div class="py-3 bg-gray-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 my-2">
                <h1 class="m-0 h4 text-center text-lg-start">Register</h1>
            </div>
            <div class="col-lg-6 my-2">
                <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item">
                        <a class="text-nowrap" href="#">
                            <i class="bi bi-home"></i>Home</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
                <div class="container">
                    <div class="justify-content-center row">
                        <div class="col-lg-10 col-xxl-6">
                            <div class="card">
                                <div class="card-header bg-transparent py-3">
                                    <h3 class="h4 mb-0">Register </h3>
                                </div>
                                <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                      @csrf
                                        <div class="row">
                                        <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                {!!Form::select('title','Title' ,['miss'=>'Miss','mr'=>'Mr','mrs'=>'Mrs'])!!}
                                                   
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group mb-3">
                                                {!!Form::text('name','Full Name')!!}
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                {!!Form::text('name','Full Name')!!} 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                {!!Form::text('address','Address')!!}
                                                </div>
                                            </div>

                                             <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                {!!Form::text('phonenumber','Mobile Number')!!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                {!!Form::text('password','Password')!!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                {!!Form::text('password','Password')!!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check mb-3">
                                        {!! Form::text('password_confirmation', 'Confirm Password')->type('password') !!}
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary">
                                                    Create Account
                                                </button>
                                            </div>
                                            <div class="col-12 col-sm text-sm-end mt-3 mt-sm-0">
                                                <div class="text-muted">Have an account? </div>
                                                <div><a href="sign-up.html">Login here</a></div>
                                            </div>
                                        </div>
                                    </form>
                      
                    

                                <div class="text-center pt-4 pb-5" style="">
                                    <span class="px-3 bg-white d-inline-block align-top lh-sm">OR</span>
                                    <div class="border-bottom mt-n3"></div>
                                </div>
                                <div class="row g-2">
                                    <div class="col">
                                        <button class="btn w-100 btn-dark" type="button">
                                            <i class="bi bi-facebook me-2"></i> Facebook</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn w-100 btn-dark" type="button">
                                    <i class="bi bi-twitter me-2"></i> Twitter</button>
                                </div>
                            </div>
                            <div class="pt-4 text-center">
                                <span class="text-muted">Don't have an account? <a href="sign-up.html">Signup here</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end login --></main>


@endsection