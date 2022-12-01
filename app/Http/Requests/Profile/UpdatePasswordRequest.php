<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UpdatePasswordRequest extends FormRequest
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
            'current_password'  => 
            [
                'required',
                function($attribute, $value, $fail){
                    if (!Hash::check($value, Auth::user()->password)) {
                        return $fail(__('La password actual es incorrecta.'));
                    }
                },
            ],
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
            'current_password'     => 'contraseña actual',
            'new_password'         => 'nueva contraseña',
            'confirm_new_password' => 'confirmación'
        ];
    }
}
