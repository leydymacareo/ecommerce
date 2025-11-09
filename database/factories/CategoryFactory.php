<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    public function definition(): array
    {

        $category = [
            "Televisores",
            "Computadores portátiles",
            "Tabletas",
            "Teléfonos inteligentes",
            "Cámaras fotográficas",
            "Consolas de videojuegos",
            "Auriculares y audífonos",
            "Parlantes y sistemas de sonido",
            "Relojes inteligentes",
            "Electrodomésticos inteligentes"
        ];

        return [
            'name' => $this->faker->unique()->randomElement($category),
        ];
    }
}
