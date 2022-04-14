<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Classroom;
class ClassroomStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $usersX = User::where('id', 30);

        Classroom::findOrFail(1)->classroomStudents()->sync([29, 30, 33, 42, 43, 44]); // siswa X RPL
        Classroom::findOrFail(2)->classroomStudents()->sync([31, 38, 45, 46, 47, 48]); // siswa XI RPL
        Classroom::findOrFail(3)->classroomStudents()->sync([18, 19, 20, 21, 22, 28]); // siswa XII RPL
        Classroom::findOrFail(4)->classroomStudents()->sync([30, 31, 32, 49, 50, 51]); // siswa X Ak
        Classroom::findOrFail(5)->classroomStudents()->sync([36, 37, 52, 53, 54]); // siswa XI Ak
        Classroom::findOrFail(6)->classroomStudents()->sync([55, 56, 37, 38]); // siswa XII Ak
    }
}
