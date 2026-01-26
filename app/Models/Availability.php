<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Availability extends Model
{
    protected $fillable = ['day' , 'start_time' , 'end_time' , 'is_closed' , 'available_id' , 'available_type'];
    public function availableable() : MorphTo
    {
        return $this->morphTo();
    }
}
