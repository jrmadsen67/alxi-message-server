<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);

        // currently dev - clean up
        $this->call(CountrySeeder::class);
        $this->call(NetworkSeeder::class);
        $this->call(PhysicalLocationSeeder::class);
        $this->call(VirtualLocationSeeder::class);
    }
}
