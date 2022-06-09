<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\participants>
 */
class participantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'competition_id'=>$this->faker->numberBetween(1,28),
            'user_id1'=>$this->faker->numberBetween(1,300),
            'user_id2'=>$this->faker->numberBetween(1,300),
        ];
    }
}
