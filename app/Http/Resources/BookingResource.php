<?php

namespace App\Http\Resources;

use App\Models\Court;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'Player' => new UserResource($this->whenLoaded('user')) ?? User::find($this->user_id)->name,
            'Court' => new CourtResource($this->whenLoaded('court')) ?? Court::find($this->court_id)->name,
            'Booking_date' => $this->date,
            'Start_time' => $this->start_time,
            'End_time' => $this->end_time,
            'Status' => $this->status,
        ];
    }
}
