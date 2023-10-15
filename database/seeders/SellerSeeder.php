<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sellers = [
            ['name' => 'Muhammet', 'number' => '+993 64 785634', 'location_id' => Location::where('name', 'Balkan')->first()->id ],
            ['name' => 'Garýagdy', 'number' => '+993 64 585686', 'location_id' => Location::where('name', 'Aşgabat')->first()->id],
            ['name' => 'Atajan', 'number' => '+993 61 549876', 'location_id' => Location::where('name', 'Mary')->first()->id],
            ['name' => 'Maksat', 'number' => '+993 62 096173', 'location_id' => Location::where('name', 'Lebap')->first()->id],
            ['name' => 'Selim', 'number' => '+993 65 738485', 'location_id' => Location::where('name', 'Daşoguz')->first()->id],
            ['name' => 'Aman', 'number' => '+993 63 956349', 'location_id' => Location::where('name', 'Ahal')->first()->id],
        ];

        foreach ($sellers as $seller) {
            $obj = new Seller();
            $obj->name = $seller['name'];
            $obj->number = $seller['number'];
            $obj->location_id = $seller['location_id'];
            $obj->save();
        }
    }
}
