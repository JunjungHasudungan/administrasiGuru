<?php

namespace App\Models;

use App\Helpers\Completeness;
use App\Helpers\Constant;
use App\Helpers\Method;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function getIsUncheckedAttribute():bool
    {
        return (string) $this->status === 'unchecked';
    }

    public function getIsCheckedAttribute():bool
    {
        return (string) $this->status === 'checked';
    }

    public function getIsTheoryAttribute():bool
    {
        return (String) $this->learning_method === 'teori';
    }

    public function getIsPracticeAttribute():bool
    {
        return (String) $this->learning_method === 'praktek';
    }

    public function getIsAssigmentAttribute():bool
    {
        return (String) $this->learning_method === 'penugasan';
    }

    public function getIsContinueAttribute():bool
    {
        return (String) $this->completeness === 'bersambung';
    }

    public function getIsFinishAttribute():bool
    {
        return (String) $this->completeness === 'selesai';
    }
}
