<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'uuid' => Str::uuid(),
            'name' => "Admin Alesha",
            'username' => "admin_alesha",
            'email' => "admin_alesha@gmail.com",
            'wa' => "0822",
            'password' => bcrypt('12345678'),
            'role' => 'admin'
        ]);

    }
}
