<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonTimetable extends Model
{
    use HasFactory;

    protected $table = 'lessons_timetable';

    protected static $week = [
        'senin'     => 'SENIN',
        'selasa'    => 'SELASA',
        'rabu'      => 'RABU',
        'kamis'     => 'KAMIS',
        'jumat'     => 'JUMAT',
    ];

    protected $fillable = ['week', 'major_id', 'lesson_id', 'user_id'];

    public function majors()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function lessons()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
