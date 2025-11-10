<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Brand;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->word(), 
            'price' => fake()->randomFloat(2, 100, 1000000),
            'description' => fake()->paragraph(),
            'category_id' => Category::inRandomOrder()->first()?->id, 
            'brand_id'    => Brand::inRandomOrder()->first()?->id,
        ];
    }
}
