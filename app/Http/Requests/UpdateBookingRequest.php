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
            'court_id' => 'sometimes|exists:courts,id',
            'start_time' => 'sometimes|date_format:H:i',
            'end_time' => 'sometimes|date_format:H:i',
            'date' => 'sometimes|date_format:Y-m-d|after_or_equal:today',
        ];
    }
}
