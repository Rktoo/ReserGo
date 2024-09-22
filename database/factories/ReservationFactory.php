<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Service;
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
        return [
            'service_id' => $service -> id,  // Associe une réservation à un service
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->safeEmail(),
            'reservation_date' => $this->faker->dateTimeBetween('now', '+1 year')
        ];
    }
}
