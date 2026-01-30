<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReviewRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'reviewable_id' => 'required',
            'reviewable_type' => 'required|string'
        ];
    }
}
