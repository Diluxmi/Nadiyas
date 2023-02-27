@extends('layouts.ecommerce.master')
@section('title', 'dashboard')
@section('content')


<main>
            <!-- Breadcrumb -->
            <div class="py-3 bg-gray-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 my-2">
                            <h1 class="m-0 h4 text-center text-lg-start">Shopping cart</h1>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <!-- Cart Table -->
            <div class="card-body">
          @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

        

            <div class="py-6">
                <div class="container">
                    <!-- Cart Table -->
                    <div class="table-content table-responsive cart-table-content">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr class="text-uppercase">
                                    <th class="text-dark text-center fw-500 text-nowrap">Image</th>
                                    <th class="text-dark text-center fw-500 text-nowrap">Product Name</th>
                                    <th class="text-dark text-center fw-500 text-nowrap">Unit Price</th>
                                    <th class="text-dark text-center fw-500 text-nowrap">Qty</th>
                                    <th class="text-dark text-center fw-500 text-nowrap">Subtotal</th>
                                    <th class="text-dark fw-500 text-end text-nowrap">action</th>
                                </tr>
                            </thead>


                            <tbody>
                               @foreach($cartItems as $cartItem)
                                <tr>
                                     <!--<td class="text-center product-thumbnail"><img src=""  style="height:120px; width:100px;"></td>-->
                        <td class="text-center product-thumbnail"><img src="{{asset('storage/'.App\Models\Product::find($cartItem->id)->image)}}"style="height:120px; width:100px;"></td></td>
                                     <td class="text-center product-thumbnail"> {{$cartItem->name}}</td>
                                    <td class="text-center product-thumbnail"> Rs.{{$cartItem->price}}</td>
                                    <td class="text-center product-quantity">
                                        <div class="cart-qty d-inline-flex">
                                            <div class="dec qty-btn qty_btn">-</div>
                                            <input class="cart-qty-input form-control" type="text" name="qtybutton" value="{{$cartItem->quantity}}">
                                            <div class="inc qty-btn qty_btn">+</div>
                                        </div>
                                    </td>
                                    <td class="text-center product-thumbnail">{{$cartItem->price*$cartItem->quantity}}</td>
                                    <td class="product-remove text-end text-nowrap">
                                        
                                    <form action="{{ route('cart.update',$product->id) }}" method="POST" >
                                        @csrf
                                        <input type="hidden" value="{{$product->id}}" name="id">
                                        <button class="btn btn-sm btn-outline-secondary text-nowrap px-3"><i class="bi bi-pencil-square lh-1"></i><span class="d-none d-md-inline-block">Edit</span></button>
                                    </form>
                                    
                                    <form action="{{ route('cart.remove',$product->id) }}" method="POST" >
                                        @csrf
                                        <input type="hidden" value="{{$product->id}}" name="id">
                                        <button class="btn btn-sm btn-outline-danger text-nowrap px-3"><i class="bi bi-x lh-1"></i> <span class="d-none d-md-inline-block">Remove</span></button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Table -->
                    <div class="d-flex">
                        <div>
                            <a class="btn btn-outline-dark" href="{{route('welcome')}}">
                                <i class="ci-arrow-left mt-sm-0 me-1"></i>
                                <span class=" d-sm-inline">Continue Shopping</span>
                            </a>
                            <form action="{{ route('cart.clear',$product->id) }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 text-danger">Remove All Cart</button>
                          </form>
                        </div>
                    </div>
                       
                    

                    <div class="row flex-row-reverse pt-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-header bg-transparent py-3">
                                    <h6 class="m-0 mb-1">Order Total</h6>
                                </div>
                                <div class="card-body ">
                                    <ul class="list-unstyled">
                                    @foreach($cartItems as $cartItem)
                                        <li class="d-flex justify-content-between align-items-center mb-2">
                                             
                                           <h6 class="me-2 text-body">Subtotal</h6>{{$cartItem->price*$cartItem->quantity}}<span class="text-end"></span>
                                        </li>
                                        
                                        <li class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                                            <h6 class="me-2">Grand Total</h6><span class="text-end text-dark"></span>
                                        </li>
                                        @endforeach    
                                    </ul>
                                    <div class="d-grid gap-2 mx-auto">
                                        <a class="btn btn-primary" href="{{route('payment.index')}}">PROCEED TO CHECKOUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
         <!-- Cart Table -->
</main>

@endsection


 

