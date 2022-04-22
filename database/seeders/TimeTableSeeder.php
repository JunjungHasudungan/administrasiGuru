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
                'event_id'      => null,
                'classroom_id'  => 4, 
                'subject_id'    => 1, 
                'start_time'    => '10:20',
                'end_time'      => '12:00',
                'weekday'       => 3
            ],
        ];

        TimeTable::insert($timetables);
    }
}
