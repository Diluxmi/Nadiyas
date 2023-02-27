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
   public function index()
   {
        $categorytypes = Categorytype::with('department')->orderBy('id','desc')->paginate('200');
        return view('admin.categorytype.index',compact('categorytypes'));
    }

   public function create()
   {
        $departments = Department::pluck('name','id')->toArray();
        $departments['']='---Choose your Department---';
        return view('admin.categorytype.create',compact('departments'));
    }

    public function store(CategorytypeStoreRequest $request)
    {
    try{
                $data = $request->validated();
                $categorytype=Categorytype::create([
                'name'          =>  $data['name'],
                'department_id' =>  $data['department_id'],
        ]);
        return redirect()->route('categorytype.index')->with('success','category type has been created successful!');
    }
     catch(\Illuminate\Database\QueryException $e){
        return redirect()->back()->with('error','You cannot create same Categorytype details again');
    }
    }

   public function show(Categorytype $categorytype)
    {
        return view('admin.categorytype.show',compact('categorytype'));
    }

    public function edit(Categorytype $categorytype)
    {
        $departments =Department::all();
        return view('admin.categorytype.edit',compact('categorytype','departments'));
    }

    public function update(CategorytypeUpdateRequest $request, Categorytype $categorytype)
    {
        $data=$request->validated();
        $categorytype->update($data);
        return redirect()->route('categorytype.index')->with('success','Categorytype has been updated successful!');
    }

    public function delete(Categorytype $categorytype)
    {
        return view('admin.categorytype.delete',compact('categorytype'));
    }

    public function destroy(Categorytype $categorytype)
    {
        $categorytype->delete();
        return redirect()->route('categorytype.index')->with('success','Categorytype has been delete successfull!');
    }
}
