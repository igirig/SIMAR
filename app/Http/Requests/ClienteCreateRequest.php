<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'razonSocial' => 'required|min:3|max:64|unique:clientes',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'El campo nombre es requerido',
    //     ];
    // }
}
