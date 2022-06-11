<?php

namespace Database\Factories;

use App\Models\competitions;
use App\Models\User;
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
            'competition_id'=>(competitions::factory()),
            'user_id'=>(User::factory()),

        ];
    }
}
