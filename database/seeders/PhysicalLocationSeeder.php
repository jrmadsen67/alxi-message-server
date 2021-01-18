<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Network;
use App\Models\PhysicalLocation;
use Illuminate\Database\Seeder;

class PhysicalLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PhysicalLocation::truncate();
        Country::all()->each(function ($country){
            PhysicalLocation::factory()->count(random_int(0, 10))->create(
                ['country_id' => $country->id]
            );
        });
    }
}
