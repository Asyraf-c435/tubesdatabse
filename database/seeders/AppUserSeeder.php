<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppUser;

class AppUserSeeder extends Seeder
{
    public function run(): void
    {
        AppUser::create([
            'name' => 'Dzacky',
            'email' => 'dzacky@example.com',
            'password' => bcrypt('admin123'),
            'display_name' => 'Administrator',
            'type' => 1,
            'rank' => 1,
            'status_points' => 0,
        ]);
    }
}
