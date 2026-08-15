<?php

namespace App\Models;

use App\Enums\UserRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'court_id', 'start_time', 'end_time', 'date', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function court(): BelongsTo
    {
        return $this->belongsTo(Court::class);
    }

    public function scopeUpcoming($query)
    {
        return $query
            ->where(function ($q) {
                $q->where('date', '>', today())
                    ->orWhere(function ($q) {
                        $q->whereDate('date', today())
                            ->where('start_time', '>', now()->format('H:i:s'));
                    });
            })
            ->orderBy('date')
            ->orderBy('start_time');
    }

    public function scopePast($query)
    {
        return $query->where('end_time', '<', now()->format('H:i:s'))->where('date', '<=', now()->format('Y-m-d'))
            ->orderBy('start_time', 'desc');
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed');
    }

    public function scopeOverlapping($query, $start, $end, $date)
    {
        return $query->where(function ($q) use ($start, $end, $date) {
            $q->where('start_time', '<', $end)
                ->where('end_time', '>', $start)
                ->where('date', $date)
                ->where('status', '!=', 'cancelled');
        });
    }

    public function scopeForUser($query, $user)
    {
        if ($user->role === UserRoles::ADMIN->value) {
            return $query;
        } elseif ($user->role === UserRoles::FIELD_OWNER->value) {
            return $query->whereHas('court', function ($q) use ($user) {
                $q->where('owner_id', $user->id);
            });
        } else {
            return $query->where('user_id', $user->id);
        }
    }
}
