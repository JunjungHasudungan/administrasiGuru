<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'biodatas';

    protected $fillable = [
        'user_code', 'gender',
        'user_id', 'date_of_birth',
        'date_of_place', 'mother', 'guardian', 'address'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
