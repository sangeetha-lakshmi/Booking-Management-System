<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\User;

class BookingSeeder extends Seeder
{
    public function run()
    {
        // Create a test admin user (change credentials for production)
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        // Create sample bookings
        Booking::factory()->count(30)->create();
    }
}
