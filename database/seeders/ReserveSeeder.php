<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Reserve::create([
            'user_id' => '1',
            'people'  => '4',
            'checkin_date'  => '20240924',
            'checkout_date' => '20240926',
        ]);
    }
}
