<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Category;
use App\Models\Product;
use App\Models\Categorytype;
use App\Models\Job;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Department $department,Category $category,Product $product){
     
      $departments =Department::orderBy('id','asc')->paginate('12');
      $products = Product::orderBy('id','desc')->take(20)->get();
      $categorytypes =Categorytype::with('department')->orderBy('id','asc')->paginate('12');
      $categories = Category::orderBy('id','asc')->paginate('12');
            //$q = request()->input('q');
       //$products =Product::where('name','like',"%{$q}%")->orderBy('id','desc')->paginate(12);
       return view('welcome',compact('departments','categories','products','product','categorytypes','category'));
  }

 
  public function dropdown4(Request $request){
      $categorytypes =Categorytype::where('department_id',$request->department)->get();
      $categories = Category::all();
      return response()->json(['categorytypes'=>$categorytypes,'categories'=>$categories]);
      $category=Category::where('id',$request->category)->get();
       return response()->json($category);
    }
    
    public function index1(){

    }


    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $results = Category::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($results);
    } 

    public function search(Request $request)
{
      $departments = Department::all();
      $products=Product::where('category_name',$request->category)->orderBy('id','asc')->paginate('1000');
      $category=Category::where('name')->get();
      return view('admin.productview.index',compact('products','departments','category'));
  
}



   public function about(){
    return view('admin.about.about');
   }
}
