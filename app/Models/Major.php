<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Major extends Model
{
    use HasFactory;

    protected $table = 'majors';

    protected $fillable = [
        'major_code', 
        'title', 
        'head_of_departement'
    ];

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
        return $this->hasMany(Classroom::class);
    }

    public function teachers() // guru mata pelajaran jurusan
    {
        return $this->belongsToMany(User::class, 'major_teacher', 'major_id', 'teacher_id');
    }

    public function studentMajors()
    {
        return $this->hasMany(User::class, 'student_major');
    }

    public function headOfDepartement() // kepala jurusan
    {
        return $this->belongsTo(User::class, 'head_of_departement');
    }

    public function majorSubject() // 
    {
        return $this->belongsToMany(Subject::class, 'major_subject', 'major_id', 'subject_id');
    }

    public function classroomMajor()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_major', 'classroom_id', 'major_id');
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
