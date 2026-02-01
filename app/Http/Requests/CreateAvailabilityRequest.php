<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAvailabilityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'day' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'is_closed' => 'sometimes|boolean',
            'availableable_id' => 'required',
            'availableable_type' => 'required|string'
        ];
    }
}
