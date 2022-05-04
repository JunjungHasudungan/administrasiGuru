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
            [
                'id'                => 1,
                'teacher_id'        => 13, 
                'learning_method'   => 'teori',
                'subject_title'     => 'HAK CIPTA',
                'subject_id'        => 5,
                'classroom_id'      => 1,
                'status'            => 'checked',
                'completeness'      => 'finish',
            ],
            [
                'id'                => 2,
                'teacher_id'        => 5, 
                'learning_method'   => 'teori',
                'subject_title'     => 'perkenalan mata pelajaran',
                'subject_id'        => 28,
                'classroom_id'      => 6,
                'status'            => 'checked',
                'completeness'      => 'bersambung',
            ],
            [
                'id'                => 3,
                'teacher_id'        => 5, 
                'learning_method'   => 'teori',
                'subject_title'     => 'perkenalan mata pelajaran',
                'subject_id'        => 29,
                'classroom_id'      => 7,
                'status'            => 'unchecked',
                'completeness'      => 'bersambung',
            ],
            [
                'id'                => 4,
                'teacher_id'        => 6, 
                'learning_method'   => 'teori',
                'subject_title'     => 'Matriks',
                'subject_id'        => 15,
                'classroom_id'      => 3,
                'status'            => 'checked',
                'completeness'      => 'bersambung',
            ],
            [
                'id'                => 5,
                'teacher_id'        => 6, 
                'learning_method'   => 'teori',
                'subject_title'     => 'matriks',
                'subject_id'        => 15,
                'classroom_id'      => 7,
                'status'            => 'unchecked',
                'completeness'      => 'bersambung',
            ],
        ];

        TeacherAdministration::insert($teacherAdministration);
    }
}
