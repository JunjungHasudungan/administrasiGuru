<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'classrooms';

    protected $fillable = [
    'code_classroom',
    'name_class',
    'major_id',
    'teacher_id',
    'room_number',
    'description'
    ];

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function students()
    {
        return $this->hasMany(User::class, 'classroom_id');
    }
    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function homeworkTeacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function classroomSubject()
    {
        return $this->belongsToMany(Subject::class, 'classroom_subject',  'classroom_id', 'subject_id',);
    }

    public function classroomsTimeTable()
    {
        return $this->belongsToMany(Timetable::class, 'classroom_timetable', 'timetable_id', 'classroom_id' );
    }
}
