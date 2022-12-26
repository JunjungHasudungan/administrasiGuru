<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $table = 'subjects';

    // protected $fillable = [
    //     'subject_code', 
    //     'name', 
    //     'teacher_id', 
    //     'major_id'
    // ];


    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class,'major_id');
    }

    public function teachers() // guru mata pelajaran
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }


    public function teacherSubject()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function classrooms() // kelas mata pelajaran
    {
        return $this->belongsToMany(Classroom::class,'classroom_subject', 'subject_id', 'classroom_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function studentSubject()
    {
        return $this->belongsToMany(User::class, 'subject_student', 'subject_id', 'student_id');
    }

    public function studentAttendances()
    {
        return $this->belongsToMany(User::class, 'attendances', 'student_id', 'subject_id');
    }

    public function getStartTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('H:i:s', $value)->format(config('panel.lesson_time_format')) : null;
    }

    public function setStartTimeAttribute($value)
    {
        $this->attributes['start_time'] = $value ? Carbon::createFromFormat(config('panel.lesson_time_format'),
            $value)->format('H:i:s') : null;
    }

    public function getEndTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('H:i:s', $value)->format(config('panel.lesson_time_format')) : null;
    }

    public function setEndTimeAttribute($value)
    {
        $this->attributes['end_time'] = $value ? Carbon::createFromFormat(config('panel.lesson_time_format'),
            $value)->format('H:i:s') : null;
    }
    
    public function weekDaySubject()
    {
        return $this->belongsToMany(WeekDaySubject::class, 'study_day', 'subject_id', 'week_day_subject_id');
    }
}
