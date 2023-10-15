<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'IKEA',
            'La-Z-Boy',
            'Herman Miller',
            'Bassett Furniture',
            'Restoration Hardware',
            'Bernhardt',
            'Best Home Furnishings',
            'Wayfair',
            'Ethan Allen',
            'Williams-Sonoma, Inc.',
            'Hooker Furniture',
            'American Signature',
            'Raymour & Flanigan',
            'Liberty Furniture',

        ];

        foreach ($brands as $brand){
            $obj = new Brand();
            $obj->name = $brand;
            $obj->save();
        }
    }
}
