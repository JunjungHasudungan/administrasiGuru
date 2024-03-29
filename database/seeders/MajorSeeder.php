<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Major;
use Carbon\Carbon;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = [
            [
                'id'                    => 1,
                'major_code'            => 'RPL',
                'title'                 => 'Rekayasa Perangkat Lunak',
                'head_of_departement'   =>13,
                'created_at'            =>  Carbon::now()
            ],
            [
                'id'                    => 2,
                'major_code'            => 'Akuntasi',
                'title'                 => 'Akutansi',
                'head_of_departement'   => 5, 
                'created_at'            =>  Carbon::now()
            ],
        ];

        Major::insert($majors);

    }
}
