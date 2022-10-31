<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ProductStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product){
     $products =Product::orderBy('id','asc')->paginate('12'); 
         
     return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(){
    
      return view('admin.product.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request )
    {
            $data=$request->validated();
            $file =$request->file('image');
            $name =$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            if($request->has('image')){
            $path=$request->file('image')->store('images','public');
    }

    $product=Product::create([
       
        'department' => $data['department'],
        'category' => $data['category'],
        'brand'=>$data['brand'],
        'size'=>$data['size'],
        'collar'=>$data['collar'],
        'sleeve'=>$data['sleeve'],
        'material'=>$data['material'],
        'type'=>$data['type'],
        'price'=>$data['price'],
        'colour'=>$data['colour'],
        'image'=>$path,
        'actual_filename'=>$name,
        'extension'=>$extension,
    ]);
      
       return redirect()->route('product.index')->with('success', 'product has been created successfuly!');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products =Product::orderBy('id','asc')->paginate('12'); 
      
        return view('admin.product.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
