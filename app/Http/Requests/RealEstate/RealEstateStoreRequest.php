<?php

namespace App\Http\Requests\RealEstate;

use Illuminate\Foundation\Http\FormRequest;

class RealEstateStoreRequest extends FormRequest
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
            'image' => 'required',
            'status' => 'required',
            'type' => 'required',
            'purpose' => 'required',
            'video' => 'nullable',
            'map' => 'nullable',
            'is_active' => 'nullable',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
            'price' => 'required|numeric',
            'area' => 'required',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'garages' => 'required|numeric',
            'year_built' => 'required|date_format:Y-m-d',
            'images' => 'nullable'
        ];
    }
}
