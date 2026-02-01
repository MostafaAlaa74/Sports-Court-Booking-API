<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Availability extends Model
{
    use HasFactory;
    protected $fillable = ['day' , 'start_time' , 'end_time' , 'is_closed' ,'availableable_id' , 'availableable_type'];
    public function availableable() : MorphTo
    {
        return $this->morphTo();
    }


}
