<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClassSeeder extends Seeder
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
                'id'            => 1,
                'code_class'    => 'RPL010',
                'name'          => 'X',
                'user_id'       => 13,
                'major_id'      => 1,
                'created_at'    => Carbon::now()
            ],
            [
                'id'            => 2,
                'code_class'    => 'RPL11',
                'name'          => 'XI',
                'user_id'       => 10, // WALI KELAS
                'major_id'      => 1, // JURUSAN
                'created_at'    => Carbon::now()
            ],
            [
                'id'            => 3,
                'code_class'    => 'RPL12',
                'name'          => 'XII',
                'user_id'       => 4,
                'major_id'      => 1,
                'created_at'    => Carbon::now()
            ],            [
                'id'            => 4,
                'code_class'    => 'AK10',
                'name'          => 'X',
                'user_id'       => 11,
                'major_id'      => 2,
                'created_at'    => Carbon::now()
            ],
            [
                'id'            => 5,
                'code_class'    => 'AK11-1',
                'name'          => 'XI-1',
                'user_id'       => 7,
                'major_id'      => 2,
                'created_at'    => Carbon::now()
            ],
            [
                'id'            => 6,
                'code_class'    => 'AKK11-2',
                'name'          => 'XI-2',
                'user_id'       => 12,
                'major_id'      => 2,
                'created_at'    => Carbon::now()
            ],
            [
                'id'            => 7,
                'code_class'    => 'AKK12',
                'name'          => 'XII',
                'user_id'       => 5,
                'major_id'      => 2,
                'created_at'    => Carbon::now()
            ],
        ];
        Classroom::insert($classes);
    }
}
