<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('admin.user.index',compact('customers'));
    }

    public function show(Customer $customer){
        return view('admin.user.show',compact('customer'));
    }

    public function delete(Customer $customer){
        return view('admin.user.delete',compact('customer'));
    }

    public function destroy(Customer $customer){
            $customer->delete();
        return redirect()->route('user.index')->with('success','Customer details deleted successful!');
    }
}
