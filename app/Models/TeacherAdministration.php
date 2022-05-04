<?php

namespace App\Models;

use App\Helpers\Completeness;
use App\Helpers\StatusCheck;
use App\Helpers\Method;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeacherAdministration extends Model
{
    use HasFactory;
    
    protected $table = 'teacher_administration';

    protected $fillable = [
        'teacher_id', 
        'learning_method',
        'subject_title', 
        'subject_id',
        'weekday', 
        'start_time', 
        'end_time', 
        'classroom_id',
        'major_id',
        'status',
        'completeness'
    ];

    const COMPLETENESS = [
        0   => 'Bersambung',
        1   => 'Selesai'
    ];

    const WeekDay = [
        1   => 'SENIN',
        2   => 'SELASA',
        3   => 'RABU',
        4   => 'KAMIS',
        5   => 'JUMAT'
    ];

    const Method_Learning = [
        1   => 'TEORI',
        2   => 'PRAKTEK',
        3   => 'PENUGASAN'
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
        return $this->BelongsTo(Classrooms::class);
    }

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
}
