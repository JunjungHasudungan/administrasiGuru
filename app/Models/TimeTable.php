<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class TimeTable extends Model
{
    use HasFactory;

    protected $table = 'timeTables';

    protected $fillable =['event_id', 'classroom_id','subject_id','start_time', 'end_time' ];

    const WEEK_DAY = [
        1   => "SENIN",
        2   => "SELASA",
        3   => "RABU",
        4   => "KAMIS",
        5   => "JUMAT",
    ];

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class);
    }
}
