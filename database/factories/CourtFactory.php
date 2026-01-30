<?php

namespace Database\Factories;

use App\Models\Court;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Court>
 */
class CourtFactory extends Factory
{
    protected $model = Court::class;

    public function definition(): array
    {
        $types = ['football', 'tennis', 'padel'];
        return [
            'venue_id' => Venue::factory(),
            'name' => $this->faker->word() . ' ' . $this->faker->randomNumber(2),
            'type' => $this->faker->randomElement($types),
            'hourly_rate' => $this->faker->randomFloat(2, 20, 200),
        ];
    }
}
