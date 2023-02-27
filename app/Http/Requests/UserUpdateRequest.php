<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $customer=$this->customer;
        $user=$this->customer->user;
        return [
            'title'           =>    'required',
            'name'            =>    'required',
            'address'         =>    'required',
            'email'           =>    'required',
            'image'           =>    'required',
            'actual_filename' =>    'required',
            'phonenumber'     =>    'required',
            'password'        =>    'nullable|confirmed|min:8',
            ];
    }
}
