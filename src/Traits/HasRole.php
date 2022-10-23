<?php

use Lectero\Laragate\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasRole
{
    public function hasRole($role): bool
    {
        return (bool) $role->intersect($this->roles)->count();
    }

    public function assignRole(Role $role): Model
    {
        return $this->roles()->save($role);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
}