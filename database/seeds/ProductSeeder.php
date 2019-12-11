<?php

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
        factory(App\Product::class, 10)->create();

        // Queria algo assim pra alimentar as 3 tabelas de uma vez, mas não consegui

         // factory(App\Product::class, 5)->create()->each(function (Product $product) {
         //     factory(App\Type::class, 3)->create()->each(function (Product $product, Type $type) {
         //         factory(App\ProductType::class, 10)->create([
         //             'product_id' => $product->id,
         //             'type_id' => $type->id,
         //         ]);
         //     });
         // });
     }
}
