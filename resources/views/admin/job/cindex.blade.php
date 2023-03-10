@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')

<div class="py-3 bg-gray-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 my-2">
                            <h1 class="m-0 h4 text-center text-lg-start">Jobs </h1>
                        </div>
                        <div class="col-lg-6 my-2">
                            <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                                <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        <section class="product-details py-6">
                <div class="container">
                    <div class="row">
                        <!-- Product Gallery -->
                        @foreach($jobs as $job)
                        <div class="col-lg-12 lightbox-gallery product-gallery" align="center">
                                <img class="img-fluid" src= "{{asset('storage/'.$job->filename)}}" style="height:500px; width:400px;" title="" alt="" >
                            @endforeach
                            </div> 
                    </div>
                </div>
            </section>
@endsection