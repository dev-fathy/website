<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i=0; $i < 10; $i++) {
            $categoryData[] = [
                'title' => Str::random(10),
            ];
        }

        foreach ($categoryData as $category) {
            Category::create($category);
        }

        foreach(Category::all() as $cat) {
            $products = \App\Product::inRandomOrder()->take(rand(1,10))->pluck('id');
            $cat->products_with_categories()->attach($products);
        }

        // foreach(Category::all() as $cat2) {
        //     $brands = \App\Brand::inRandomOrder()->take(rand(1,10))->pluck('id');
        //     $cat2->brands()->attach($brands);
        // }

    }
}
