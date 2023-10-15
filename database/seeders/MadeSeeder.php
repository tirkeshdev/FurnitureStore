<?php

namespace Database\Seeders;

use App\Models\Made;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mades = [
            'Made in Turkey',
            'Made in Dubai',
            'Made in China',
            'Made in Turkmenistan',
            'Made in USA'
        ];

        foreach ($mades as $made) {
            $obj = new Made();
            $obj->name = $made;
            $obj->save();
        }
    }
}
