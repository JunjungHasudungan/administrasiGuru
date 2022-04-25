<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'classrooms';

    protected $fillable = ['code_classroom', 'name', 'major_id', 'teacher_id', 'event_id', 'classroom_id'];

    public function majors()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function students()
    {
        return $this->hasMany(User::class);
    }
    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function homeworkTeacher()
    {
        return $this->hasOne(User::class, 'homework_teacher');
    }

    public function classroomSubject()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_subject', 'subject_id', 'classroom_id' );
    }

    public function classroomsTimeTable()
    {
        return $this->belongsToMany(Timetable::class, 'classroom_timetable', 'timetable_id', 'classroom_id' );
    }
}
