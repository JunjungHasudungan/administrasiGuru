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
                'name'          => 'SELASA',
            ],
            [
                'id'            => 2, 
                'name'          => 'SELASA',
            ],
            [
                'id'            => 3, 
                'name'          => 'RABU',
            ],
            [
                'id'            => 4, 
                'name'          => 'KAMIS',
            ],
            [
                'id'            => 5, 
                'name'          => 'JUMAT',
            ],
        ];

        TimeTable::insert($timetables);
    }
}
