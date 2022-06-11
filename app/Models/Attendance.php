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
        'student_id',
        'subject_id',
        'description',
        'attendance',
    ];

    public function students()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
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
