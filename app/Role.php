<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permisson_role');

    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
