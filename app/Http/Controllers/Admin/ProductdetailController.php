<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('admin.productdetail.index',compact('departments'));
    }
}
