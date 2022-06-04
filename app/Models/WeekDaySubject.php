<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeekDaySubject extends Model
{
    use HasFactory;

    protected $table = 'week_day';

    protected $fillable = ['name'];

    public function WeekDaySubject()
    {
        return $this->belongsToMany(Subject::class,'study_day', 'week_day_subject_id', 'subject_id');
    }
}
