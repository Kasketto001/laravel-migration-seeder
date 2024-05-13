<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'company' => 'Boolean Rails',
                'departure_station' => 'New York',
                'arrival_station' => 'Los Angeles',
                'departure_time' => '08:00:00',
                'arrival_time' => '16:00:00',
                'train_code' => 'BR123',
                'carriages_number' => 8,
                'on_schedule' => true,
                'cancelled' => false,
            ] 
        ];

        foreach ($trains as $trainData) {
            $newTrain = new Train();
            $newTrain->company = $trainData['company'];
            $newTrain->departure_station = $trainData['departure_station'];
            $newTrain->arrival_station = $trainData['arrival_station'];
            $newTrain->departure_time = $trainData['departure_time'];
            $newTrain->arrival_time = $trainData['arrival_time'];
            $newTrain->train_code = $trainData['train_code'];
            $newTrain->carriages_number = $trainData['carriages_number'];
            $newTrain->on_schedule = $trainData['on_schedule'];
            $newTrain->cancelled = $trainData['cancelled'];
            $newTrain->save();
        }
     }
}
