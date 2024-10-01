<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Regras de validação para o cadastro do usuário.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'estado_id' => 'required',
            'cidade_id' => 'required',
            'nome' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];
    }

    // Mensagens de validação personalizada para o formuláriod e cadastro de usuário.
    public function messages(): array
    {
        return[
            'estado_id.required' => 'Campo estado é obrigatório!',
            'cidade_id.required' => 'Campo cidade é obrigatório!',
            'name.required' => 'Campo nome é obrigatório!',
            'email.required' => 'Campo e-mail é obrigatório!',
            'email.email' => 'Necessário enviar e-mail válido!',
            'email.unique' => 'O e-mail já está cadastrado!',
            'password.required' => 'Campo senha é obrigatório!',
            'password.min' => 'Senha com no mínimo :min caractéres!',
            


        ];

    }
}
