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
                'title'=>'required',
                'name'=>'required',
                'designation'=>'required',
                'joiningdate'=>'required',
                'location'=>'required',
                'phonenumber'=>'required',
                'email' => 'required|string|email|unique:users|max:255',
                'password' => 'required|string|min:8|max:255',
            ];
        }
    }
    
                  


      


