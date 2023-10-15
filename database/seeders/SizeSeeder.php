<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
            ['name' => 'Beýikligi: 40cm | Ini: 70cm', 'name_ru' => 'Высота: 40cm | Ширина: 70cm'],
            ['name' => 'Beýikligi: 25cm | Ini: 50cm', 'name_ru' => 'Высота: 25cm | Ширина: 50cm'],
            ['name' => 'Beýikligi: 46cm | Ini: 65cm', 'name_ru' => 'Высота: 46cm | Ширина: 65cm'],
            ['name' => 'Beýikligi: 34cm | Ini: 74cm', 'name_ru' => 'Высота: 34cm | Ширина: 74cm'],
            ['name' => 'Beýikligi: 48cm | Ini: 67cm', 'name_ru' => 'Высота: 48cm | Ширина: 67cm'],
            ['name' => 'Beýikligi: 68cm | Ini: 70cm', 'name_ru' => 'Высота: 68cm | Ширина: 70cm'],
            ['name' => 'Beýikligi: 60cm | Ini: 30cm', 'name_ru' => 'Высота: 60cm | Ширина: 30cm'],
        ];

        foreach ($sizes as $size) {
            $obj = new Size();
            $obj->name = $size['name'];
            $obj->name_ru = $size['name_ru'];
            $obj->save();
        }
    }
}
