<?php

namespace Database\Seeders;

use App\Models\category as ModelsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = ['sport','matic','cub'];

        foreach($category as $c) {
            ModelsCategory::create([
                "name" => $c
            ]);
        }
    }
}
