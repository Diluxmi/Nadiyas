<?php

namespace App\Http\Requests\Women;

use Illuminate\Foundation\Http\FormRequest;

class UndergarmentStoreRequest extends FormRequest
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
            'colour'=>'required',
            'price'=>'required',
            'image'=>'nullable',
            'actual_filename'=>'nullable',
        ];
    }
}
