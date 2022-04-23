<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Timetable extends Model
{
    use HasFactory;

    protected $table = 'timetables';

    protected $fillable =['name' ];

    const WEEK_DAY = [
        '1' => 'SENIN',
        '2' => 'SELASA',
        '3' => 'RABU',
        '4' => 'KAMIS',
        '5' => 'JUMAT',
    ];

    public function classroomsTimeTable()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_timetable', 'timetable_id', 'classroom_id');
    }

    // public function majors()
    // {
    //     return $this->belongsTo(Major::class, 'major_id');
    // }

    // public function lessons()
    // {
    //     return $this->belongsTo(Lesson::class, 'lesson_id');
    // }

    // public function users()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
