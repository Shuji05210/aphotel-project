<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservedetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Reservedetail::create([
            
            'reserve_id'  => '2',
            'room_id'  => '4',
            'rest_date' => '20240921',
            'room_price' =>'40000',
        ]);
    }
}
