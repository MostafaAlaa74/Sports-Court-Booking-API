<?php

namespace Database\Factories;

use App\Models\Venue;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory
{
    protected $model = Venue::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'governorate' => $this->faker->state(),
            'owner_id' => User::factory(),
        ];
    }
}
