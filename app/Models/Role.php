<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class,'role_user', 'role_id', 'user_id');
    }

    public function roleUsers()
    {
        return $this->belongsToMany(User::class);
    }

    public function teachers(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
        );
    }

    public function students()
    {
        return $this->belongsToMany(User::class,'role_user', 'role_id', 'user_id')->where('role_id', 5);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
