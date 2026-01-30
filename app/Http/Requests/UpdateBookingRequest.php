<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'status' => 'sometimes|in:pending,confirmed,cancelled',
            'start_time' => 'sometimes',
            'end_time' => 'sometimes',
            'date' => 'sometimes|date'
        ];
    }
}
