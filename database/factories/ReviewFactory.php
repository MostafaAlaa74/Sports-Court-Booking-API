<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\User;
use App\Models\Court;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition(): array
    {
        $morphables = [Court::class, Venue::class];
        $type = $this->faker->randomElement($morphables);
        $model = $type::factory()->create();

        return [
            'comment' => $this->faker->sentence(),
            'rating' => $this->faker->numberBetween(1, 5),
            'user_id' => User::factory(),
            'reviewable_id' => $model->id,
            'reviewable_type' => $type,
        ];
    }
}
