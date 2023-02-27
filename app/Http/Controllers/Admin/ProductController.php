<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Department;
use App\Models\Category;
use App\Models\Categorytype;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   
    public function index(Product $product)
    {
        $q = request()->input('q');
        if($q){
            $products =Product::where('name','like',"%{$q}%")->orderBy('id', 'desc')->paginate(200);
        }else{
              $products=Product::orderBy('id', 'desc')->paginate(200);   
        }
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
         $categories =Category::all();
         $departments =Department::all();
         $categorytypes=Categorytype::all();
         return view('admin.product.create',compact('categories','departments','categorytypes'));
    }
     public function dropdown(Request $request){
        $categorytypes =Categorytype::where('department_id',$request->department)->get();
        $categories = Category::all();
        return response()->json(['categorytypes'=>$categorytypes,'categories'=>$categories]);
    }

    public function dropdown1(Request $request){
        $categories = Category::where("categorytype_id",$request->categorytype)->get();
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
        'description'=>$data['description'],
        'brand'=>$data['brand'],
        'coller'=>$data['coller'],
        'colour'=>$data['colour'],
        'sleeve'=>$data['sleeve'],
        'material'=>$data['material'],
        'material_style'=>$data['material_style'],
        'price'=>$data['price'],
        'department_id'=>$data['department_id'],
        'categorytype_id'=>$data['categorytype_id'],
        'category_id'=>$data['category_id'],
        'image'=>$path,
        'actual_filename'=>$name,
        'extension'=>$extension,
      ]);
    return redirect()->route('product.index')->with('success','Product has been created successful!');

    }

    public function show(Product $product)
    {
        return view('admin.product.show',compact('product'));
    }

    public function edit(Product $product)

    {
        $departments = Department::all();
        $categories =Category::all(); 
        return view('admin.product.edit',compact('product','departments','categories'));
    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->updated($data);
        //dd($data);
        return redirect()->route('product.index',compact('product'))->with('success','Product has been update successful!');
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
