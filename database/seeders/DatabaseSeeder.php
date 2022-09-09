<?php

namespace Database\Seeders;

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
        factory(App\Product::class, 100)->create()->each(function ($product) {
            $product->reviews()->createMany(factory(App\Review::class, 5)->make()->toArray());
        });
    }
}
