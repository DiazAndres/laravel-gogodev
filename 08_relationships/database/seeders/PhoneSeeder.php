<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix' => 55,
            'phone_number' => 12345678,
            'user_id' => 1,
        ]);
        Phone::create([
            'prefix' => 57,
            'phone_number' => 87654321,
            'user_id' => 1,
        ]);
    }
}
