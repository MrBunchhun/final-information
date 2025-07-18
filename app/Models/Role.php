<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_roles');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles');
    }
}
