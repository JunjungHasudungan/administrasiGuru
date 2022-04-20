<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSubjectSeeder extends Seeder
{
    public function run()
    {
        Major::find(1)->majorSubject()->sync([
            1,
            // 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 18, 19, 20, 21, 22, 23, 38, 39,
            // 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50
        ]); // RPL

        Major::find(2)->majorSubject()->sync([
            1,
            // 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 18, 19, 20, 21, 22, 23,  25, 26,
            // 27, 28, 30, 31, 32, 33, 34, 35, 36, 37 
        ]); // Akutansi
    }
}
