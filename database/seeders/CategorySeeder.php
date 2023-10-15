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
            [null, 'Çagalar üçin mebel', 'Детская комната'],
            [null, 'Aşhana üçin mebel', 'Кухня'],
            [null, 'Ýatylyan otag üçin mebel', 'Спальня'],
            [null, 'Banya üçin mebel', 'Ванная'],
            [null, 'Myhman otagy üçin mebel', 'Гостинная'],
            [1 , 'Şkaflar', 'Шкафы'],
            [1 , 'Kompýuter stollary', 'Комьютерные столы'],
            [1 , 'Diwar tekjeleri', 'Полки навесные'],
            [2 , 'Ýokarky şkaflar', 'Верхние шкафы'],
            [2 , 'Aşaky şkaflar', 'Нижние тумбы'],
            [2 , 'Uzyn şkaflar', 'Высокие шкафы'],
            [2 , 'Aşhana stollary', 'Кухонные столы'],
            [3 , 'Krowatlar', 'Кровати в спальню'],
            [3 , 'Şkaflar', 'Шкафы для одежды'],
            [3 , 'Ýüz görülýän aýnalar', 'Зеркала для спальни'],
            [3 , 'Çekmeler', 'Ночные тумбочки'],
            [4 , 'Rakowina', 'Раковины'],
            [4 , 'Çekmeler', 'Тумбочки'],
            [4 , 'Wanna', 'Ванна для ванной'],
            [5 , 'Zaldaky diwarlar', 'Стенки в зал'],
            [5 , 'Divanlar', 'Диваны'],
            [5 , 'Telewizor postawkalar', 'Тумбы для телевизора'],
            [5 , 'Haly', 'Ковер'],
        ];

        foreach ($objs as $obj) {
            Category::create([
                'parent_id' => $obj[0],
                'name' => $obj[1],
                'name_ru' => $obj[2],
            ]);
        }
    }
}
