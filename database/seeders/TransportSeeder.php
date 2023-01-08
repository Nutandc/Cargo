<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            ['Howa', null],
            ['Deňiz', null],
            ['Demirýol', null],
            ['Ulag', null],
        ];

        foreach ($objects as $object) {
            $obj = new Transport();
            $obj->name = $object[0];
            $obj->name_en = $object[1];
            $obj->save();
        }
    }
}
