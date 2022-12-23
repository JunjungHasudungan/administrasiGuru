<?php

namespace Database\Seeders;

use App\Models\Shedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shedules = [
            [
                'user_id'       => 1,
                'classroom_id'  => 1, 
                'subject_id'    => 4, 
                'day'           => 1,
                'start_time'    => '15:00',
                'end_time'      => '16:00'
            ], 
            [
                'user_id'       => 1,
                'classroom_id'  => 1, 
                'subject_id'    => 5, 
                'day'           => 2,
                'start_time'    => '15:00',
                'end_time'      => '16:00'
            ],
            [
                'user_id'       => 1,
                'classroom_id'  => 1, 
                'subject_id'    => 6, 
                'day'           => 3,
                'start_time'    => '15:00',
                'end_time'      => '16:00'
            ],
        ];

        Shedule::insert($shedules);
    }
}
