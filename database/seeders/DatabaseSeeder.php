<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\Product::factory(1000)->create();
    }
}
