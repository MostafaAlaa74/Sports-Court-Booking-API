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

    public function scopeUpcoming($query) {
        return $query->where('start_time', '>', now())->orderBy('start_time');
    }

    public function scopePast($query) {
        return $query->where('end_time', '<', now());
    }

    public function scopeConfirmed($query) {
        return $query->where('status', 'confirmed');
    }

    public function scopeOverlapping($query, $start, $end) {
        return $query->where(function ($q) use ($start, $end) {
            $q->where('start_time', '<', $end)
                ->where('end_time', '>', $start);
        });
    }
}
