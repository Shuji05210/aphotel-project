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
            'name' => '田中 太郎',
            'address' => '京都府木津市4-5-6',
            'tel'=> '0123456789',
        ]);
    }
}
