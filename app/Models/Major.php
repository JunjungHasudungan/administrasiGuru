<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Major extends Model
{
    use HasFactory;

    protected $table = 'majors';

    protected $fillable = ['major_code', 'title', 'headOfDepartement'];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class, 'major_id');
    }

    public function teacherMajors() // guru mata pelajaran jurusan
    {
        return $this->hasMany(User::class, 'teacher_major');
    }

    public function studentMajors()
    {
        return $this->hasMany(User::class, 'student_major');
    }

    public function departement() // kepala jurusan
    {
        return $this->hasOne(User::class);
    }

    public function majorSubject() // 
    {
        return $this->belongsToMany(Major::class, 'major_subject', 'major_id', 'subject_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
