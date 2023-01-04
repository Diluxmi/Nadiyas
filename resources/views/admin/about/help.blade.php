@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')


<main>
            <!-- Breadcrumb -->
            <div class="py-3 bg-gray-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 my-2">
                            <h1 class="m-0 h4 text-center text-lg-start">Support</h1>
                        </div>
                        <div class="col-lg-6 my-2">
                            <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                                <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                                <li class="breadcrumb-item text-nowrap active" aria-current="page">Support</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <!-- Section -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center">
                            <h2 class="h1 mb-3">How can we help?</h2>
                            <p class="mx-lg-8">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                            <form class="d-flex flex-column flex-md-row mt-4">
                                <input type="email" class="form-control me-sm-2 mb-2 mb-sm-0" placeholder="you@yoursite.com">
                                <button class="btn btn-primary flex-shrink-0" type="submit">Get Started</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Section -->
            <section class="section bg-gray-100">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-4 col-xl-3 sticky-lg-top sticky-lg-top-header">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="m-0">Articles in this section</h6>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action" href="#">
                                        What is a wallet?
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#">
                                        Navigating Maioni
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#">
                                        Setting up your account & Life hacks with NFTs!
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#">
                                        What terms do I need to know before getting started?
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#">
                                        Once you've connected a wallet, how do you make a purchase?
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#">
                                        Once you've connected a wallet, how do you mint an NFT?
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#">
                                        How do you connect other wallets?
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-9 ps-xl-5 mt-5 mt-lg-0">
                            <article class="card">
                                <div class="card-body">
                                    <h1 class="mb-4 h3">What is a wallet?</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                    <blockquote>
                                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <p class="blockquote-footer m-0">Someone famous in <cite title="Source Title">Dick Grayson</cite></p>
                                    </blockquote>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                    <h5>What are my payment options?</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                    <figure class="figure lightbox-gallery mb-4">
                                        <a href="../../assets/img/pages/1000x700.jpg" class="gallery-link">
                                            <img src="../../assets/img/pages/1000x700.jpg" title="" alt="">
                                        </a>
                                        <figcaption class="mt-3 text-muted text-sm text-center">Figure: Type here your description</figcaption>
                                    </figure>
                                    <ul class="list-unstyled mb-4">
                                        <li class="d-flex py-1"><i class="bi bi-check-circle-fill text-primary me-2"></i> The standard Lorem Ipsum passage, used since the 1500s</li>
                                        <li class="d-flex py-1"><i class="bi bi-check-circle-fill text-primary me-2"></i> Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</li>
                                        <li class="d-flex py-1"><i class="bi bi-check-circle-fill text-primary me-2"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</li>
                                        <li class="d-flex py-1"><i class="bi bi-check-circle-fill text-primary me-2"></i> On the other hand, we denounce with righteous indignation</li>
                                    </ul>
                                    <h5>Where does it come from?</h5>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                    <div class="border-top border-gray-200 pt-4 mt-3">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <img class="avatar rounded-circle" src="../../assets/img/pages/1000x1000.jpg" title="" alt="">
                                                    <div class="col ps-3">
                                                        <h6 class="mb-0">Dick Grayson</h6>
                                                        <span class="small">Published on April 25, 2020</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="nav justify-content-end">
                                                    <a class="icon-sm rounded-circle text-white bg-success ms-2" href="#">
                                                        <i class="bi bi-hand-thumbs-up"></i>
                                                    </a>
                                                    <a class="icon-sm rounded-circle text-white bg-danger ms-2" href="#">
                                                        <i class="bi bi-hand-thumbs-down"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Section -->
            <section class="section border-top bg-primary">
                <div class="container">
                    <div class="row gy-4 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h3 class="h1 fw-500 text-white">Need Any Helps?</h3>
                            <p class="text-white text-opacity-85 m-0">Contact us and we’ll get back to you as soon as we can.</p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <a class="btn btn-white me-3" href="#">Discord More</a>
                            <a class="btn btn-outline-white" href="#">Help Center</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            
        </main>
        @endsection