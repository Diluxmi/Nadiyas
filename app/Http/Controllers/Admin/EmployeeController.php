<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees =Employee::all();
        return view('admin.employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

   public function store (UserStoreRequest $request){
        
            $data = $request->validated();
            
            $employee= Employee :: create([
                'title'=>$data['title'],
                'name'=>$data['name'],
                'designation'=>$data['designation'],
                'joiningdate'=>$data['joiningdate'],
                'location'=>$data['location'],
                'phonenumber'=>$data['phonenumber'],
           
            ]);
            User :: create ([
                'employee_id'=>$employee->id,
                 'email'=>$data['email'],
                 'role_id'=> 3,
                 'password' => Hash::make($request->password),
        
             ]);
            
             return redirect()->route('employee.index')->with('success','Employee create succesfuly');
        }
     
    public function show(Employee $employee)
    {
        //dd($employee);
        return view('admin.employee.show',compact('employee'));
    }

   
    public function edit(Employee $employee)

    {
        
        return view('admin.employee.edit',compact('employee'));
    }

    public function update(UserUpdateRequest $request, Employee $employee)
    {
       
        $data = $request->validated();
        $employee->update($data);
        if($request->input('password')){
            $data['password'] = Hash::make($request->input('password'));
            }else{$data['password'] = $employee->user->password;}
        
            $employee->user->update($data);
        
      
        
        return redirect()->route('employee.index',compact('employee'))->with('success','Employee has been update successful!');
    }
    public function delete(Employee $employee){
        return view('admin.employee.delete',compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        //dd($employee);
        $employee->delete();
        return redirect()->route('employee.index')->with('success','Employee has been deleted succesfu!');
    }
}
