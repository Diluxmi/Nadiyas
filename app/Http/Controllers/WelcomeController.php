<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Category;
use App\Models\Product;
use App\Models\Categorytype;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Department $department,Category $category,Product $product){
     
      $departments =Department::orderBy('id','asc')->paginate('12');
     
      $products = Product::orderBy('id','desc')->take(12)->get();
      $categorytypes =Categorytype::with('department')->orderBy('id','asc')->paginate('12');
      $categories = Category::orderBy('id','asc')->paginate('12');
   return view('welcome',compact('departments','categories','products','product','categorytypes'));
  }  


  public function autocompleteSearch(Request $request)
  {

        $query = $request->get('query');
        $filterResult = Category::where('name', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
  } 

   public function about(){
    return view('admin.about.about');
   }
}
