<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $min_price = 3;
        $max_price = 100;
        return [
            //
            'category_id' => rand(1,5),
            'name' => fake()->name,
            'description'=> fake()->text,
            'image'=> fake()->imageUrl(640, 480, 'product', true),
            'ean_code'=> fake()->ean13(),
            'price'=> random_int($min_price, $max_price) - 0.01,
            'sponsored'=> 0
        ];
    }
}
