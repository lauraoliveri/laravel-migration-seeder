<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=0; $i < 10; $i++) { 
            $train = new Train();

            $train->company = fake()->company();
            $train->dep_station = fake()->city();
            $train->arr_station = fake()->city();
            $train->arr_time = fake()->time();
            $train->dep_time = fake()->time();
            $train->train_code = fake()->bothify('?####?');
            $train->carriages_num = rand(1, 10);
            $train->on_time = fake()->boolean();
            $train->cancelled = fake()->boolean();

            $train->save();
        }

    }
}
