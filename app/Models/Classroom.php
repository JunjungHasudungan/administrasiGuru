<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    // const WEEK = ['SENIN', 'SELASA', 'RABU', 'KAMIS', 'JUMAT'];

    protected $table = 'classrooms';

    protected $fillable = ['code_classroom', 'name', 'major_id', 'user_id'];

    public function majors()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function users() // Wali
    {
        return $this->belongsToMany(User::class, 'classroom_user', 'classroom_id', 'user_id');
    }

    public function students() // Wali
    {
        return $this->belongsToMany(User::class, 'classroom_user', 'classroom_id', 'user_id');
    }

    public function homeworkTeacherUsers()
    {
        return $this->belongsToMany(User::class, 'homework_teacher', 'user_id', 'class_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'classroom_subject', 'classroom_id', 'subject_id');
    }
}
