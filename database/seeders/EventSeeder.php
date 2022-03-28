<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'id'                    => 1,
                'name'                  => 'Renungan Guru-Guru',
                'lesson_timetable_id'   => null,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 2,
                'name'                  => 'Persiapan',
                'lesson_timetable_id'   => null,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 3,
                'name'                  => 'Renungan siswa-siswi',
                'lesson_timetable_id'   => null,
                'created_at'            => Carbon::now()
            ],            [
                'id'                    => 4,
                'name'                  => 'Upacara Bendera',
                'lesson_timetable_id'   => null,
                'created_at'            => Carbon::now()
            ],            [
                'id'                    => 5,
                'name'                  => 'Istirahat',
                'lesson_timetable_id'   => null,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 6,
                'name'                  => 'KPA GURU-GURU',
                'lesson_timetable_id'   => null,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 7,
                'name'                  => 'Renungan Siswa-siswi',
                'lesson_timetable_id'   => null,
                'created_at'            => Carbon::now()
            ],
        ];

        Event::insert($events);

    }
}
