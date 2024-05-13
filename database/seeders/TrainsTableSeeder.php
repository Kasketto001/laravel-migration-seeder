<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for($i=0; $i<40; $i++) {

            $train = new Train();
            $train->company = $faker->company;
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->bothify('?? ###');
            $train->carriages_number = $faker->numberBetween(1, 10);
            $train->on_schedule = $faker->boolean(90);
            $train->cancelled = $faker->boolean(10);
            $train->save();
        }
        
        
        
        
        
        // $trains = [
        //     [
        //         'company' => 'Boolean Rails',
        //         'departure_station' => 'New York',
        //         'arrival_station' => 'Los Angeles',
        //         'departure_time' => '08:00:00',
        //         'arrival_time' => '16:00:00',
        //         'train_code' => 'BR123',
        //         'carriages_number' => 8,
        //         'on_schedule' => true,
        //         'cancelled' => false,
        //     ] 
        // ];

        // foreach ($trains as $trainData) {
        //     $train = new Train();
        //     $train->company = $trainData['company'];
        //     $train->departure_station = $trainData['departure_station'];
        //     $train->arrival_station = $trainData['arrival_station'];
        //     $train->departure_time = $trainData['departure_time'];
        //     $train->arrival_time = $trainData['arrival_time'];
        //     $train->train_code = $trainData['train_code'];
        //     $train->carriages_number = $trainData['carriages_number'];
        //     $train->on_schedule = $trainData['on_schedule'];
        //     $train->cancelled = $trainData['cancelled'];
        //     $train->save();
        // }
     }
}
