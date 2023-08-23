<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
//  */


class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'name' => $this->faker->word(),
            'picture' => $this->faker->imageUrl(),
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
