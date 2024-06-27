<?php

namespace Database\Factories;

use App\Models\Visitor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitor>
 */
class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Visitor::class;
    public function definition(): array
    {

        return [
            'ip_address' => fake()->ipv4(),
            "user_agent" => fake()->userAgent(),
            "created_at" => fake()->dateTimeBetween("-5 month", '+5 month')
        ];
    }
}
