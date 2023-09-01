<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipment>
 */
class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $scheduled_date =  now()->addDay(rand(1,7))->setHour(8);
        $scheduled_date_time = $scheduled_date->addMinutes(rand(0,720));
        return [
            'delivery_start_time'=>$scheduled_date_time->format('Y-m-d H'),
            'delivery_end_time'=>$scheduled_date_time->modify('+2hour')->format('Y-m-d H')
        ];
    }
}
