<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['name' => 'Ak' ,'name_ru' =>  'Белый'],
            ['name' => 'Çal' ,'name_ru' =>  'Серый'],
            ['name' => 'Gara' ,'name_ru' =>  'Черный'],
            ['name' => 'Gök' ,'name_ru' =>  'Синий'],
            ['name' => 'Ýaşyl' ,'name_ru' =>  'Зеленый'],
            ['name' => 'Gyzyl' ,'name_ru' =>  'Красный'],
            ['name' => 'Sary' ,'name_ru' =>  'Желтый'],
            ['name' => 'Eriksary' , 'name_ru' => 'Оранжевый'],
            ['name' => 'Goňur' , 'name_ru' => 'Коричневый'],
            ['name' => 'Açyk-gök' , 'name_ru' => 'Голубой'],
            ['name' => 'Goýy-gök' , 'name_ru' => 'Черно-синий'],
            ['name' => 'Açyk-yaşyl' , 'name_ru' => 'Салатовый'],
            ['name' => 'Goýy-yaşyl' , 'name_ru' => 'Черно-зеленый'],
            ['name' => 'Açyk-gyzyl' , 'name_ru' => 'Бело-красный'],
            ['name' => 'Goýy-gyzyl' , 'name_ru' => 'Бордовый'],
            ['name' => 'Açyk-sary' , 'name_ru' => 'Бело-желтый'],
            ['name' => 'Goýy-sary' , 'name_ru' => 'Черно-желтый'],
            ['name' => 'Açyk-goňur' , 'name_ru' => 'Молочный'],
            ['name' => 'Goýy-goňur' , 'name_ru' => 'Черно-коричневый'],
        ];

        foreach ($colors as $color){
            $obj = new Color();
            $obj->name = $color['name'];
            $obj->name_ru = $color['name_ru'];
            $obj->save();
        };
    }
}
