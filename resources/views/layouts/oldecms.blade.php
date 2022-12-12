@extends('layouts.customer.master')
@section('title', 'sale')
@section('content')

<div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/saree.jpg"alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Women Fashion</strong></h1>
                            <p class="m-b-40">I Think Being Intersting is More Important Than Being Beautiful</p>
                            
                        </div>
                    </div>
                </div>
            </li>

            
            <li class="text-center">
                <img src="images/w2.jpg"alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Women Fashion</strong></h1>
                            <p class="m-b-40"><strong>I Think Being Intersting is More Important Than Being Beautiful</strong></p>
                            
                        </div>
                    </div>
                </div>
            </li>

            <li class="text-center">
                <img src="images/w3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Women Fashion</strong></h1>
                            <p class="m-b-40"><strong>I Think Being Intersting is More Important Than Being Beautiful</strong></p>
                         
                        </div>
                    </div>
                </div>
            </li>

            <li class="text-center">
                <img src="images/m2.jpg"alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Men Fashion</strong></h1>
                            <p class="m-b-40">I Think Being Intersting is More Important Than Being Beautiful</p>
                           
                        </div>
                    </div>
                </div>
            </li>


            <li class="text-center">
                <img src="images/w4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Women Fashion</strong></h1>
                            <p class="m-b-40">I Think Being Intersting is More Important Than Being Beautiful</p>
                          
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/men.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Men Fashion</strong></h1>
                            <p class="m-b-40">I Think Being Intersting is More Important Than Being Beautiful</p>
                          
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/k1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Kids fashion</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <br>
    <!-- End Slider -->
   
        
   


<div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-left">
                        <h1>New Arrivals</h1>
                        
                    </div>
                </div>
            </div>
  

      


            
            <div class="row special-list">
        
                 <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="{{asset('images/s1.jpg')}}" class="img-fluid" style="width: 200px; height: 300px;" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{asset('images/m1.jpg')}}" class="img-fluid" style="width: 200px; height: 300px;" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{asset('images/ms.jpg')}}" class="img-fluid" style="width: 200px; height: 300px;" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $15.79</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-left">
                        <h1>Featured Items</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
   
    
    <!-- End Products  -->

    <!-- Start Instagram Feed  -->

    
    <div class="instagram-box">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-left">
                        <h1>Our Brands</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/sathees.jpg" style="width: 200px; height: 100px;" alt="" />
                   
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/m1.jpg" style="width: 200px; height: 100px;" alt="" />
                   
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/ms.jpg" style="width: 200px; height: 100px;" alt="" />
                    
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/kids.jpg" style="width: 200px; height: 100px;"alt="" />
                    
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/s1.jpg" style="width: 200px; height: 100px;"alt="" />
                   
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/m1.jpg" style="width: 200px; height: 100px;"alt="" />
                   
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/saree.jpg" style="width: 200px; height: 100px;" alt="" />
                    
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/modern.jpg"style="width: 200px; height: 100px;" alt="" />
                   
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/kids.jpg" style="width: 200px; height: 100px;" alt="" />
                   
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/ms.jpg" style="width: 200px; height: 100px;" alt="" />
                  
                </div>
            </div>
        </div>
    </div>
    

@endsection