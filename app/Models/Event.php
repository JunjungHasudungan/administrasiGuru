<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    
    protected $fillable = ['name', 'lesson_timetable_id'];

    public function lessonTimetables()
    {
        return $this->hasMany(LessonTimetable::class);
    }
}
