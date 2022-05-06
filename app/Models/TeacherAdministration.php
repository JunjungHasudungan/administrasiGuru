<?php

namespace App\Models;

use App\Helpers\Completeness;
use App\Helpers\StatusCheck;
use App\Helpers\Method;
use App\Models\Classroom;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class TeacherAdministration extends Model
{
    use HasFactory;

    protected $table = 'teacher_administration';
    // public $id;

    protected $fillable = [
        'teacher_id', 
        'learning_method',
        'subject_title', 
        'subject_id',
        'classroom_id',
        'status',
        'completeness'
    ];


    public function teachers()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    // public function teacherSubject()
    // {
    //     return $this->subjects()->where('teacher_id',);
    // }

    public function getIsUncheckedAttribute():bool
    {
        return (int) $this->status === StatusCheck::ADMINISTRATION_STATUS['unchecked'];
    }

    public function getIsCheckedAttribute():bool
    {
        return (int) $this->status === StatusCheck::ADMINISTRATION_STATUS['checked'];
    }

    public function getIsTheoryAttribute():bool
    {
        return (int) $this->learning_method === Method::Method_Learning['theory'];
    }

    public function getIsPracticeAttribute():bool
    {
        return (int) $this->learning_method === Method::Method_Learning['practice'];
    }

    public function getIsAssigmentAttribute():bool
    {
        return (int) $this->learning_method === Method::Method_Learning['assignment'];
    }

    public function getIsContinueAttribute():bool
    {
        return (int) $this->completeness === Completeness::Completeness['continued'];
    }

    public function getIsFinishAttribute():bool
    {
        return (int) $this->completeness === Completeness::Completeness['finished'];
    }

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
