<?php

namespace App\Models;

use App\Http\Livewire\Admin\Classsroom;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    // use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'classroom_id',
        'student_address',
        'student_licence_number',
        'teacher_qualifications',
        'teacher_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    public function classroom()
    {
        return $this->hasOne(Classroom::class);
    }

    public function teachers() // guru mata pelajaran
    {
        return $this->hasMany(Subject::class, 'teacher_id', 'id');
    }

    public function homeworkTeacher() // wali kelas
    {
        return $this->hasOne(Classsroom::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'teacher_id');
    }

    public function students()
    {
        return $this->belongsTo(User::class, 'role_id');
    }
    public function teacherSubject() // guru mata pelajaran
    {
        return $this->belongsToMany(Subject::class , 'teacher_subject', 'teacher_id', 'subject_id');
    }
}
