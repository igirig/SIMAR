<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantaCreateRequest extends FormRequest
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
            'razonSocial' => 'required|min:3|max:64|unique:plantas',
            'noRegistroAmbiental' => 'required|min:12|max:13|unique:plantas',
            'calle' => 'required|min:1|max:64',
            'noInterior' => 'max:16',
            'noExterior' => 'max:16',
            'colonia' => 'required|min:1|max:64',
            'codigoPostal' => 'required|min:5|numeric',
            'estado_id' => '',
            'municipio_id' => '',
            'telefono' => 'required|min:10|numeric',
            'correo' => 'required|email',
        
        ];
    }
}
