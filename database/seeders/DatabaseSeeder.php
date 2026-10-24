<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Remove dummy admin if present
        User::where('email', 'admin@example.com')->delete();

        // Production-ready Administrator
        User::updateOrCreate(
            ['email' => 'admin@justbusinessclass.us'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('Admin@Zomo#123'),
                'email_verified_at' => now(),
            ]
        );
    }
}
