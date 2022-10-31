@extends('layouts.admin.master')
@section('title', 'dashboard')
@section('content')

<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">


<div class="container mt-5">
        <div id="carouselExampleFade" class="carousel slide " data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{asset('new/assets/images/saree.jpg')}}" class="img-thumbnail">
                            <p class="text-center  card-footer" style="color: blue;">
                            </p>
                        </div>

                        <div class="col-3">
                            <img src="{{asset('new/assets/images/m2.jpg')}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                             
                            </p>
                        </div>

                        <div class="col-3">
                            <img src="{{asset('new/assets/images/men.jpg')}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                                
                            </p>
                        </div>

                        <div class="col-3">
                            <img src="{{asset('new/assets/images/saree.jpg.png')}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                               
                            </p>
                        </div>

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{asset('new/assets/images/m2.jpg')}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                               
                            </p>
                        </div>

                        <div class="col-3">
                            <img src="{{asset('new/assets/images/men.jpg')}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                                
                            </p>
                        </div>

                        <div class="col-3">
                            <img src="{{asset('new/assets/images/saree.jpg')}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                             
                            </p>
                        </div>

                        <div class="col-3">
                            <img src="{{asset('new/assets/images/m2.jpg')}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                               
                            </p>
                        </div>

                    </div>
                </div>



            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
</div>
</div>
</div>
@endsection
