<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Category;
use App\Models\Categorytype;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
   public function index(Category $category){
        $q = request()->input('q');
        if($q){
            $categories =Category::where('name','like',"%{$q}%")->orderBy('id', 'desc')->paginate(200);
        }else{
              $categories=Category::orderBy('id', 'desc')->paginate(200);   
        }
        return view('admin.category.index',compact('categories'));
    }

    public function create(){
        $departments = Department::all();
        $categorytypes = Categorytype::all('name','id');
      return view('admin.category.create',compact('departments','categorytypes'));
    }

    public function dropdown3(Request $request){
        $categorytypes =Categorytype::where('department_id',$request->department)->get();
        return response()->json($categorytypes);
    }
  
    public function store(CategoryStoreRequest $request){
        try{
            $data = $request->validated();
            $category=Category::create([
                'name'              =>  $data['name'],
                'subcategory'       =>  $data['subcategory'],
                'department_id'     =>  $data['department_id'],
                'categorytype_id'   =>  $data['categorytype_id'],
            ]);
            return redirect()->route('category.index')->with('success','category has been created successful!');
            }catch(\Illuminate\Database\QueryException $e)
            {
            return redirect()->back()->with('error','You cannot create same Category details again');
            }
    }

    public function show(Category $category){
        return view('admin.category.show',compact('category'));
    }

    public function edit(Category $category , Department $department){
            $departments= Department::all();
         return view('admin.category.edit',compact('category','departments'));
    }

    public function update(CategoryUpdateRequest $request, Category $category){
            $data =$request->validated();
            $category->update($data);
         return redirect()->route('category.index')->with('success','Category has been updated successful!');
    }

    public function delete(Category $category){
     return view('admin.category.delete',compact('category'));
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('category.index')->with('success','Category has been deleted successful!');
    }
}
