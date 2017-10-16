<?php

namespace Consultas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'SARE' => 'required',
            'confirmar_password' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'SARE.required' => 'El campo SARE es obligatorio',
            'confirmar_password.same' => 'La Contraseña debe coincidir con la confirmación de la contraseña'
        ];
    }
}
