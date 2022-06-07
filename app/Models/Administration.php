<?php

namespace App\Models;

use App\Helpers\Completeness;
use App\Helpers\Method;
use App\Helpers\StatusCheck;
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
        'comment',
        'description'
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

        public function subjects()
        {
            return $this->belongsTo(Subject::class, 'subject_id', 'id');
        }

        public function administrationTeacher()
        {
            return $this->belongsToMany(User::class, 'administration_teacher', 'administration_id', 'teacher_id');
        }

        public function getIsUncheckAttribute():bool
        {
            return (int) $this->statusCheck === StatusCheck::ADMINISTRATION_STATUS['unchecked'];
        }

        public function getIsCheckAttribute():bool
        {
            return (int) $this->statusCheck === StatusCheck::ADMINISTRATION_STATUS['checked'];
        }

        public function getIsUncompleteAttribute():bool
        {
            return (int) $this->completeness === Completeness::Completeness['continued'];
        }

        public function getIsCompleteAttribute():bool
        {
            return (int) $this->completeness === Completeness::Completeness['finished'];
        }

        public function getIsTeoriAttribute():bool
        {
            return (int) $this->method === Method::Method_Learning['teori'];
        }

        public function getIsPraktekAttribute():bool
        {
            return (int) $this->method === Method::Method_Learning['praktek'];
        }

        public function getIsPenugasanAttribute():bool
        {
            return (int) $this->method === Method::Method_Learning['penugasan'];
        }
}
