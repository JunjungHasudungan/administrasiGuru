<?php

namespace App\Models;

use App\Helpers\DailyTeaching;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    use HasFactory;

    protected $guarded=[];
    
    const dailyTeaching = [
        1   => 'Senin',
        2   => 'Selasa',
        3   => 'Rabu',
        4   => 'Kamis',
        5   => 'Jumat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function getIsSeninAttribute():bool
    {
        return (int) $this->day === DailyTeaching::dailyTeaching['senin'];
    }

    public function getIsSelasaAttribute():bool
    {
        return (int) $this->day === DailyTeaching::dailyTeaching['selasa'];
    }

    public function getIsRabuAttribute():bool
    {
        return (int) $this->day === DailyTeaching::dailyTeaching['rabu'];
    }

    public function getIsKamisAttribute():bool
    {
        return (int) $this->day === DailyTeaching::dailyTeaching['kamis'];
    }

    public function getIsJumatAttribute():bool
    {
        return (int) $this->day === DailyTeaching::dailyTeaching['jumat'];
    }
}
