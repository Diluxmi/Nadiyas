<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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

    public function rules()
    {
       
      $employee=$this->employee->load('user');
        $user=$employee->user;
      
     return [
                
                'title'=>'required',
                'name' =>'required',
                'designation'=>'required',
                'joiningdate' =>'required',
                'location' =>'required',
                'password' => 'nullable | confirmed | string | min:8',
                'phonenumber' =>'required',
                'email' => ['required', 'email', Rule::unique('users')->ignore($user)],
               
            ];
           
        }
      
        
    }



