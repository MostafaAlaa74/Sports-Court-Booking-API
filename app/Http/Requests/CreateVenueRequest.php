<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVenueRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'governorate' => 'required|string|max:255',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Venue name is required.',
            'name.string' => 'Venue name must be a string.',
            'name.max' => 'Venue name must not exceed 255 characters.',
            'governorate.required' => 'Governorate is required.',
            'governorate.string' => 'Governorate must be a string.',
            'governorate.max' => 'Governorate must not exceed 255 characters.',
        ];
    }
}
