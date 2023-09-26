<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as ModelRole;
use Spatie\Permission\Traits\HasRoles;

class Role extends ModelRole
{
    use HasFactory, HasRoles;

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->hasPermissionTo('access_admin');
    }
}
