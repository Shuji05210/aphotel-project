<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Guest::create([
            'name' => '田中 三郎',
            'address' => '大阪府大阪市',
            'tel'=> '0123456789',
        ]);
    }
}
