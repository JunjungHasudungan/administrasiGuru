<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\ManageClasses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManageClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = Classes::all();

        ManageClasses::findOrFail(1)->majors()->sync($classes->pluck('id')); // X RPL
    }
}
