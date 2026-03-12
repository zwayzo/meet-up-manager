<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        Room::firstOrCreate(['name' => 'Salle Turing']);
        Room::firstOrCreate(['name' => 'Salle Lovelace']);
        Room::firstOrCreate(['name' => 'Salle Hopper']);
    }
}