<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourtRequest extends FormRequest
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
            'type' => 'sometimes|required|string|in:football,tennis,padel',
            'name' => 'sometimes|required|string|max:255',
            'hourly_rate' => 'sometimes|required|numeric',
            'venue_id' => 'sometimes|required|exists:venues,id'
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'The type field is required when present.',
            'type.string' => 'The type must be a string.',
            'type.in' => 'The type must be one of the following: football, tennis, padel.',
            'name.required' => 'The name field is required when present.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'hourly_rate.required' => 'The hourly rate field is required when present.',
            'hourly_rate.numeric' => 'The hourly rate must be a numeric value.',
        ];
    }
}
