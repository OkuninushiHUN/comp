<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\games>
 */
class gamesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'competition_id'=>$this->faker->randomNumber(2),
            'user_id1'=>$this->faker->randomNumber(2),
            'user_id2'=>$this->faker->randomNumber(2),
            'winner'=>$this->faker->boolean,

        ];
    }
}
