<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;

class Court extends Model
{
    use HasFactory;
    protected $fillable = ['venue_id', 'type', 'name', 'hourly_rate'];

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function availabilities(): MorphMany
    {
        return $this->morphMany(Availability::class, 'availableable');
    }

    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function scopeCourtType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopePriceRange($query, $min, $max)
    {
        return $query->whereBetween('hourly_rate', [$min, $max]);
    }

    //! to clear the cache when a court is created, updated, or deleted, we can use the booted method in the Court model. This method is called when the model is booted and allows us to define model event listeners.
    //! In this case, we are listening for the created, updated, and deleted events on the Court model. When any of these events occur, we flush the cache for the 'courts' tag, which will clear any cached data related to courts.
    public static function booted()
    {
        static::created(function ($court) {
            $court->afterCommit(function () {
                Cache::tags(['courts'])->flush();
            });
        });

        static::updated(function ($court) {
            $court->afterCommit(function () {
                Cache::tags(['courts'])->flush();
            });
        });

        static::deleted(function ($court) {
            $court->afterCommit(function () {
                Cache::tags(['courts'])->flush();
            });
        });
    }
}
