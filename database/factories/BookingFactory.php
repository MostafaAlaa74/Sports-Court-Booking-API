<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Court;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        $start = $this->faker->time('H:i:s');
        $end = date('H:i:s', strtotime($start) + 60 * 60); // +1 hour

        return [
            'user_id' => User::factory(),
            'court_id' => Court::factory(),
            'start_time' => $start,
            'end_time' => $end,
            'date' => $this->faker->dateTimeBetween('-1 week', '+1 month')->format('Y-m-d'),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}
