<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Support\Str;
use App\Models\{Sku, Order};
use App\Enums\OrderStatusEnum;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws Exception
     */
    public function run($session_id = null): void
    {
        $cart = Order::factory()
            ->count(1)
            ->create([
                'session_id' => $session_id ?? Str::uuid(),
                'status' => OrderStatusEnum::CART,
            ]);

        $cart->each(function ($cart) {
            $sku = Sku::with('product')->inRandomOrder()->take(random_int(1,15))->get();

            $total = 0;
            $cart->total = 0;

            $sku->each(function ($item) use ($cart, &$total) {
                $qtd = random_int(1, 3);
                $cart->skus()->attach(
                    [
                        $item->id =>[
                            'quantity' => $qtd,
                            'unitary_price' =>$item->price,
                            'product' => $item->product->toJson(),
                        ]
                    ]
                );

                $total = $item->price * $qtd;

                $cart->total += $total;
            });

            $cart->save();
        });
    }
}
