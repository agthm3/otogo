<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'address' => '123 Admin St, Admin City',
                'profile_picture' => 'path/to/admin/picture.jpg',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Generic User',
                'email' => 'user@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'address' => '456 User Rd, User Town',
                'profile_picture' => 'path/to/user/picture.jpg',
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Driver User',
                'email' => 'driver@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'address' => '789 Driver Ln, Driver City',
                'profile_picture' => 'path/to/driver/picture.jpg',
                'role' => 'driver',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
