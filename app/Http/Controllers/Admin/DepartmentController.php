<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\DepartmentStoreRequest;
use App\Http\Requests\DepartmentUpdateRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments =Department::orderBy('id','asc')->paginate('12');
        return view('admin.department.index',compact('departments'));
    }


    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentStoreRequest $request)
    {try{
        $data=$request->validated();
        $department = Department::create([
            'name'=>$data['name'],
    ]);
        return redirect()->route('department.index')->with('success','Department has been created successful!'); 
        }catch(\Illuminate\Database\QueryException $e){
        return redirect()->back()->with('error','You cannot create same DEpartment details again');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department){
        
    return view('admin.department.show',compact('department'));
    }

    public function edit(Department $department)
    {
        return view('admin.department.edit',compact('department'));
    }

    public function update(DepartmentUpdateRequest $request, Department $department)
    {
        $data=$request->validated();
        $department->update($data);

        return redirect()->route('department.index')->with('success','Department has been updated successful!');
    }

    public function delete(Department $department){
        return view('admin.department.delete',compact('department'));
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('department.index')->with('success','department  has been deleted!');
    }
}
