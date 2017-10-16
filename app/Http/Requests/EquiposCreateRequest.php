<?php

namespace Consultas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquiposCreateRequest extends FormRequest
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
            'nombre_equipo' => 'required',
            'direccion_ip' => 'required',
            'tipoequipo_id' => 'required',
            'usuario_equipo' => 'required',
            'contraseña_equipo' => 'required',
            'centros_id' => 'required',
            'sistemas_ops_id' => 'required',
        ];
    }
}
