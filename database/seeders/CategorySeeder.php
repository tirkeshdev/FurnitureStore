<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            [null, 'Çagalar otagy', 'Детская комната', null],
            [null, 'Aşhana', 'Кухня', null],
            [null, 'Ýatylyan otag', 'Спальня', null],
            [null, 'Banya', 'Ванная', null],
            [null, 'Myhman otagy', 'Гостинная', null],
            [1 , 'Şkaflar', 'Шкафы', 'img_2.jpg'],
            [1 , 'Kompýuter stollary', 'Комьютерные столы', 'img_1.jpg'],
            [1 , 'Diwar tekjeleri', 'Полки навесные', 'img_3.jpg'],
            [2 , 'Ýokarky şkaflar', 'Верхние шкафы', 'img_4.jpg'],
            [2 , 'Aşaky şkaflar', 'Нижние тумбы', 'img_5.jpg'],
            [2 , 'Uzyn şkaflar', 'Высокие шкафы', 'img_6.jpg'],
            [2 , 'Aşhana stollary', 'Кухонные столы', 'img_7.jpg'],
            [3 , 'Krowatlar', 'Кровати в спальню', 'img_8.jpg'],
            [3 , 'Şkaflar', 'Шкафы для одежды', 'img_9.jpg'],
            [3 , 'Spalnynyň aýnalary', 'Зеркала для спальни', 'img_10.jpg'],
            [3 , 'Çekmeler', 'Ночные тумбочки', 'img_11.jpg'],
            [4 , 'Rakowina', 'Раковины', 'img_12.jpg'],
            [4 , 'Çekmeler', 'Тумбочки', 'img_13.jpg'],
            [4 , 'Wanna', 'Ванна для ванной', 'img_14.jpg'],
            [5 , 'Zaldaky diwarlar', 'Стенки в зал', 'img_15.jpg'],
            [5 , 'Divanlar', 'Диваны', 'img_16.jpg'],
            [5 , 'Telewizor postawkalar', 'Тумбы для телевизора', 'img_17.jpg'],
            [5 , 'Haly', 'Ковер', 'img_18.jpg'],
        ];

        foreach ($objs as $obj) {
            Category::create([
                'parent_id' => $obj[0],
                'name' => $obj[1],
                'name_ru' => $obj[2],
                'image' => $obj[3],
            ]);
        }
    }
}
