@extends('layouts.admin.master')
@section('title', 'career')
@section('content')

<div class="section">
                <div class="container">
                    <div class="justify-content-center row">
                        <div class="col-lg-10 col-xxl-6">
                            <div class="card">
                                <div class="card-header bg-transparent py-3">
                                    <h3 class="h4 mb-0">Job Application</h3>
                                </div>
                                <div class="card-body">
                                <form method="Post" action="{{ route('job.store')}}" enctype="multipart/form-data">
                                 @csrf
                                 @include('admin.job._form')
                                   
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-end">
                                        <br>
                                        <button  class="btn btn-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i>
                                        Create
                                        </button>
                                        <a class="btn btn-dark btn-md" href="{{ route('job.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




@endsection