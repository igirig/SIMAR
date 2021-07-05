<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SucursalEditRequest extends FormRequest
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
        $sucursal = $this->route('sucursal');
        return [
            'cliente_id' => ['required'],
            'nombre' => [
                'required', 'min:3', 'max:128', 'unique:sucursales,nombre,' . request()->route('sucursal')->id
            ],
            'noRegistroAmbiental' => [
                'required', 'size:12', 'unique:sucursales,noRegistroAmbiental,' . request()->route('sucursal')->id
            ],
            'calle' => ['required', 'min:1', 'max:128'],
            'colonia' => ['required', 'min:3', 'max:128'],
            'codigoPostal' => ['required', 'digits:5', 'numeric'],
            'estado_id' => ['required'],
            'municipio_id' => ['required'],
            'telefono' => ['required', 'digits:10', 'numeric'],
            'extension' => ['numeric', 'nullable'],
            'correo' => ['required', 'email'],
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required' => 'El campo nombre es requerido',
    //         'razonSocial.required' => 'El campo correo  es requerido'
    //     ];
}
