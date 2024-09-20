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
            'user_id' => '3',
            'people'  => '5',
            'checkin_date'  => '20240914',
            'checkout_date' => '20240916',
        ]);
    }
}
