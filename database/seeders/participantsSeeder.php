<?php

namespace Database\Seeders;

use App\Models\participants;
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
            ->count(150)
            ->create();
    }
}
