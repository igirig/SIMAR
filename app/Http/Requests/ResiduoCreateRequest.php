<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResiduoCreateRequest extends FormRequest
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
            'nombre' => 'required|min:3|unique:residuos',

            'noONU' => 'required|min:6|max:7',
            'descripcion' => 'required|min:3',
            'clase_id' => 'required',
            'materia_id' => 'required',
        ];
    }
}
