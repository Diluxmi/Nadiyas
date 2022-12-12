<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer;
use App\Models\Department;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user,Customer $customer,Department $department)
    {
        $departments =Department::orderBy('id','asc')->paginate('12');
        $categories = Category::orderBy('id','asc')->paginate('12');
        $products =Product::orderBy('id','asc')->paginate('12');
        $role = Auth::user()->role->name;
        switch($role){
            case 'Admin':
                return view('home');
                break;


            case 'Customer':
                return view('welcome',compact('customer','departments','categories','products'));
                break;

        }
    }
}
