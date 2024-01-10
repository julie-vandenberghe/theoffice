<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Room;
use Illuminate\Database\Seeder;
use App\Models\Rooms;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Room::factory(4)->create();
        User::factory(10)->create();
    }
}
