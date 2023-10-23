<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class ProductFactory extends Factory
{
    public function configure(): static
    {
        return $this->afterMaking(function (Product $product) {
            // ...
        })->afterCreating(function (Product $product) {
            $sellers = Seller::inRandomOrder()
                ->take(rand(1,3))
                ->get();

            $product->sellers()->sync($sellers);
        });
    }


    public function definition(): array
    {
        $brand = DB::table('brands')->inRandomOrder()->first();
        $color = DB::table('colors')->inRandomOrder()->first();
        $made = DB::table('mades')->inRandomOrder()->first();
        $material = DB::table('materials')->inRandomOrder()->first();
        $size = DB::table('sizes')->inRandomOrder()->first();
        $category = DB::table('categories')->whereNotNull('parent_id')->inRandomOrder()->first();
        $name = fake()->streetName();
        $name_ru = null;
        $discount = fake()->boolean(30);
        $built = fake()->boolean(20);
        return [
            'brand_id' => $brand->id,
            'color_id' => $color->id,
            'made_id' => $made->id,
            'material_id' => $material->id,
            'size_id' => $size->id,
            'category_id' => $category->id,
            'name' => $name,
            'name_ru' => $name_ru ? $name_ru : $name,
            'image' => 'https://cdn11.bigcommerce.com/s-1u1m3wn/stencil/9ebb89e0-3dcc-013c-38fe-56e1ccb5fa50/e/796dd330-42cf-013c-d218-3acb15f69135/img/custom_img/furniture_type_01.jpg',
            'description' => fake()->paragraph(9),
            'price' => rand(200, 6500),
            'discount_percent' => $discount ? rand(10,20): 0,
            'built' => $built,
        ];
    }
}
