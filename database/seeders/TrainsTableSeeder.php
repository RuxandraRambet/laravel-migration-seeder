<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       for($i = 0; $i < 10; $i++) {
        $newTrain = new Train();
        $newTrain->company = $faker->randomElement(['Italo', 'Frecciarossa', 'Trenitalia']);
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_station = $faker->city();
        $newTrain->departure_time = $faker->dateTime();
        $newTrain->arrival_time = $faker->dateTime();
        $newTrain->train_code = $faker->numerify('train-####');
        $newTrain->number_of_carriages = $faker->numberBetween(5, 15);
        $newTrain->is_on_time = $faker->boolean();
        $newTrain->is_canceled = $faker->boolean;

        $newTrain->save();
       }
    }
}
