<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|string|min:3|max:100|email',
            'subject' => 'required|string|min:3|max:150',
            'message' => 'required|string|min:3|max:500',
            'phone' => 'required|string|min:10|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Ad Soyad alanı zorunludur.',
            'name.min' => 'Ad Soyad alanı minimum 3 karakter olmalı.',
            'name.max' => 'Ad Soyad alanı maksimum 50 karakter olmalı.',
            'email.required' => 'E-Posta alanı zorunludur.',
            'email.min' => 'E-Posta alanı minimum 3 karakter olmalı.',
            'email.max' => 'E-Posta alanı maksimum 100 karakter olmalı.',
            'email.email' => 'E-Posta alanı geçerli bir değer olmak zorundadır.',
            'subject.required' => 'Konu alanı zorunludur.',
            'subject.min' => 'Konu alanı minimum 3 karakter olmalı.',
            'subject.max' => 'Konu alanı maksimum 150 karakter olmalı.',
            'message.required' => 'Mesaj alanı zorunludur.',
            'message.min' => 'Mesaj alanı minimum 3 karakter olmalı.',
            'message.max' => 'Mesaj alanı maksimum 500 karakter olmalı.',
            'phone.required' => 'Telefon Numarası alanı zorunludur.',
            'phone.min' => 'Telefon Numarası alanı minimum 10 karakter olmalı.',
            'phone.max' => 'Telefon Numarası alanı maksimum 20 karakter olmalı.',
        ];
    }
}
