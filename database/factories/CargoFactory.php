<?php

namespace Database\Factories;

use App\Models\Cargo;
use App\Models\CargoProcess;
use App\Models\Courier;
use App\Models\Location;
use App\Models\Process;
use App\Models\Specialty;
use App\Models\Transport;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cargo>
 */
class CargoFactory extends Factory
{
    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (Cargo $cargo) {
            //
        })->afterCreating(function (Cargo $cargo) {
            // Specialty
            $specialties = Specialty::inRandomOrder()->take(rand(0, 2))->get();
            $cargo->specialties()->sync($specialties);

            // Courier
            $courier = Courier::inRandomOrder()->first();
            $cargo->courier_id = $courier->id;
            $cargo->update();

            // Process
            $processes = Process::orderBy('sort_order')->take(rand(1, 4))->get();
            foreach ($processes as $process) {
                $cargoProcess = new CargoProcess();
                $cargoProcess->cargo_id = $cargo->id;
                $cargoProcess->process_id = $process->id;
                $cargoProcess->user_id = User::inRandomOrder()->first()->id;
                $cargoProcess->note = $this->faker->sentence($nbWords = rand(3, 10));
                $cargoProcess->save();
            }
            $cargo->process_id = $process->id;
            $cargo->update();
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $location = Location::inRandomOrder()->first();
        $express = rand(0, 1);
        $datetime = $this->faker->dateTimeBetween($startDate = '-3 months', $endDate = 'now');
        return [
            'location_id' => $location->id,
            'transport_id' => Transport::inRandomOrder()->first()->id,
            'courier_id' => null,
            'process_id' => null,
            'track' => Carbon::parse($datetime)->format('Ymd-His') . '-' . Str::random(6),
            'receiver_name' => $this->faker->name(),
            'receiver_phone' => rand(60000000, 65999999),
            'receiver_address' => $this->faker->address(),
            'express' => $express,
            'delivery_fee' => $express ? $location->express_fee : $location->delivery_fee,
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ];
    }
}
