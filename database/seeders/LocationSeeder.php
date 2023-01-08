<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            ['Aşgabat', null, 15, 50],
            ['Ahal', null, 50, 150],
            ['Balkan', null, 50, 150],
            ['Daşoguz', null, 50, 150],
            ['Lebap', null, 50, 150],
            ['Mary', null, 50, 150],
        ];

        foreach ($objects as $object) {
            $obj = new Location();
            $obj->name = $object[0];
            $obj->name_en = $object[1];
            $obj->delivery_fee = $object[2];
            $obj->express_fee = $object[3];
            $obj->save();
        }
    }
}
