<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class visitiorSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visitor::factory()->count(4)->create();
    }
}
