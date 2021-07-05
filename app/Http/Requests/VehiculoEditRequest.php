<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoEditRequest extends FormRequest
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
        $vehiculo = $this->route('vehiculo');
        return [
            'transportista_id' => [''],
            'noPermisoSCT' => ['required', 'size:9', 'unique:vehiculos,noPermisoSCT,' . request()->route('vehiculo')->id],
            'tipo_id' => [''],
            'capacidad_id' => [''],
            'noPlaca' => ['required', 'min:6', 'max:7', 'unique:vehiculos,noPlaca,' . request()->route('vehiculo')->id],
        ];
    }
}
