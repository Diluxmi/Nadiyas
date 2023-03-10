<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Hash;
use Session;
use App\Models\User;
use App\Models\Customer;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
class CustomAuthController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        
        return view('auth.login',compact('departments'));
    }  
      
    public function customLogin(Request $request, Department $department)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'employee_id' => ['required', 'string', 'max:25'],
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        
        $departments =Department::all();
        return view('auth.register',compact('departments'));
    }
      
    public function customRegistration(Request $request)
    {  
         $request->validate([
                'title'=>'required',
                'name' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'image'=>['nullable','string'],
                'actual_filename'=>['nullable','string'],
                'phonenumber' =>['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10'], /// meaning of regex
                'password' => ['required','confirmed'],
                
            ]);
    
    
            $customer = Customer::create([

                'title'=>$request->title,
                'name' => $request->name,
                'address'  =>$request->address,
                'phonenumber' =>$request->phonenumber,
                
                 // not in customer table    
    
                 
            ]);

           
    
            $user = User::create([
                'role_id'=>2,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'customer_id' =>$customer->id,
    
            
            ]);
    
            event(new Registered($user));
    
            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);
        }

    }