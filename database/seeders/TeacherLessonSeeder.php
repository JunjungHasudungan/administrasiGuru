<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::find(1)->teacherLessons()->sync([24, 17, 4, 5, 6]); // Guru - ervina
        User::find(4)->teacherLessons()->sync([7, 8, 9]); // Guru - Sumitro Simamora
        User::find(5)->teacherLessons()->sync([28, 29, 30, 31]); // Guru - Dani Harianja
        User::find(6)->teacherLessons()->sync([13, 14, 15]); // Guru - Feri Situmorang
        User::find(7)->teacherLessons()->sync([32, 33, 34, 35]); // Guru - Nasib Situmorang
        User::find(8)->teacherLessons()->sync([16]); // Guru - Ernes Simanjuntak
        User::find(9)->teacherLessons()->sync([39, 40, 42, 20]); // Guru - Fitri
        User::find(10)->teacherLessons()->sync([10, 11, 12]); // Guru - Angelina
        User::find(11)->teacherLessons()->sync([18, 19]); // Guru - Yesaya Sihotang
        User::find(12)->teacherLessons()->sync([27, 32, 33]); // Guru - Iskandar
        User::find(13)->teacherLessons()->sync([41, 43, 44, 47, 50]); // Guru - Tabita Sihaan
        User::find(14)->teacherLessons()->sync([1, 2, 3]); // Guru - Sehati Laia
        User::find(15)->teacherLessons()->sync([38, 45, 46, 46, 49]); // Guru - Hasudungan Sitorus
        User::find(16)->teacherLessons()->sync([34, 35]); // Guru - Argo
        // User::find(16)->teacherLessons()->sync([]); // Guru - Berman Naibaho
    }
}
