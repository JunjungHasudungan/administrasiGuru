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
        'teacher_major',
        'student_major',
        'head_Of_Departement',
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

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getIsTeacherAttribute() // guru mata pelajaran
    {
        return $this->hasMany(Subject::class, 'teacher_id', 'id');
    }

    public function getIsKurikulumAttribute()
    {
        return $this->roles()->where('id', 3)->exists();
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
        return $this->hasMany(Subject::class, 'teacher_id');
    }

    public function teacherMajor() // guru jurusan
    {
        return $this->belongsTo(Major::class);
    }

    public function headOfDepartement() // kepala jurusan
    {
        return $this->belongsTo(Major::class);
    }
}
