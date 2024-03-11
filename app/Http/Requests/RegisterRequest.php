<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:150|unique:users',
            'password' => 'required',
            'url' => 'required|string',
            'smtp_host' => 'required|string',
            'smtp_port' => 'required|string',
            'smtp_user' => 'required|string',
            'smtp_password' => 'required|string',
            'smtp_encryption' => 'required|string',
        ];
    }

    public function getData(){
        $data = $this->validated();
        $data['password'] = Hash::make($data['password']);

        return $data;
    }
}

