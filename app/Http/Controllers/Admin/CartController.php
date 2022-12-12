<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $departments=Department::all();
        $products = Product::all();
        $cartItems = \Cart::getContent();
        
        return view('admin.cart.index',compact('departments','products','cartItems'));
    }

    public function store(){
        \card::add([
            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'attributes'=>array(
                'image'=>$request->image,
            )
        ]);
        return redirect()->route('cart.index')->with('session','Product is Added to cart successfully!');
    }

    public function update(Request $request){
        \cart::update(
            $request->id,
            [
                'quantity'=>['relative'=>false, 'value'=>$request->quantity],
            
            ]
            );
            return redirect()->route('cart.index');   
    }

    public function delete(Request $request){
        \cart::remove($request->id);
        session()->flash('success','Product cart remove ');
        return redirect()->route('cart.index');
    }

    public function clearAllcart(){
        \Cart::clear();
        session()->flash('success','All Item cart clear.');
        return redirect()->route('cart.index');
    
}
}
