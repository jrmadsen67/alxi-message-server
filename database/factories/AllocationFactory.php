<?php

namespace Database\Factories;

use App\Models\Allocation;
use Illuminate\Database\Eloquent\Factories\Factory;

class AllocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Allocation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'device_id' => 1,
            'sim_card_id' => 1,
            'device_group_id' => 1,
        ];
    }
}
