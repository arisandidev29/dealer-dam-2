<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\product;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
        
        $product = product::factory()->count(10)->create();    

        // $category = category::select("id")->pluck('id');

        // product::create([
        //     "name" => fake()->name(),
        //     'year' => fake()->year(),
        //     "images" => "https://placehold.co/600x400",
        //     "visibility" => fake()->randomElement(['private','public']),
        //     'tipe_mesin' => fake()->text(10),
        //     "busi" => fake()->text(5),
        //     "kopling" => fake()->text(5),
        //     "sistem_bahan_bakar" => fake()->text(5),
        //     "tipe_rangka" => fake()->text(7),
        //     "ukuran_ban_belakang" => fake()->numberBetween(20,40),
        //     "ukuran_ban_depan" => fake()->numberBetween(40,50),
        //     "sistem_pengereman" => fake()->text(5),
        //     "category_id" => fake()->randomElement($category) 
        // ]);
    }
}
