<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <  20; $i++){
            $train = new Train();
    
            $train->company = $faker->words(1, true);
            $train->departure_station = $faker->words(3, true);
            $train->arrival_station = $faker->words(3, true);
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $faker->dateTimeBetween('-1 day', '+5 day');
            $train->train_number = $faker->randomNumber(5, true);
            $train->coach_number = $faker->randomDigitNotNull();
            $train->train_on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            $train->save();
        }
    }
}
