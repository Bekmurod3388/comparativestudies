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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ])->assignRole('admin');

        User::create([
            'name' => 'admin',
            'email' => 'turayeva.bahor@gmail.com',
            'password' => bcrypt('admin'),
        ])->assignRole('admin');

        User::create([
            'name' => 'admin',
            'email' => 'client@gmail.com',
            'password' => bcrypt('client'),
        ])->assignRole('client');
    }
}
