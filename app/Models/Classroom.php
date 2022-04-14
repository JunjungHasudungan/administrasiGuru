<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'classrooms';

    protected $fillable = ['code_classroom', 'name', 'major_id', 'teacher_id'];

    public function majors()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function homeworkTeachers() // wali kelas
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'classroom_subject', 'classroom_id', 'subject_id');
    }

    public function classroomStudents()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_student','classroom_id','student_id');
    }
}
