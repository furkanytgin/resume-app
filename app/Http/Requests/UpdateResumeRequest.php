<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateResumeRequest extends FormRequest
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
            'user_id' => '',
            'title' => ['required', Rule::unique('resumes')->ignore($this->resume),],
            'slug' => '',
            'theme' => 'required',
            'summary' => 'nullable',
            'education' => 'nullable',
            'experience' => 'nullable',
            'skills' => 'nullable',
            'interest' => 'nullable',

        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'Kullanıcı zorunludur',
            'title.required' => 'Başlık alanı zorunludur',
            'title.unique' => 'Bu başlık daha önce alınmış',
            'theme.required' => 'bir teme seçmen zorunludur',
            'theme.required' => 'Tema alanı boş bırakılamaz'
        ];
    }
}
