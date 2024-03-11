<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function messages()
{
    return [
        'email.required' => 'O campo email é obrigatório.',
        'email.email' => 'O email deve ser um endereço de email válido.',
        'password' => 'As credenciais que você inseriu estão incorretas.', // Mensagem personalizada para a regra 'password'
    ];
}
}
