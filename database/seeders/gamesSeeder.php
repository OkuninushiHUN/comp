<?php

namespace Database\Seeders;

use App\Models\competitions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\competitionsSeeder;
use App\Models\games;




class gamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        games::factory()
            ->has(competitions::factory()->count(10))
            ->count(50)
            ->create();
    }
}
