<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantaEditRequest extends FormRequest
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
        $planta = $this->route('planta');
        return [
            'razonSocial' => ['required', 'min:3', 'max:64', 'unique:plantas,razonSocial,' . request()->route('planta')->id],
            'noRegistroAmbiental' => ['required', 'size:12', 'unique:plantas,noRegistroAmbiental,' . request()->route('planta')->id],
            'calle' => ['required', 'min:1', 'max:64'],
            'noExterior' => ['nullable'],
            'noInterior' => ['nullable'],
            'colonia' => ['required', 'min:3', 'max:64'],
            'codigoPostal' => ['required', 'digits:5', 'numeric'],
            'estado_id' => ['required'],
            'municipio_id' => ['required'],
            'telefono' => ['required', 'digits:10', 'numeric'],
            'extension' => ['numeric', 'nullable'],
            'correo' => ['required', 'email'],
        ];
    }
}
