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
                'name_class'            => 'X RPL',
                'description'           => null,
                'room_number'          => '301',
                'teacher_id'           => 13, // tabita sihaan
                'major_id'              => 1,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 2,
                'code_classroom'        => 'RPL11',
                'name_class'                  => 'XI RPL',
                'description'           => null,
                'room_number'          => '201',
                'teacher_id'            => 10, // Anjelina
                'major_id'              => 1, // JURUSAN
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 3,
                'code_classroom'        => 'RPL12',
                'name_class'                  => 'XII RPL',
                'description'           => null,
                'room_number'          => '101',
                'teacher_id'            => 4, // sumitro simamora
                'major_id'              => 1,
                'created_at'            => Carbon::now()
            ],            
            [
                'id'                    => 4,
                'code_classroom'        => 'AK10',
                'name_class'                  => 'X AK',
                'description'           => null,
                'room_number'          => '302',
                'teacher_id'            => 11, // yesaya sihotang
                'major_id'              => 2,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 5,
                'code_classroom'        => 'AK11-1',
                'name_class'                  => 'XI AK 1',
                'description'           => null,
                'room_number'          => '202',
                'teacher_id'            => 7, // nasip situmorang
                'major_id'              => 2,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 6,
                'code_classroom'        => 'AKK11-2',
                'name_class'                  => 'XI AK 2',
                'description'           => null,
                'room_number'          => '201',
                'teacher_id'            => 12, // iskandar
                'major_id'              => 2,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 7,
                'code_classroom'        => 'AKK12-1',
                'name_class'                  => 'XII 1',
                'description'           => null,
                'room_number'          => '303',
                'teacher_id'            => 6, // ferry situmorang
                'major_id'              => 2,
                'created_at'            => Carbon::now()
            ],
            [
                'id'                    => 8,
                'code_classroom'        => 'AKK12-2',
                'name_class'                  => 'XII AK 2',
                'description'           => null,
                'room_number'          => '304',
                'teacher_id'            => 6, // Dani harianja
                'major_id'              => 2,
                'created_at'            => Carbon::now()
            ],
        ];
        Classroom::insert($classes);
    }
}
