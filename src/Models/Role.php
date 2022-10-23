<?php

namespace Lectero\Laragate\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'label',
    ];

    protected $with = [
        'permissions',
    ];

    public function addPermission(Permission $permission): Model
    {
        return $this->permissions()->save($permission);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}