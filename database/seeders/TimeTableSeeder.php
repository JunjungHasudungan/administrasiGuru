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
                'weekday'       => 1,
                'start_time', 'end_time', 'event'
            ],
        ];

        TimeTable::insert($timetables);
    }
}
