<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'rate' => $this->rating,
            'comment' => $this->comment,
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
