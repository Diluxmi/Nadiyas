<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class ProductStoreRequest extends FormRequest
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
            'department'     =>'required',
            'category'       =>'required',
            'brand'          =>'required',
            'size'           =>'required',
            'collar'         =>'required',
            'sleeve'         =>'required',
            'material'       =>'required',
            'type'           =>'required',
            'price'          =>'required',
            'colour'         =>'required',
            'image'          =>'nullable',
            'actual_filename'=>'nullable',
            'extension'      =>'nullable',           ];
    }
}
