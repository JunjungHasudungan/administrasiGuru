<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'Subjects';

    protected $fillable = ['subject_code', 'name', 'classroom_id', 'teacher_id', 'major_id'];


    const WEEK_DAY = [
        1   => "MINGGU",
        2   => "SENIN",
        3   => "SELASA",
        4   => "RABU",
        5   => "KAMIS",
        6   => "JUMAT",
        7   => "SABTU"
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class,'classroom_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function teacherSubject() // guru mata pelajaran
    {
        return $this->belongsToMany(User::class, 'teacher_subject', 'teacher_id', 'subject_id');
    }
}
