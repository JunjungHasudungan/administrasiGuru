<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $table = 'majors';

    protected $fillable = ['major_code', 'title'];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
