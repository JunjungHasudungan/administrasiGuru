<?php

namespace Database\Seeders;

use App\Models\TeacherAdministration;
use App\Helpers\Constant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherAdministrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacherAdministration = [
            // [
            //     'id'                => 1,
            //     'teacher_id'        => 5, 
            //     'learning_method'   => 1,
            //     'subject_title'     => 'Penjumlahan Bilangan Biner',
            //     'subject_id'        => 25,
            //     'weekday'           => 1,
            //     'start_time'        => '14:00',
            //     'end_time'          => '15:00',
            //     'classroom_id'      => 1,
            //     'major_id'          => 1,
            // ],
            [
                'id'                => 1,
                'teacher_id'        => 13, 
                'learning_method'   => 'theory',
                'subject_title'     => 'HAK CIPTA',
                'subject_id'        => 5,
                'weekday'           => 1,
                'start_time'        => '14:00',
                'end_time'          => '15:00',
                'classroom_id'      => 1,
                'major_id'          => 1,
                'status'            => 'checked',
            ],
        ];

        TeacherAdministration::insert($teacherAdministration);
    }
}
