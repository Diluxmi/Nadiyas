@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')


<main><!-- Breadcrumb -->
<div class="py-3 bg-gray-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 my-2">
                <h1 class="m-0 h4 text-center text-lg-start">Login</h1>
            </div>
            <div class="col-lg-6 my-2">
                <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item">
                        <a class="text-nowrap" href="#">
                            <i class="bi bi-home"></i>Home</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Login</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="justify-content-center row">
                <div class="col-lg-5 col-xxl-4">
                    <div class="card">
                        <div class="card-header bg-transparent py-3">
                            <h3 class="h4 mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                       
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                       
                       
                       
                        <div class="text-center pt-4 pb-5" style="">
                                    <span class="px-3 bg-white d-inline-block align-top lh-sm">OR</span>
                                    <div class="border-bottom mt-n3"></div>
                                </div>
                                <div class="row g-2">
                                    <div class="col">
                                        <a class="btn w-100 btn-dark" type="button" href="https://www.facebook.com/profile.php?id=100061016144319">
                                            <i class="bi bi-facebook me-2"></i> Facebook</a>
                                        </div>
                            </div>
                            <div class="pt-4 text-center">
                                <span class="text-muted">Don't have an account? <a href="{{ route('register') }}">Signup here</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end login --></main>

    @endsection

