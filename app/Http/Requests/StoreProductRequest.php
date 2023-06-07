<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'title' => 'required|max:50|min:3',
            'description' => 'required|min:10',
            'price' => 'required|numeric|min:5|max:99|regex:/^\d+(\.\d{2})?$/',
            'image' => 'required|max:255|min:10'
        ];
    }
}
