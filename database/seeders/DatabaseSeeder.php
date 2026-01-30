<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Venue;
use App\Models\Court;
use App\Models\Booking;
use App\Models\Availability;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a primary test user
        User::factory()->create([
            'name' => 'Mostafa Alaa',
            'email' => 'mo@example.com',
            'role' => 'admin',
            'password' => bcrypt(123456789),
        ]);

        // Create owners and venues with courts
        $owners = User::factory()->count(3)->create(['role' => 'field_owner']);

        foreach ($owners as $owner) {
            $venues = Venue::factory()->count(2)->create(['owner_id' => $owner->id]);
            foreach ($venues as $venue) {
                $courts = Court::factory()->count(2)->create(['venue_id' => $venue->id]);
                foreach ($courts as $court) {
                    Availability::factory()->count(3)->create(['availableable_id' => $court->id, 'availableable_type' => Court::class]);
                    Review::factory()->count(2)->create(['reviewable_id' => $court->id, 'reviewable_type' => Court::class]);
                }
                Availability::factory()->count(2)->create(['availableable_id' => $venue->id, 'availableable_type' => Venue::class]);
                Review::factory()->count(1)->create(['reviewable_id' => $venue->id, 'reviewable_type' => Venue::class]);
            }
        }

        // Create players and bookings
        $players = User::factory()->count(5)->create(['role' => 'player']);
        $allCourts = Court::all();
        foreach ($players as $player) {
            foreach ($allCourts->random(3) as $court) {
                Booking::factory()->create(['user_id' => $player->id, 'court_id' => $court->id]);
            }
        }
    }
}
