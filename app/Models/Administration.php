<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    use HasFactory;

    protected $table  = 'administrations';

    protected $fillable  = [
        'teacher_id',
        'title', 
        'classroom_id',
        'subject_id',
        'method',   
        'statusCheck',
        'completeness',
        ];
    
        public function teachers()
        {
            return $this->belongsTo(User::class, 'teacher_id', 'id');
        }

        public function users()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        public function classrooms()
        {
            return $this->belongsTo(Classroom::class, 'classroom_id', 'id');
        }

        // public function teachers()
        // {
        //     return $this->belongsTo(User::class, 'teacher_id', 'id');
        // }

        public function subjects()
        {
            return $this->belongsTo(Subject::class, 'subject_id', 'id');
        }

        public function administrationTeacher()
        {
            return $this->belongsToMany(User::class, 'administration_teacher', 'administration_id', 'teacher_id');
        }
}
