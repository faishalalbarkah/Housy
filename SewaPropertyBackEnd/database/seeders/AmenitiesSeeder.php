<?php

namespace Database\Seeders;

use App\Models\Amenities;
use Illuminate\Database\Seeder;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Amenities::create([
            'name_amenities' => 'Furnished',
        ]);
        Amenities::create([
            'name_amenities' => 'Pet Allowed',
        ]);
        Amenities::create([
            'name_amenities' => 'Shared Accomodation',
        ]);
    }
}
