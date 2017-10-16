<?php

namespace Consultas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name' => 'required',
            'sare' =>  'required',
            'Puesto' => 'required',
            'centros' => 'required',
            'username' => 'required',
            'password' => 'required',
            'confirmar_password' => 'required',
            'confirmar_password' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'Puesto.required' => 'Debe seleccionar un Rol',
            'sare.required' => 'El campo SARE es obligatorio',
            'centros.required' => 'Debe seleccionar un Centro',
            'username.required' => 'El campo Nombre de Usuario es obligatorio',
            'confirmar_password.required' => 'Se debe confirmar la Contraseña',
            'confirmar_password.same' => 'La Contraseña debe coincidir con la Confirmación de la Contraseña',
            'password.required' => 'Es necesario definir y confirmar la Contraseña',
        ];
    }
}
