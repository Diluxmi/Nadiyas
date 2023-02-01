<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Photo;
use App\Models\Department;
use App\Models\Category;
use App\Models\User;
use App\Models\Customer;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductviewController extends Controller
{
    public function index(Request $request ,Product $product,User $user,Customer $customer){
           
        $departments = Department::all();
        $products=Product::where('category_id',$request->category)->orderBy('id','asc')->paginate('12');
        return view('admin.productview.index',compact('products','departments','user','customer'));
    }

    public function show(Product $product, Photo $photo,User $user){
        $departments =Department::orderBy('id','asc')->paginate('12');
        $photos = Photo::where('product_id',$product->id)->orderBy('id','asc')->paginate('12');
        return view('admin.productview.show',compact('departments','product','photos','user'));
 }
}

