<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Department $department){
        $departments = Department::all();
        return view('admin.about.index',compact('departments'));
    }
}
