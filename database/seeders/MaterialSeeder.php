<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = [
            ['name' => 'Agaç', 'name_ru' => 'Дерево'],
            ['name' => 'Demir', 'name_ru' => 'Металл'],
            ['name' => 'Aýna', 'name_ru' => 'Стекло'],
            ['name' => 'Tebigy daşlar', 'name_ru' => 'Натуральные камни'],
            ['name' => 'Winera', 'name_ru' => 'Виниры'],
            ['name' => 'Deri', 'name_ru' => 'Кожа'],
            ['name' => 'Dokma önümleri', 'name_ru' => 'Текстиль'],
        ];

        foreach ($materials as $material) {
            $obj = new Material();
            $obj->name = $material['name'];
            $obj->name_ru = $material['name_ru'];
            $obj->save();
        }
    }
}
