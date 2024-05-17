<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Muhitualdi',
            'email' => 'muhi@gmail.test',
            'password' => bcrypt('test2024'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        User::create($user);
    }
}
