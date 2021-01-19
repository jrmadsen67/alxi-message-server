<?php

namespace Database\Factories;

use App\Models\SimCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class SimCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SimCard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'iccid',
//            'msisdn',
//            'network_id',
//            'device_plan_id',
//            'sim_card_plan_id',
        ];
    }
}
