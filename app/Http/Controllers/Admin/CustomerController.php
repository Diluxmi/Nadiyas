<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customer.index');
    }
}
