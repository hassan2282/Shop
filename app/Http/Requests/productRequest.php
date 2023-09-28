<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'      => 'required|max:255',
            'prise'     => 'required|numeric|min:1000|max:15000000',
            'weight'    => 'required|numeric|min:10|max:20000',
            'model'     => 'required',
            'color'     => 'required',
            'items'     => 'required|array',
            'categories'=>'required',
            'body'      => 'required|min:10',
        ];
    }
}
