<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Classroom;
class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'id'                    => 1,
                'code_classroom'        => 'RPL010',
                'name'                  => 'X',
                'teacher_id'           => 13,
                'major_id'              => 1,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 2,
                'code_classroom'        => 'RPL11',
                'name'                  => 'XI',
                'teacher_id'           => 10, // WALI KELAS
                'major_id'              => 1, // JURUSAN
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 3,
                'code_classroom'        => 'RPL12',
                'name'                  => 'XII',
                'teacher_id'          => 4,
                'major_id'              => 1,
                'created_at'            => Carbon::now()
            ],            [
                'id'                    => 4,
                'code_classroom'        => 'AK10',
                'name'                  => 'X',
                'teacher_id'          => 11,
                'major_id'              => 2,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 5,
                'code_classroom'        => 'AK11-1',
                'name'                  => 'XI-1',
                'teacher_id'          => 7,
                'major_id'              => 2,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 6,
                'code_classroom'        => 'AKK11-2',
                'name'                  => 'XI-2',
                'teacher_id'          => 12,
                'major_id'              => 2,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 7,
                'code_classroom'        => 'AKK12',
                'name'                  => 'XII',
                'teacher_id'          => 5,
                'major_id'              => 2,
                'created_at'            => Carbon::now()
            ],
        ];
        Classroom::insert($classes);
    }
}
