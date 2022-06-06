<?php

namespace App\Models;

use App\Helpers\RoleCheck;
use App\Helpers\RoleStatus;
use App\Http\Livewire\Admin\Classsroom;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'major_id',
        'head_Of_Departement',
        'status',
        'is_active'
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

    public function classrooms() // kelas siswa
    {
        return $this->belongsTo(Classroom::class, 'classroom_id', 'id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'role_id', 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function homeworkTeacher() // wali kelas
    {
        return $this->hasOne(Classsroom::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'teacher_id', 'id');
    }

    public function administrations()
    {
        return $this->hasMany(Administration::class, 'teacher_id', 'id');
    }

    public function students() 
    {
        return $this->belongsTo(User::class, 'role_id');
    }

    public function studentMajor()
    {
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
    
    
    public function teacherSubject() // guru mata pelajaran
    {
        return $this->belongsToMany(Subject::class, 'subject_user', 'user_id', 'subject_id');
    }

    public function majorTeacher() // guru jurusan
    {
        return $this->belongsToMany(Major::class, 'major_teacher','teacher_id' ,'major_id');
    }


    public function headOfDepartement() // kepala jurusan
    {
        return $this->belongsTo(Major::class);
    }

    public function subjectStudent()
    {
        return $this->belongsToMany(Subject::class, 'subject_student', 'student_id', 'subject_id',);
    }

    public function getIsStudentAttribute():bool
    {
        return (int) $this->role_id === RoleCheck::RoleCheck['Siswa'];
    }

    public function getIsTeacherAttribute():bool
    {
        return (int) $this->role_id === RoleCheck::RoleCheck['Guru'];
    }

    public function getIsKurikulumAttribute():bool
    {
        return (int) $this->role_id === RoleCheck::RoleCheck['Kurikulum'];
    }

    public function getIsHeadMasterAttribute():bool
    {
        return (int) $this->role_id === RoleCheck::RoleCheck['Kepala Sekolah'];
    }

    public function getIsNewRoleAttribute():bool
    {
        return (int) $this->is_active === RoleStatus::RoleStatus[1];
    }

    public function getIsTransferAttribute():bool
    {
        return (int) $this->is_active === RoleStatus::RoleStatus[1];        
    }
}
