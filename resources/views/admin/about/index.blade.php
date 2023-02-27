@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')


    <!-- Breadcrumb -->
    <div class="py-3 bg-gray-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 my-2">
                            <h1 class="m-0 h4 text-center text-lg-start">About</h1>
                        </div>
                        <div class="col-lg-6 my-2">
                            <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                                <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                                <li class="breadcrumb-item text-nowrap active" aria-current="page">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb -->
        <!-- End Header -->
        <!-- Main -->
        <main>
        <div class="py-3 bg-white-100">
            <section class="section background-color:red;">
                <div class="container">
                    <div class="row align-items-top">
                        <div class="col-lg-6 my-3">
                        <img src="{{asset('customer/img/tree.png')}}" style="width:550px;"title="" alt=""> 
                        </div>
                        <div class="col-lg-6 ps-lg-8 my-3">
                            <h6 class="mb-3 text-gray-400">
                                Our story
                            </h6>
                            <h2 class="mb-4">About our Textile</h2>
                            <p>Nadiyas is a trendy fashionable textile based in Nawalapitiya, Srilanka. which has led the trendy lifestyle industry for the last three decades. 
                            This industry provides fashionable and new technology products in six locations. </p>
<p>For that Nawalapitiya,Gampola,Matale,Kandy,Kurunagala,Polonnaruwa.They have 50000 loyal customer.
</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
            <!-- End Section -->
            <!-- Section -->
            <section class="section bg-gray-100">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="pe-lg-5">
                                <h3 class="mb-3">Our vission</h3>
                                <p class="m-0">To be the highest quality standard, trendy life style products & services provider in retail fashion industry.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pe-lg-5">
                                <h3 class="mb-3">Our mission </h3>
                                <p class="m-0">To create a value addition culture in our business atmosphere with continuous innovation,quality & latest technology blended with valuable service.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pe-lg-5">
                                <h3 class="mb-3">Our goal</h3>
                                <p class="m-0">Improve the shopper's experience, Analyze, measure and leverage customer data to improve sales,improve the customer support experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Section -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center section-heading">
                        <div class="col-lg-6 text-center">
                            <h3 class="h1">Nadiya's Highlights</h3>
                        </div>
                    </div>
                    <div class="row g-3">
                       <div class="col-12">
        
                            <table class="table table-bordered center" style="table-align:center;">
                            <tbody>
                            @foreach($abouts as $about) 
                                <tr class="text-dark" >
                                    <div class="col-4">
                                <td ><h4>{{$about->title}}</h4></td>
                            </div>
                            <div class="col-3">
                                <td>
                                    <a href="{{route('about.show',$about->id)}}" class="btn btn-info"><span class="text">View Information</span></a>
                                </td>
                            </div>
                                </tr>
                            @endforeach
                            </tbody>
                            </table>

                        </div>      
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Section -->
         <!--   <section class="section bg-gray-100">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-3 col-6">
                            <div class="text-center mb-30">
                                <div class="display-5 mb-3 text-primary">
                                    <i class="bi bi-briefcase"></i>
                                </div>
                               <a href="{{route('about.event')}}"> <span>Event</span></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="text-center mb-30">
                                <div class="display-5 mb-3 text-primary">
                                    <i class="bi bi-trophy"></i>
                                </div>
                                <h2 class="count">168</h2>
                                <span>cups of coffee</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="text-center mb-30">
                                <div class="display-5 mb-3 text-primary">
                                    <i class="bi bi-intersect"></i>
                                </div>
                                <h2 class="count">2</h2>
                                <span>branding</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="text-center mb-30 mrgn-none">
                                <div class="display-5 mb-3 text-primary">
                                    <i class="bi bi-emoji-smile"></i>
                                </div>
                                <h2 class="count">60000</h2>
                                <span>happy clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- End Section -->
            <!-- About us Start -->
        <!--    <div class="section">
                <div class="container">
                    <div class="row justify-content-center section-heading">
                        <div class="col-lg-6 text-center">
                            <h3 class="fw-500 h2 m-0">What our clients say?</h3>
                        </div>
                    </div>
                    <div class="swiper-hover-arrow position-relative">
                        <div class="swiper swiper-container" data-swiper-options='{
                                          "slidesPerView": 1,
                                          "spaceBetween": 24,
                                          "loop": true,
                                          "pagination": {
                                            "el": ".swiper-pagination",
                                            "clickable": true
                                            },
                                          "navigation": {
                                            "nextEl": ".swiper-next-02",
                                            "prevEl": ".swiper-prev-02"
                                          },
                                          "breakpoints": {
                                            "600": {
                                              "slidesPerView": 1
                                            },
                                            "991": {
                                              "slidesPerView": 2
                                            }
                                          }
                                    }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="lead text-center border p-4 mb-4">
                                        <p>Hi my name is Vihansa Jayathilaka and I was went your shop one day and I bought some dresses. Really I exited.because I was found fantastic collection on your shop. I just wanted to say that There was great customer service on Nadiya's textile and everyone else there was so friendly and helpful. </p>
                                        <h5 class="m-0 pt-2">Vihansa Jayathilaka</h5>
                                        
                                    </div>
                                </div>
                                
                                <div class="swiper-slide">
                                    <div class="lead text-center border p-4 mb-4">
                                        <p>You’re really good at obtaining first-hand customer information and using this information to improve our products and services. You should show the rest of us how you go about obtaining this information.</p>
                                        <h5 class="m-0 pt-2">Mohamad Azan</h5>  
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lead text-center border p-4 mb-4">
                                        <p>Your loyal customer base is outstanding. Customers often ask for you by name and you have a lot of repeat customers as a result. Great job!</p>
                                        <h5 class="m-0 pt-2">Kavin </h5>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="lead text-center border p-4 mb-4">
                                        <p>You're really good at focusing on what customers need and require. You have a real instinct to understand our customers. Good work!</p>
                                        <h5 class="m-0 pt-2">Nancy Drew</h5> 
                                    </div>
                                </div>
                                
                            </div>
                            <div class="swiper-pagination mt-4 d-lg-none position-relative"></div>
                        </div>
                        <div class="swiper-arrow-style-02 swiper-next swiper-next-02"><i class="bi bi-chevron-right"></i> </div>
                        <div class="swiper-arrow-style-02 swiper-prev swiper-prev-02"><i class="bi bi-chevron-left"></i></div>
                    </div>
                </div>
            </div>-->
            <!-- About us End -->
        </main>
     
        <!-- End Footer -->
    </div>
  
</body>

</html>
@endsection