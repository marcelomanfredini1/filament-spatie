<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as ModelPermission;
use Spatie\Permission\Traits\HasRoles;

class Permission extends ModelPermission
{
    use HasFactory, HasRoles;

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->hasPermissionTo('access_admin');
    }
}
