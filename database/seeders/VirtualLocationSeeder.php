<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\VirtualLocation;
use Illuminate\Database\Seeder;

class VirtualLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VirtualLocation::truncate();
        Country::all()->each(function ($country){
            VirtualLocation::factory()->count(random_int(0, 10))->create(
                ['country_id' => $country->id]
            );
        });
    }
}
