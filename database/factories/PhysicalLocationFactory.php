<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\PhysicalLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhysicalLocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhysicalLocation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nickname' => $this->faker->unique->word,
            'host' => $this->faker->unique->ipv4,
            'country_id' => Country::factory(),
        ];
    }
}
