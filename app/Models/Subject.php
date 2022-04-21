<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'Subjects';

    protected $fillable = ['subject_code', 'name', 'teacher_id', 'major_id'];


    const WEEK_DAY = [
        1   => "SENIN",
        2   => "SELASA",
        3   => "RABU",
        4   => "KAMIS",
        5   => "JUMAT",
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function teacherSubject() // guru mata pelajaran
    {
        return $this->belongsTo(User::class);
    }

    public function classroomSubject() // kelas mata pelajaran
    {
        return $this->belongsToMany(Classroom::class,'classroom_subject', 'subject_id', 'classroom_id');
    }

    public function majorSubject()
    {
        return $this->belongsToMany(Major::class, 'major_subject', 'subject_id', 'major_id');
    }

    public static function isTimeAvailable($weekday, $startTime, $endTime, $class, $teacher, $lesson)
    {
        $lessons = self::where('weekday', $weekday)
            ->when($lesson, function ($query) use ($lesson) {
                $query->where('id', '!=', $lesson);
            })
            ->where(function ($query) use ($class, $teacher) {
                $query->where('class_id', $class)
                    ->orWhere('teacher_id', $teacher);
            })
            ->where([
                ['start_time', '<', $endTime],
                ['end_time', '>', $startTime],
            ])
            ->count();

        return !$lessons;
    }

    public function scopeCalendarByRoleOrClassId($query)
    {
        return $query->when(!request()->input('class_id'), function ($query) {
            $query->when(auth()->user()->is_teacher, function ($query) {
                $query->where('teacher_id', auth()->user()->id);
            })
                ->when(auth()->user()->is_student, function ($query) {
                    $query->where('class_id', auth()->user()->class_id ?? '0');
                });
        })
            ->when(request()->input('class_id'), function ($query) {
                $query->where('class_id', request()->input('class_id'));
            });
    }
}
