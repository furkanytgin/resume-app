<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kullanıcı ismi zorunludur',
            'email.required' => 'Kullanıcı email adresi zorunludur',
            'email.email' => 'geçerli bir adres yazınız.',
            'email.unique' => 'bu email adresi kullanılıyor',
            'password.required' => 'Kullanıcı parola alanı zorunludur',
            'password.min' => 'parola en az 6 karakter olmak zorunda',
        ];
    }
}
