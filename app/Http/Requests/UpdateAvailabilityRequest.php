<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAvailabilityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'day' => 'sometimes|string',
            'start_time' => 'sometimes',
            'end_time' => 'sometimes',
            'is_closed' => 'sometimes|boolean'
        ];
    }
}
