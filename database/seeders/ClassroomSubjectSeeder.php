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
        // kelas X RPL
        Classroom::findOrFail(1)->classroomSubject()->sync([
            1, 4, 7, 13, 16, 10, 17, 18, 20, 23, 22, 38,39, 40, 41, 49
        ]);  

        // // kelas XI RPL
        Classroom::findOrFail(2)->classroomSubject()->sync([
            2, 5, 8, 11, 14, 19, 42, 43, 45, 47, 50
        ]);  

        // // kelas XII RPL
        Classroom::findOrFail(3)->classroomSubject()->sync([
            3, 6, 9, 12, 44, 46, 48
        ]);  

        // // kelas X Akutansi
        Classroom::findOrFail(4)->classroomSubject()->sync([
            1, 4, 7, 13, 16, 10, 17, 18, 20, 51, 52, 21, 24, 25, 26, 27, 49
        ]);  

        // // kelas XI 1 Akutansi
        Classroom::findOrFail(5)->classroomSubject()->sync([
            2, 5, 8, 14, 11, 19, 28, 30, 32, 34, 36, 50
         ]);  

        // // kelas XI 2 Akutansi
        Classroom::findOrFail(6)->classroomSubject()->sync([
            2, 5, 8, 14, 11, 19, 28, 30, 32, 34, 36, 50
        ]);
        
        // // kelas XII 1 Akutansi
        Classroom::findOrFail(7)->classroomSubject()->sync([
            3, 6, 9, 15, 12, 29, 31, 33, 35, 37
        ]);  

        // // kelas XII 2 Akutansi
        Classroom::findOrFail(8)->classroomSubject()->sync([
            3, 6, 9, 15, 12, 29, 31, 33, 35, 37
        ]);  
    }
}
