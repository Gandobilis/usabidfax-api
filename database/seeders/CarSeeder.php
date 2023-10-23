<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Detail;
use App\Models\Photo;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::factory(100)->create()->each(function ($car) {
            $car->details()->save(Detail::factory()->make());
            $car->photos()->saveMany(Photo::factory(7)->make());
        });
    }
}
