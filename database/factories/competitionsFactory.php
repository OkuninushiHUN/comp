<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class competitionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'location' =>$this->faker->streetName,
            'max_participants' =>$this->faker->numberBetween(10,200),
            'numberOFparticipants' =>$this->faker->numberBetween(0,(int)('max_participants')),
            'date' =>$this->faker->dateTimeBetween('now','+5 years'),

            'creator_id'=>$this->faker->numberBetween(),
        ];
    }


}
