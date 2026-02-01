<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Venue extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'governorate' , 'owner_id'];

    public function owner() : BelongsTo {
        return $this->belongsTo(User::class , 'owner_id');
    }

    public function courts() : HasMany {
        return $this->hasMany(Court::class);
    }
    public function availabilities() : MorphMany
    {
        return $this->morphMany(Availability::class, 'availableable');
    }

    public function reviews() : MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function scopeActive($query){
        return $query->whereHas('availabilities', function ($q) {
            $q->where('is_closed', false);
        });
    }
    public function scopeSearch( $query ,$term)
    {
        return $query->where(function ($q) use ($term) {
            $q->where('name', 'LIKE', "%{$term}%")
                ->orWhere('governorate', 'LIKE', "%{$term}%");
        });
    }

    public function scopeOpenNow($query){
        $now = \Illuminate\Support\now();
        $currentDay = $now->format('l');
        $currentTime = $now->format('H:i:s');

        return $query->whereHas('availabilities', function ($q) use ($currentDay, $currentTime) {
            $q->where('day', $currentDay)
            ->where('end_time', '>', $currentTime)
            ->where('start_time', '<', $currentTime);
        });
    }

}
