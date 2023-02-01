<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\User;
use App\Models\Customer;
use App\Models\Department;

use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList(Product $product,User $user)
    {
        $departments= Department::all();
        $cartItems = \Cart::getContent();
        //dd($cartItems);
         return view('admin.cart.index', compact('cartItems','departments','product','user'));
    }

     public function addToCart(Request $request, Product $product,User $user,Customer $customer)
    {try{
        if(Auth::user()->role->name=="Customer"){
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array('image' => $request->image,),
        ]);
      
        return redirect()->route('cart.index',[$product->id,$user->id,$customer->id])->with('success','Product is Added to Cart Successfully !');
    }
}catch(\Illuminate\Database\QueryException $e){
    return redirect()->back()->with('error','You cannot cart this item!. please login');
}
}

    public function updateCart(Request $request,Product $product,User $user)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        //dd($request);
        session()->flash('success', 'Item Cart is Updated Successfully !');
        return redirect()->route('cart.index',[$product->id,$user->id]);
    }

    public function removeCart(Request $request,Product $product,User $user)
    {

        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        //dd($request);
        return redirect()->route('cart.index',$product->id);
    }

    public function clearAllCart(Product $product,User $user)
    {
        \Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('cart.index',$product->id);
    }
}
