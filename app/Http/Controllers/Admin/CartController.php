<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\User;
use App\Models\Customer;
use App\Models\Department;
use App\Models\Category;

use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList(Product $product ,Category $category)
    {
        $userID=Auth::user()->id;
        $departments= Department::all();
        $cartItems = \Cart::session($userID)->getContent();

        //dd($cartItems);
        
       //$price =\Cart::getContent();
       //dd($price);
    return view('admin.cart.index', compact('cartItems','departments','product','category'));
    }
        public function addToCart(Product $product)
    {
       // dd($product);
      
       if(Auth::user()!=null){
        $userID=Auth::user()->id;
        //dd($userID);
        
        \Cart::session($userID)->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' =>1,
            
        ]);
      
        return redirect()->route('cart.index',$product->id)->with('success','Product is Added to Cart Successfully !');
     }else{
        return redirect()->route('welcome')->with('error','You can not cart this product,Please login !');
        }
    }

    public function updateCart(Request $request,Product $product,User $user)
    {
       // dd($request);
       $userID=Auth::user()->id;
        \Cart::session($userID)->update(
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
        $userID=Auth::user()->id;
        \Cart::session($userID)->remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        //dd($request);
         return redirect()->route('cart.index',$product->id);
    }

    public function clearAllCart(Product $product,User $user)
    {
        $userID=Auth::user()->id;
        \Cart::session($userID)->clear();//particular user cart clear aagum
        session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('cart.index',$product->id);
    }
}
