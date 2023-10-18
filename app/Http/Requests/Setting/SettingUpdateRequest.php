<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:160',
            'meta_keywords' => 'required|string|max:150',
            'header_text' => 'required|string|max:255',
            'footer_text' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'fax' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Site adı zorunludur.',
            'title.string' => 'Site adı metin olmalıdır.',
            'title.max' => 'Site adı en fazla 255 karakter olmalıdır.',
            'meta_description.required' => 'Meta açıklaması zorunludur.',
            'meta_description.string' => 'Meta açıklaması metin olmalıdır.',
            'meta_description.max' => 'Meta açıklaması en fazla 160 karakter olmalıdır.',
            'meta_keywords.required' => 'Meta anahtar kelimeleri zorunludur.',
            'meta_keywords.string' => 'Meta anahtar kelimeleri metin olmalıdır.',
            'meta_keywords.max' => 'Meta anahtar kelimeleri en fazla 150 karakter olmalıdır.',
            'header_text.required' => 'Başlık metni zorunludur.',
            'header_text.string' => 'Başlık metni metin olmalıdır.',
            'header_text.max' => 'Başlık metni en fazla 255 karakter olmalıdır.',
            'footer_text.required' => 'Footer metni zorunludur.',
            'footer_text.string' => 'Footer metni metin olmalıdır.',
            'footer_text.max' => 'Footer metni en fazla 255 karakter olmalıdır.',
            'logo.image' => 'Logo resim olmalıdır.',
            'logo.mimes' => 'Logo resim jpeg,png,jpg,gif,svg formatında olmalıdır.',
            'logo.max' => 'Logo resim en fazla 2048 kb olmalıdır.',
            'favicon.image' => 'Favicon resim olmalıdır.',
            'favicon.mimes' => 'Favicon resim jpeg,png,jpg,gif,svg formatında olmalıdır.',
            'favicon.max' => 'Favicon resim en fazla 2048 kb olmalıdır.',
            'facebook.string' => 'Facebook metin olmalıdır.',
            'facebook.max' => 'Facebook en fazla 255 karakter olmalıdır.',
            'twitter.string' => 'Twitter metin olmalıdır.',
            'twitter.max' => 'Twitter en fazla 255 karakter olmalıdır.',
            'instagram.string' => 'Instagram metin olmalıdır.',
            'instagram.max' => 'Instagram en fazla 255 karakter olmalıdır.',
            'linkedin.string' => 'Linkedin metin olmalıdır.',
            'linkedin.max' => 'Linkedin en fazla 255 karakter olmalıdır.',
            'youtube.string' => 'Youtube metin olmalıdır.',
            'youtube.max' => 'Youtube en fazla 255 karakter olmalıdır.',
            'address.string' => 'Adres metin olmalıdır.',
            'address.max' => 'Adres en fazla 255 karakter olmalıdır.',
            'phone.string' => 'Telefon metin olmalıdır.',
            'phone.max' => 'Telefon en fazla 20 karakter olmalıdır.',
            'fax.string' => 'Fax metin olmalıdır.',
            'fax.max' => 'Fax en fazla 255 karakter olmalıdır.',
            'email.string' => 'E-posta metin olmalıdır.',
            'email.max' => 'E-posta en fazla 255 karakter olmalıdır.',
        ];
    }
}
