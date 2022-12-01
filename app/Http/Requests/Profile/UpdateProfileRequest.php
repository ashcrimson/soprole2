<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
            'nombre' => 'sometimes|min:3|max:40|regex:/^[a-zA-ZñÑáéíóú ]+$/',
            'email'  => ['sometimes','email',Rule::unique('users')->ignore(Auth::user()->id)],
        ];
    }

}
