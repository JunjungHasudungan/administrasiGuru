<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'subject_code', 
        'name', 
        'teacher_id'
    ];


    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class,'major_id');
    }

    public function teachers() // guru mata pelajaran
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function teacherSubject()
    {
        return $this->belongsToMany(User::class, 'subject_user', 'subject_id', 'user_id');
    }

    public function classrooms() // kelas mata pelajaran
    {
        return $this->belongsToMany(Classroom::class,'classroom_subject', 'subject_id', 'classroom_id');
    }

    public function majorSubject()
    {
        return $this->belongsToMany(Major::class, 'major_subject', 'subject_id', 'major_id');
    }
}
