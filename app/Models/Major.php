<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $table = 'majors';

    protected $fillable = ['major_code', 'name'];

    public function classes()
    {
        return $this->hasMany(Classes::class);
    }

}
