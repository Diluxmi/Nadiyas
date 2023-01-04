<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorytype;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Requests\CategorytypeStoreRequest;
use App\Http\Requests\CategorytypeUpdateRequest;

class CategorytypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorytypes = Categorytype::with('department')->orderBy('id','asc')->paginate('12');
        return view('admin.categorytype.index',compact('categorytypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::pluck('name','id')->toArray();
        $departments['']='---Choose your Department---';

       
        return view('admin.categorytype.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorytypeStoreRequest $request)
    {
        $data = $request->validated();
        $categorytype=Categorytype::create([
            'name'=>$data['name'],
            'department_id'=>$data['department_id'],
        ]);
        return redirect()->route('categorytype.index')->with('success','category type has been created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorytype  $categorytype
     * @return \Illuminate\Http\Response
     */
    public function show(Categorytype $categorytype)
    {
        return view('admin.categorytype.show',compact('categorytype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorytype  $categorytype
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorytype $categorytype)
    {
        $departments =Department::all();
        return view('admin.categorytype.edit',compact('categorytype','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorytype  $categorytype
     * @return \Illuminate\Http\Response
     */
    public function update(CategorytypeUpdateRequest $request, Categorytype $categorytype)
    {
        $data=$request->validated();
        $category->update($data);

        return redirect()->route('categorytype.index')->with('success','Categorytype has been updated successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorytype  $categorytype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorytype $categorytype)
    {
        //
    }
}
