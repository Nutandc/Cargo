<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            ['Ýerinde (ugramaly merkezinde)', null, 1],
            ['Ugrady (ýolda)', null, 2],
            ['Bardy (barmaly merkezinde)', null, 3],
            ['Gowşuryldy (müşderide)', null, 4],
        ];

        foreach ($objects as $object) {
            $obj = new Process();
            $obj->name = $object[0];
            $obj->name_en = $object[1];
            $obj->sort_order = $object[2];
            $obj->save();
        }
    }
}
