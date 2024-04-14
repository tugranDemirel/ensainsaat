<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'name' => 'required|string|max:190',
            'description' => 'required|string',
            'short_description' => 'required|string|max:190',
            'image' => 'nullable',
            'icon' => 'nullable',
            'is_active' => 'nullable',
            'is_home' => 'nullable',
            'is_featured' => 'nullable',
            'meta_title' => 'nullable|string|max:160',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:160',

        ];
    }
}
