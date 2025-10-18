<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    public function definition()
    {
        $services = ['Transport','Meeting','Event'];
        $statuses = ['Pending','Confirmed','Cancelled'];

        return [
            'customer_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'booking_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'service_type' => $this->faker->randomElement($services),
            'status' => $this->faker->randomElement($statuses),
        ];
    }
}
