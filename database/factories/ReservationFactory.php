<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Reservation::class;

    public function definition(): array
    {
        $service = Service::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        return [
            'service_id' => $service->id,  // Associe une réservation à un service
            'user_id' => $user->id,
            'reservation_date' => $this->faker->dateTimeBetween('now', '+1 year')
        ];
    }
}
