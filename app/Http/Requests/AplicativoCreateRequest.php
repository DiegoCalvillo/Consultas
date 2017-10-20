<?php

namespace Consultas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AplicativoCreateRequest extends FormRequest
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
            'nombre_aplicativo' => 'required',
            'ubicacion_servidor' => 'required',
            'link_aplicativo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre_aplicativo.required' => 'El campo Aplicativo es obligatorio',
            'ubicacion_servidor.required' => 'El campo Dirección IP del Servidor es obligatorio',
            'link_aplicativo.required' => 'El campo URL del Aplicativo es obligatorio',      
        ];
    }
}
