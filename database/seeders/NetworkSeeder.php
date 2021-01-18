<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Network;
use Illuminate\Database\Seeder;

class NetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Network::truncate();
        Country::all()->each(function ($country){
            Network::factory()->count(random_int(0, 10))->create(
                ['country_id' => $country->id]
            );
        });
    }
}
