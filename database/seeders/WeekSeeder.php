<?php

namespace Database\Seeders;

use App\Models\Week;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weeks = [
        [
            'id'    => 1,
            'name'  => 'Minggu'
        ],
        [
            'id'    => 2,
            'name'  => 'Senin'
        ],
        [
            'id'    => 3,
            'name'  => 'Selasa'
        ],
        [
            'id'    => 4,
            'name'  => 'Rabu'
        ],
        [
            'id'    => 5,
            'name'  => 'Kamis'
        ],
        [
            'id'    => 6,
            'name'  => 'Jumat'
        ],
        [
            'id'    => 7,
            'name'  => 'Sabtu'
        ],
    ];

    Week::insert($weeks);
    }
}
