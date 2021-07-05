<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoCreateRequest extends FormRequest
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
            'transportista_id' => 'required',
            'noPermisoSCT' => 'required|size:9|unique:vehiculos',
            'tipo_id' => 'required',
            'capacidad_id' => 'required',
            'noPlaca' => 'required|min:6|max:7|unique:vehiculos',
        ];
    }
}
