<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Roomtype::create([
            'roomtype_id' => '1',
            'room_name' => 'testroom',
            'max_rest_people' => '2',
        ]);
    }
}
