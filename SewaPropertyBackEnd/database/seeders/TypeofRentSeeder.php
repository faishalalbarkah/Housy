<?php

namespace Database\Seeders;

use App\Models\Type_of_rent;
use Illuminate\Database\Seeder;

class TypeofRentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type_of_rent::create([
            'name_rent' => 'Day',
        ]);
        Type_of_rent::create([
            'name_rent' => 'Month',
        ]);
        Type_of_rent::create([
            'name_rent' => 'Year',
        ]);
    }
}
