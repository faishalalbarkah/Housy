<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'administrator',
            'email' => 'administrator@gmail.com',
            'password' => app('hash')->make('123456'),
            'gender' => 'Laki-laki',
            'no_phone' => "085858585",
            'address' => "Citra Raya Cikupa",
            'tenant' => "Day",
            'image' => 'foto.jpg',
            'role' => "admin",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => app('hash')->make('123456'),
            'gender' => 'Laki-laki',
            'no_phone' => "085858585",
            'address' => "Citra Raya Cikupa",
            'tenant' => "Day",
            'image' => 'foto.jpg',
            'role' => "customer",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
