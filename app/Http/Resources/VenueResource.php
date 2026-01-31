<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VenueResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $owner = User::find($this->owner_id);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'governorate' => $this->governorate,
            'Owner' => $owner->name,
            'courts' => CourtResource::collection($this->whenLoaded('courts')),
        ];
    }
}
