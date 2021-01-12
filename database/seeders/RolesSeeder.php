<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'administrator']);
        Role::create(['name' => 'founder']);
        Role::create(['name' => 'partner']);
        Role::create(['name' => 'technical']);
        Role::create(['name' => 'support']);
        Role::create(['name' => 'finance']);
    }
}
