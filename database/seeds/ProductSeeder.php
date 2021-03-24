<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            $productData[] = [
                'name' => Str::random(10),
                'image' => Str::random(10),
                'SKE' => Str::random(10),
            ];
        }

        foreach ($productData as $prod) {
            Product::create($prod);
        }

        foreach(Product::all() as $product) {
            $users = \App\User::inRandomOrder()->take(rand(1,10))->pluck('id');
            $product->users()->attach($users);
        }

    }
}
