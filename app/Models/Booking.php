<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id' , 'court_id' , 'start_time' , 'end_time' , 'date' , 'status'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function court() : BelongsTo
    {
        return $this->belongsTo(Court::class);
    }
}
