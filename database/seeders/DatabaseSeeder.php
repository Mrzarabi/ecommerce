<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Feature;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use App\Models\Variation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(10)->create();

        $categories = Category::factory(10)->create();

        $brands = Brand::factory(15)->create();

        $disounts = Discount::factory(12)->create();

        $categories->each(function($category) use($brands, $disounts) {
            $category->products()->saveMany(Product::factory(5)->create([
                'brand_id' => $brands->random()->id,
                'discount_id' => $disounts->random()->id,
                'category_id' => $category->id
            ]))->each(function($product) {
                $product->images()->saveMany(Image::factory(3)->create([
                    'product_id' => $product->id
                ]));
                $product->variations()->saveMany(Variation::factory(4)->create([
                    'product_id' => $product->id
                ]))->each(function($variation) {
                    $variation->features()->saveMany(Feature::factory(5)->create([
                        'variation_id' => $variation->id
                    ]));
                });
            });
        });
    }
}
