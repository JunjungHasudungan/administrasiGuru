<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageClasses extends Model
{
    use HasFactory;

    protected $table = 'manage_classes';

    protected $fillable = ['user_id', 'major_id', 'lesson_id', 'class_id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function majors()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function lessons()
    {
        return $this->belongsTo(Lesson::class, 'leson_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
