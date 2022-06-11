<?php

namespace Database\Factories;

use App\Models\competitions;
use App\Models\User;
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

            'competitions_id'=>competitions::factory(),
            'user_id1'=>User::factory(),
            'user_id2'=>User::factory(),
            'winner'=>$this->faker->boolean,

        ];
    }
}
