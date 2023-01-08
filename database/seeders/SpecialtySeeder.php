<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            ['Döwülýän', null, 1],
            ['Ýanyjy', null, 2],
            ['Iýmit', null, 3],
            ['Suwyk', null, 4],
            ['Sowadyjy', null, 5],
            ['Janly', null, 6],
        ];

        foreach ($objects as $object) {
            $obj = new Specialty();
            $obj->name = $object[0];
            $obj->name_en = $object[1];
            $obj->sort_order = $object[2];
            $obj->save();
        }
    }
}
