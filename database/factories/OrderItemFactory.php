<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $orderIds = Order::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();
        return [
            'order_id' => fake()->randomElement($orderIds),
            'product_id' => fake()->randomElement($productIds),
            'quantity' => fake()->numberBetween(1, 5),
        ];
    }
}
