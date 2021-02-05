<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteEditRequest extends FormRequest
{
    /**
     * Determine if the cliente is authorized to make this request.
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
        $cliente = $this->route('cliente');
        return [
            'razonSocial' => [
                'required', 'min:3', 'max:128', 'unique:clientes,razonSocial,' . request()->route('cliente')->id
            ],
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'El campo nombre es requerido',
    //         'razonSocial.required' => 'El campo correo  es requerido'
    //     ];
}
