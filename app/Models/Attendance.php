<?php

namespace App\Models;

use App\Helpers\AttendanceSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';

    protected $filable = [
        // 'classroom_id',
        'user_id',
        'subject_id',
        // 'description',
        // 'attendance',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id', 'id');
    }

    public function subjectStudent()
    {
        return $this->belongsToMany(Subject::class, 'subject_student', 'subject_id', 'student_id');
    }

    public function getIsHadirAttribute():bool
    {
        return (int) $this->attendance === AttendanceSubject::Attendance['hadir'];
    }

    public function getIsIzinAttribute():bool
    {
        return (int) $this->attendance === AttendanceSubject::Attendance['izin'];
    }

    public function getIsAbsenAttribute(): bool
    {
        return (int) $this->attendance === AttendanceSubject::Attendance['absen'];
    }
}
