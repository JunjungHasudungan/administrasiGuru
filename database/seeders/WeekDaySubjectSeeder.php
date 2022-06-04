<?php

namespace Database\Seeders;

use App\Models\WeekDaySubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekDaySubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weekdaySubject = [
            [
                'id'        => 1,
                'name'      => 'Senin'
            ],
            [
                'id'        => 2,
                'name'      => 'Selasa'
            ],
            [
                'id'        => 3,
                'name'      => 'Rabu'
            ],
            [
                'id'        => 4,
                'name'      => 'Kamis'
            ],
            [
                'id'        => 5,
                'name'      => 'Jumat'
            ],
        ];

        WeekDaySubject::insert($weekdaySubject);
    }
}
