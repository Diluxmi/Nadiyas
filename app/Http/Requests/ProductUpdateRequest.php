<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProductUpdateRequest extends FormRequest
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
        $product=$this->product;
        return [
        
            'name'                =>    'required',
            'department_id'       =>    'required',
            'category_id'         =>    'required',
            'categorytype_id'     =>    'required',
            'brand'               =>    'nullable',
            'size'                =>    'required',
            'description'         =>    'nullable',
            'coller'              =>    'nullable',
            'sleeve'              =>    'nullable',
            'material'            =>    'nullable',
            'material_style'      =>    'nullable',
            'price'               =>    'required',
            'colour'              =>    'required',
            'image'               =>    'nullable',
            'actual_filename'     =>    'nullable',
        ];
    }
}
