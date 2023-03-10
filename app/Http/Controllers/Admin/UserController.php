<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;


class UserController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('admin.user.index',compact('customers'));
    }
    public function cindex(Customer $customer){
        $departments=Department::all();
        return view('admin.customer.index',compact('departments','customer'));
    }

    public function show(Customer $customer){
        return view('admin.user.show',compact('customer'));
    }

    public function edit(Customer $customer, User $user){
        $departments = Department::all();
        return view('admin.customer.index',compact('customer','departments','user'));
    }

    public function update(Customer $customer,UserUpdateRequest $request){
            $data = $request->validated();                                                                                                  //validated
            $user =User::where('customer_id','=',$customer->id)->value('id');   //uoutput cureent user id                                                                                       //user frngky employee_id employee model id                                 //id matum bcoz niraya model value id
        if($request->input('password')){
            $data['password']=Hash::make($request->input('password'));
        }else{$data['password']=$customer->user->password;}                                                                                 //user rltn


    Customer::whereId($customer->id)->update([                                                                              //id usr 2 model cnct emplye forin key refernce id /2 create so 2 update
          
            'title'           =>    $data['title'],
            'name'            =>    $data['name'],
            'address'         =>    $data['address'],
            'phonenumber'     =>    $data['phonenumber'],
            'image'           =>    $data['image'],
            'actual_filename' =>    $data['actual_filename'],
            
        ]);
          
    User::whereId($user)->update([                                                                              // mela id filter so $user mtm

            'role_id'=>2,                                                                                           //manual 
            'email'=>$data['email'],
            'password'=>$data['password'],                                                                                       //??? 2 times
            'customer_id'=>$customer->id, //
      ]);

    return redirect()->route('customer.index')->with('success','Customer details has been update successfuly!');;
    
}

    public function delete(Customer $customer){
        return view('admin.user.delete',compact('customer'));
    }

    public function destroy(Customer $customer){
            $customer->delete();
        return redirect()->route('user.index')->with('success','Customer details deleted successful!');
    }
}
