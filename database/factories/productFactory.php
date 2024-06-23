<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = product::class;
    public function definition(): array
    {
            $category = category::select("id")->pluck('id');

        return [
            "name" => fake()->name(),
            'year' => fake()->year(),
            "price" => rand(13000000, 30000000),
            "quantity" => fake()->randomNumber(),
            "images" => "https://placehold.co/600x400",
            "visibility" => fake()->randomElement(['private','public']),
            'tipe_mesin' => fake()->text(10),
            "busi" => fake()->text(5),
            "kopling" => fake()->text(5),
            "sistem_bahan_bakar" => fake()->text(5),
            "tipe_rangka" => fake()->text(7),
            "ukuran_ban_belakang" => fake()->numberBetween(20,40),
            "ukuran_ban_depan" => fake()->numberBetween(40,50),
            "sistem_pengereman" => fake()->text(5),
            "category_id" => fake()->randomElement($category) 
        ];
    }
}
