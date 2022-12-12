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

class ProductviewController extends Controller
{
   
    public function index(Department $department, Product $product,Category $category){
        $departments =Department::orderBy('id','asc')->paginate('12');
        $categories = Category::orderBy('id','asc')->paginate('12');
        $products=Product::orderBy('id','asc')->paginate('12');

        
        return view('admin.productview.index',compact('departments','category','products'));
    }

 public function show(Product $product){
    $departments =Department::orderBy('id','asc')->paginate('12');
     return view('admin.productview.show',compact('departments','product'));
 }
}

