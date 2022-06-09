<?php

namespace Database\Seeders;

use App\Models\competitions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\competitionsFactory;


class competitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        competitions::factory()
            ->count(50)
            ->create();
    }
}
