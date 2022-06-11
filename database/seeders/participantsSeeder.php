<?php

namespace Database\Seeders;

use App\Models\competitions;
use App\Models\participants;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class participantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        participants::factory()
            ->has(competitions::factory()->count(100))
            ->count(300)
            ->create();
    }
}
