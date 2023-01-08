<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Process;
use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            LocationSeeder::class,
            TransportSeeder::class,
            ProcessSeeder::class,
            SpecialtySeeder::class,
        ]);
        \App\Models\Courier::factory()->count(10)->create();
        \App\Models\Cargo::factory()->count(100)->create();
        \App\Models\Contact::factory()->count(10)->create();

        \App\Models\UserAgent::factory()->count(10)->create();
        \App\Models\Visitor::factory()->count(100)->create();
    }
}
