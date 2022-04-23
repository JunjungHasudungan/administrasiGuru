<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Timetable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomTimetableSeeder extends Seeder
{
    public function run()
    {
        $classrooms = Classroom::all();

        Timetable::findOrFail(1)->classroomsTimeTable()->sync($classrooms->pluck('id'));
        Timetable::findOrFail(2)->classroomsTimeTable()->sync($classrooms->pluck('id'));
        Timetable::findOrFail(3)->classroomsTimeTable()->sync($classrooms->pluck('id'));
        Timetable::findOrFail(4)->classroomsTimeTable()->sync($classrooms->pluck('id'));
        Timetable::findOrFail(5)->classroomsTimeTable()->sync($classrooms->pluck('id'));
    }
}
