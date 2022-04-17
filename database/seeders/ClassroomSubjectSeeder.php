<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classroom::findOrFail(1)->classroomSubject()->sync([1, 4, 7, 10, 13, 16, 18, 20, 21, 22, 23, 39,40, 41, 49]);  // kelas X RPL
        Classroom::findOrFail(2)->classroomSubject()->sync([2, 5, 8, 11, 14, 19, 42, 43, 45, 47, 50]);  // kelas XI RPL
        Classroom::findOrFail(3)->classroomSubject()->sync([3, 6, 9, 12, 15, 44, 46, 48, ]);  // kelas XII RPL
        Classroom::findOrFail(4)->classroomSubject()->sync([1, 4, 7, 10, 13, 17, 18, 20, 21, 22, 23]);  // kelas X Akutansi
        Classroom::findOrFail(5)->classroomSubject()->sync([2, 5, 8, 11, 14, 19, 24, ]);  // kelas XI 1 Akutansi
        Classroom::findOrFail(6)->classroomSubject()->sync([2, 5, 8, 11, 14]);  // kelas XI 1 Akutansi
        Classroom::findOrFail(7)->classroomSubject()->sync([3, 6, 9, 12, 15]);  // kelas XI 2 Akutansi
        Classroom::findOrFail(8)->classroomSubject()->sync([3, 6, 9, 12, 15]);  // kelas XI 2 Akutansi

    }
}
