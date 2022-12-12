<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Department $department,Category $category,Product $product){
     
      $departments =Department::orderBy('id','asc')->paginate('12');
      $categories = Category::orderBy('id','asc')->paginate('12');
      $products = Product::orderBy('id','desc')->take(12)->get();
      
    return view('welcome',compact('departments','categories','products','product'));

    }  

   public function about(){
    return view('admin.about.about');
   }
}
