<?php

namespace Database\Seeders;

use App\Models\TeacherAdministration;
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
                'teacher_id'        => 15, 
                'learning_method'   => 1,
                'subject_title'      => 'Penjumlahan Bilangan Biner',
                'subject_id'        => 38,
                'weekday'           => 1,
                'start_time'        => '14:00',
                'end_time'          => '15:00',
                'classroom_id'      => 1
            ],
        ];

        TeacherAdministration::insert($teacherAdministration);
    }
}
