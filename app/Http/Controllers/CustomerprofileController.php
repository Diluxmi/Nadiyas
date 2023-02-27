<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerprofileController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('admin.customerprofile.index',compact('customers'));
    } 
}
