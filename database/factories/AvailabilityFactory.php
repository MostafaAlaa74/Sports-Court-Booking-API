<?php

namespace Database\Factories;

use App\Models\Availability;
use App\Models\Venue;
use App\Models\Court;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Availability>
 */
class AvailabilityFactory extends Factory
{
    protected $model = Availability::class;

    public function definition(): array
    {
        $start = $this->faker->time('H:i:s');
        $end = date('H:i:s', strtotime($start) + 60 * 60 * 2); // +2 hours
        $morphables = [Venue::class, Court::class];
        $type = $this->faker->randomElement($morphables);
        $model = $type::factory()->create();

        return [
            'day' => $this->faker->dayOfWeek(),
            'start_time' => $start,
            'end_time' => $end,
            'availableable_id' => $model->id,
            'availableable_type' => $type,
        ];
    }
}
