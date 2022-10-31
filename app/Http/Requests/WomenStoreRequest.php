<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WomenStoreRequest extends FormRequest
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
            'category'=>'required',
            'size'=>'required',
            'material'=>'required',
            'materialstyle'=>'required',
            'style'=>'required',
            'price'=>'required',
            'colour'=>'required',
            'image'=>'nullable',
            'actual_filename'=>'nullable',
           
            
        ];
    }
}
