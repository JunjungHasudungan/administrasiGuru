<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::find(1)->teacherSubjects()->sync([24, 17, 4, 5, 6]); // Guru - ervina
        User::find(4)->teacherSubjects()->sync([7, 8, 9]); // Guru - Sumitro Simamora
        User::find(5)->teacherSubjects()->sync([28, 29, 30, 31]); // Guru - Dani Harianja
        User::find(6)->teacherSubjects()->sync([13, 14, 15]); // Guru - Feri Situmorang
        User::find(7)->teacherSubjects()->sync([32, 33, 34, 35]); // Guru - Nasib Situmorang
        User::find(8)->teacherSubjects()->sync([16]); // Guru - Ernes Simanjuntak
        User::find(9)->teacherSubjects()->sync([39, 40, 42, 20]); // Guru - Fitri
        User::find(10)->teacherSubjects()->sync([10, 11, 12]); // Guru - Angelina
        User::find(11)->teacherSubjects()->sync([18, 19]); // Guru - Yesaya Sihotang
        User::find(12)->teacherSubjects()->sync([27, 32, 33]); // Guru - Iskandar
        User::find(13)->teacherSubjects()->sync([41, 43, 44, 47, 50]); // Guru - Tabita Sihaan
        User::find(14)->teacherSubjects()->sync([1, 2, 3]); // Guru - Sehati Laia
        User::find(15)->teacherSubjects()->sync([38, 45, 46, 46, 49]); // Guru - Hasudungan Sitorus
        User::find(16)->teacherSubjects()->sync([34, 35]); // Guru - Argo
        // User::find(16)->teacherSubjects()->sync([]); // Guru - Berman Naibaho
    }
}
