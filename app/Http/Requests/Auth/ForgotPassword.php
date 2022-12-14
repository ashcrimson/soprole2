<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ForgotPassword extends FormRequest
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
            'email'         => 'required|email|exists:users,email',
            'new_password'  => [
                'required',  
                Password::min(6)
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised(),
                'max:18',
            ],
            'confirm_new_password' => 'required|same:new_password'
        ];
    }

    public function attributes()
    {
        return [
            'new_password'         => 'nueva contraseña',
            'confirm_new_password' => 'confirmación'
        ];
    }
}
