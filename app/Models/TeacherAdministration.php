<?php

namespace App\Models;

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
        'major_id'
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
}
