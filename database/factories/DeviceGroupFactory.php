<?php

namespace Database\Factories;

use App\Models\DeviceGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeviceGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nickname' => $this->faker->word,
        ];
    }
}
