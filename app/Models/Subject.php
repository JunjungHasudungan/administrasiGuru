<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = ['subject_code', 'name', 'classroom_id', 'teacher_id','category_id'];


    const WEEK_DAY = [
        1   => "MINGGU",
        2   => "SENIN",
        3   => "SELASA",
        4   => "RABU",
        5   => "KAMIS",
        6   => "JUMAT",
        7   => "SABTU"
    ];
    public function teacherSubjects()
    {
        return $this->belongsToMany(User::class, 'subject_user', 'subject_id', 'user_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function class()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    // public function roles()
    // {

    // }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'role_id', function($user){
            $user->role_id = 3;
        });
    }

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class,'classroom_id');
    }
}
