<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nome" => ['required', 'string'],
            "email" => ['required', 'email'],
            "gender" => ['required'],
            "status" => ['required'],
        ];
    }

    public function messages()
    {
        return [
            "nome.required" => "O :attribute é obrigatório.",
            "nome.string" => "O :attribute é tem que ser apenas letras.",
            "email.required" => "O :attribute é obrigatório.",
            "email.email" => "O :attribute tem que ser um email valido.",
            "gender.required" => "O :attribute é obrigatório.",
            "status.required" => "O :attribute é obrigatório.",
        ];
    }
}
