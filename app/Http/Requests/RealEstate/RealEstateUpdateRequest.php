<?php

namespace App\Http\Requests\RealEstate;

use Illuminate\Foundation\Http\FormRequest;

class RealEstateUpdateRequest extends FormRequest
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
            'title' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'nullable',
            'status' => 'required',
            'type' => 'required',
            'purpose' => 'required',
            'video' => 'nullable',
            'map' => 'nullable',
            'is_active' => 'nullable',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
            'attributes.*' => 'nullable',
            'images' => 'nullable'
        ];
    }
}
