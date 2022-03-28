<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = ['subject_code', 'name', 'category_id'];

    public function teacherLessons()
    {
        return $this->belongsToMany(User::class, 'user_lesson', 'user_id', 'lesson_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class,'classroom_subject','class_id', 'lesson_id');
    }
}
