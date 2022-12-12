<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Department;
use App\Models\Category;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function sindex(){
        $categories =Category::all();
        $departments =Department::all();
        return view('admin.product.sindex',compact('categories','departments'));

    }

    public function index(Product $product)
    {
        $products =Product::orderBy('id','asc')->paginate('12');
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories =Category::all();
        $departments =Department::all();

        return view('admin.product.create',compact('categories','departments'));
    }

    public function dropdown(Request $request){
        $categories = Category::where("department_id",$request->department)->get();
        return response()->json($categories);
    }

    public function dropdown2(Request $request){
        $category=Category::where('id',$request->category)->get();
        return response()->json($category);
    }


    public function store(ProductStoreRequest $request)
    {

      $data = $request->validated();
     if ($request->has('image')){
        $file=$request->file('image');
        $name = $file->getClientOriginalName();
        $filename = date('YmdHi').$file->getClientOriginalName();
       
        $extension = $file->getClientOriginalExtension();
        $path=$request->file('image')->store('images','public');
    }
    
       
   



      $product =Product::create([
        'name'=>$data['name'],
        'size'=>$data['size'],
        'brand'=>$data['brand'],
        'coller'=>$data['coller'],
        'colour'=>$data['colour'],
        'sleeve'=>$data['sleeve'],
        'material'=>$data['material'],
        'material_style'=>$data['material_style'],
        'type'=>$data['type'],
        'price'=>$data['price'],
        'department_id'=>$data['department_id'],
        'category_id'=>$data['category_id'],
        'image'=>$filename,
        'actual_filename'=>$name,
        'extension'=>$extension,
      ]);


      return redirect()->route('product.index')->with('success','Product has been created successful!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)

    {
        $departments = Department::all();
        $categories =Category::all(); 
        return view('admin.product.edit',compact('product','departments','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        
        $product->updated($data);
       
        return redirect()->route('product.index',compact('product'))->with('success','Product has been created successful!');
    }

    public function delete(Product $product){
        return view('admin.product.delete',compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success','Product has been deleted succesfu!');
    }
}
