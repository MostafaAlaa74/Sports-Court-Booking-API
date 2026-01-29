<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourtRequest extends FormRequest
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
            'type' => 'required|string|in:football,tennis,padel',
            'name' => 'required|string|max:255',
            'hourly_rate' => 'required|numeric',
            'venue_id' => 'required|exists:venues,id'
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'The type field is required.',
            'type.string' => 'The type must be a string.',
            'type.in' => 'The type must be one of the following: football, tennis, padel.',
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'hourly_rate.required' => 'The hourly rate field is required.',
            'hourly_rate.numeric' => 'The hourly rate must be a numeric value.',
        ];
    }
}
