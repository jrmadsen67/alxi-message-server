<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\VirtualLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

class VirtualLocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VirtualLocation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country_id' => Country::factory(),
        ];
    }
}
