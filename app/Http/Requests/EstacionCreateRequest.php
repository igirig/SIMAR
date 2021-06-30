<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstacionCreateRequest extends FormRequest
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
            'razonSocial' => 'required|min:3|max:64|unique:estaciones',
            'noEstacion' => 'required|min:6|max:13|unique:estaciones',
            'calle' => 'required|min:1|max:64',
            'noExterior' => 'max:16',
            'noInterior' => 'max:16',
            'colonia' => 'required|min:1|max:64',
            'codigoPostal' => 'required|min:5|numeric',
            'estado_id' => 'required',
            'municipio_id' => 'required',
            'telefono' => 'required|min:10|numeric',
            'correo' => 'required|email',
        ];
    }
}
