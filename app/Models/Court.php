<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Court extends Model
{
    protected $fillable = ['venerable_id' , 'type' , 'name' , 'hourly_rate'];

    public function venue() : BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }

    public function bookings() : HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function availabilities() : MorphMany
    {
        return $this->morphMany(Availability::class, 'availableable');
    }

    public function reviews() : MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
}
