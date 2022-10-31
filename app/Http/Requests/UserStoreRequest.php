<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            $rule = [];
            if($type =$this->input('role_id')){
              
                switch($type){
                    case 1:
                    $rule =[
                       
                        'email' => 'required|email|unique:users',
                        'role_id' => 'required',
                        'password' => 'required | confirmed | string | min:8',
                    ];
                    break;
                    case 2:
                    $rule =[
                        'role_id'=>'required',
                        'name'=>'required',
                        'address' =>'required',
                        'password' => 'required | confirmed | string | min:8',
                        'phonenumber' =>'required',
                        'email' => 'required|email|unique:users',
                        
                    ];
                    break;
                }
            
             return $rule;
            }
    
    }
}
