<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentarioReuest extends FormRequest
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
            "name" => ['required', 'string'],
            "email" => ['required', 'email'],
            "body" => ['required', 'string'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'O Nome é obrigatório.',
            'name.string' => 'O Nome é apenas caracteres.',
            'email.required' => 'O E-mail é obrigatório.',
            'email.email' => 'O E-mail é precisa ser um email.',
            'body.required' => 'O Comentário é obrigatório',
            'body.string' => 'O Comentário é apenas caracteres.'
        ];
    }
}
