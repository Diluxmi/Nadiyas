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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category){
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $categorytypes = Categorytype::all('name','id');
      
        return view('admin.category.create',compact('departments','categorytypes'));
    }

    public function dropdown3(Request $request){
    
        $categorytypes =Categorytype::where('department_id',$request->department)->get();
        return response()->json($categorytypes);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {try{
        $data = $request->validated();
        $category=Category::create([
            'name'=>$data['name'],
           'subcategory'=>$data['subcategory'],
            'department_id'=>$data['department_id'],
            'categorytype_id'=>$data['categorytype_id'],
        ]);
        return redirect()->route('category.index')->with('success','category has been created successful!');
    }catch(\Illuminate\Database\QueryException $e){
        return redirect()->back()->with('error','You cannot create same Category details again');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category , Department $department)
    {
        $departments= Department::all();
        return view('admin.category.edit',compact('category','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $data =$request->validated();
        $category->update($data);

        return redirect()->route('category.index')->with('success','Category has been updated successful!');
    }

   public function delete(Category $category){
     return view('admin.category.delete',compact('category'));
   }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success','Category has been deleted successful!');
    }
}
