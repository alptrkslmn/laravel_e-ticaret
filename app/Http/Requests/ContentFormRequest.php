<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Ad Soyad alanı boş bırakılamaz',
            'name.string' => 'Ad Soyad alanı sadece harflerden oluşabilir',
            'name.min' => 'Ad Soyad alanı en az 3 karakter olmalıdır',
            'email.required' => 'Email alanı boş bırakılamaz',
            'email.email' => 'Email formatı uygun değil',
            'subject.required' => 'Konu alanı boş bırakılamaz',
            'message.required' => 'Mesaj alanı boş bırakılamaz',
        ];
    }
}
