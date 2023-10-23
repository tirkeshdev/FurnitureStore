<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            BrandSeeder::class,
            SizeSeeder::class,
            ColorSeeder::class,
            LocationSeeder::class,
            MadeSeeder::class,
            SellerSeeder::class,
            MaterialSeeder::class

        ]);

        Product::factory(500)->create();
    }
}
