<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourtResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'Name' => $this->name,
            'Type' => $this->type,
            'Hourly_rate' => $this->hourly_rate,
            'Venue' => new VenueResource($this->whenLoaded('venue')),
            'Reviews' => ReviewResource::collection($this->whenLoaded('reviews')),
        ];
    }
}
