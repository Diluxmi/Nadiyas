<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Department;
use App\Models\Category;
use App\Models\Role;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

class CustomerController extends Controller
{
   
    public function index( Customer $customer)
    
    {
        $departments = Department::all();
        
        return view('admin.customer.index');
    }

    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->validated();

            if($request->has('image')){
                $file =$request->file('image');
                $name = $file->getClientOriginalName();
                $filenmae = date('YmdHi').$file->getClientOriginalName();

                $extension = $file->getClientOriginalExtension();
                $path = $request->file('image')->store('images','public');

            }
        $customer =Customer::create([
            'title'=>$data['title'],
            'name'=>$data['name'],
            'address'=>$data['address'],
            'phonenumber'=>$data['phonenumber'],
            'image'=>$path,
            'actual_filename'=>$name,
            'extension'=>$extension,
        
        ]);
        
        return redirect()->route('customer.index')-with('success','customer has been created successful!');
    }
    
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }
}
