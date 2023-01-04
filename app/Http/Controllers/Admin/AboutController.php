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

    public function contact(Department $department){
        $departments =Department::all();
        return view('admin.about.contact',compact('departments'));
    }

    public function help(Department $department){
        $departments =Department::all();
        return view('admin.about.help',compact('departments'));
    }

    public function policy(Department $department){
        $departments = Department::all();
        return view('admin.about.policy',compact('departments'));
    }

    public function faq(Department $department){
        $departments = Department::all();
        return view('admin.about.faq',compact('departments'));
    }

   public function terms(){
    $departments = Department::all();
    return view('admin.about.terms',compact('departments'));
   }
}
