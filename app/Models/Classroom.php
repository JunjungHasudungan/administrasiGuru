<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'classrooms';

    protected $fillable = ['code_classroom', 'name', 'major_id', 'teacher_id', 'event_id', 'part'];

    public function majors()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    // public function homeworkTeacher() // wali kelas
    // {
    //     return $this->belongsTo(User::class, 'teacher_id');
    // }

    // public function subjects()
    // {
    //     return $this->belongsToMany(Subject::class, 'classroom_subject', 'classroom_id', 'subject_id');
    // }

    // public function subjects()
    // {

    // }

    public function students()
    {
        return $this->hasMany(User::class, 'classroom_id');
    }
    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function classroomSubject()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_subject', 'classroom_id', 'subject_id');
    }
}
