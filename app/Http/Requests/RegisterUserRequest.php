<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterUserRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:3|max:50|unique:users,username',
            'password' => ['required',Password::default()->mixedCase()->numbers(),'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'This email is taken. If you have account, try to sign in.',
            'username.unique' => 'Username is taken. If you have account, try to sign in.'
        ];
    }
}
