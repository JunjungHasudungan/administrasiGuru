<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    use HasFactory;

    protected $tabke = 'administrations';

    protected $fillable  = [
        'title', 
        'user_id',
        'classroom_id',
        'subject_id',
        'method',   
        'statusCheck',
        'completeness',
        ];
    
        public function users()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        public function classrooms()
        {
            return $this->belongsTo(Classroom::class, 'classroom_id');
        }

}
