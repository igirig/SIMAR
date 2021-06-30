<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SucursalCreateRequest extends FormRequest
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
            'cliente_id' => 'required',
            'nombre' => 'required|min:3|max:128|unique:sucursales',
            'noRegistroAmbiental' => 'required|size:12|unique:sucursales',
            'calle' => 'required|min:1|max:128',
            'colonia' => 'required|min:3|max:128',
            'codigoPostal' => 'size:5',
            'estado_id' => 'required',
            'municipio_id' => 'required',
            'telefono' => 'min:10|max:13',
            'correo' => 'required|email',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'El campo nombre es requerido',
    //     ];
    // }
}
