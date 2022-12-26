<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{

    public function run()
    {
        $attendances = [
            [
                'student_id'       => 20,
                'subject_id'    => 46,
                'classroom_id'  => 3,
                'status'        => 1,
                'description'   => 'terlambat',
            ]
        ];

        Attendance::insert($attendances);
    }
}
