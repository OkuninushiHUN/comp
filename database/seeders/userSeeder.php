<?php

namespace Database\Seeders;

use App\Models\competitions;
use App\Models\games;
use Database\Factories\gamesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()
            ->count(50)
            ->create();
    }
}
