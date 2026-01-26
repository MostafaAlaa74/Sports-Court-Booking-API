<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Venue extends Model
{
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
}
