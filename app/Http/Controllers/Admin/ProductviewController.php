<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Photo;
use App\Models\Size;
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
    public function index(Request $request,Department $department,Product $product){
       
        $departments = Department::all();
        $products=Product::where('category_id',$request->category)->orderBy('id','desc')->paginate('1000');
        $category=Category::find($request->category);
        $sizes=Size::where('product_id',$product->id)->orderBy('id','asc')->get();
        return view('admin.productview.index',compact('products','departments','category','department','sizes'));
    }

    public function search(Request $request){
        $departments = Department::all();
        $category=Category::where('name',$request->search)->first();
        $products=Product::where('category_id',$category->id)->orderBy('id','asc')->paginate('1000');
        return view('admin.productview.index',compact('products','departments','category'));
  
}

    public function show(Product $product, Size $size, Photo $photo,User $user,Customer $customer){
        $departments =Department::orderBy('id','asc')->paginate('12');
        $photos = Photo::where('product_id',$product->id)->orderBy('id','asc')->paginate('12');
        $sizes=Size::where('product_id',$product->id)->orderBy('id','asc')->paginate('100');
        return view('admin.productview.show',compact('departments','product','photos','sizes','user','customer'));
 }


public function filter(Request $request)
{
    $departments = Department::all();
    //$price_range = $request->input('price_range');
     
    $colour = $request->input('colour');
    //dd($colour);
    $category=Category::where('name',[$request->filter,])->first();
    $products = Product::where('category_id',$category->id)->whereIn('colour', $colour)->get();
    
    return view('admin.productview.index',compact('products','departments','category'));
}

}
