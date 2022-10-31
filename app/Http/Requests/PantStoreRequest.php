<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PantStoreRequest extends FormRequest
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
            'name'=>'required',
            'size'=>'required',
            'material_style'=>'required',
            'material'=>'required',
            'price'=>'required',
            'colour'=>'required',
            'image'=>'nullable',
            'actual_filename'=>'nullable',
        ];
    }
}
