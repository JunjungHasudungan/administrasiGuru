<?php

namespace Database\Seeders;

use App\Models\TimeTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeTableSeeder extends Seeder
{
    public function run()
    {
        $timetables = [
            [
                'id'            => 1, 
                'weekday'          => 1,
            ],
            [
                'id'            => 2, 
                'weekday'          => 2,
            ],
            [
                'id'            => 3, 
                'weekday'          => 3,
            ],
            [
                'id'            => 4, 
                'weekday'          => 4,
            ],
            [
                'id'            => 5, 
                'weekday'          => 5,
            ],
        ];

        TimeTable::insert($timetables);
    }
}
