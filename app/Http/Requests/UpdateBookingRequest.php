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

    //* This method is used to add custom validation logic after the initial validation rules have been applied.
    public function after(): array
    {
        return [
            function ($validator) {
                if (
                    $this->filled('start_time') &&
                    $this->filled('end_time') &&
                    $this->input('start_time') >= $this->input('end_time')
                ) {
                    $validator->errors()->add('start_time', 'Start time must be before end time.');
                }
            },
        ];
    }
}
