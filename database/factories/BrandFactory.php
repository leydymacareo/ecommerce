<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $brand = [
            "Samsung",
            "Apple",
            "Sony",
            "LG",
            "Dell",
            "HP",
            "Lenovo",
            "Asus",
            "Xiaomi",
            "Huawei"
        ];

        return [
            'name' => $this->faker->unique()->randomElement($brand),
        ];
    }
}
