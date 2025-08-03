<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => env('DEFAULT_USER_NAME', 'Fallback User'),
            'email' => env('DEFAULT_USER_EMAIL', 'backup@user.com'),
            'password' => env('DEFAULT_USER_PASSWORD_HASH', bcrypt('password'))
        ]);
    }
}
