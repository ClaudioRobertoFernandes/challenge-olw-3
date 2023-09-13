<?php

namespace Database\Factories;

use App\Models\OrderSku;
use App\Models\Sku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrderSku>
 */
class OrderSkuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $sku = Sku::with('product')->inRandomOrder()->first();
        return [
            'sku_id' => $sku->id,
            'product' => $sku->toJson(),
            'quantity' => $this->faker->randomDigitNot(0),
            'unitary_price' => $sku->price
        ];
    }
}
