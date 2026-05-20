<?php

namespace App\Traits;

trait HasPermissions
{
    public function hasPermission($permission): bool
    {
        if (!$this->role) {
            return false;
        }

        return $this->role
            ->permissions()
            ->where('name', $permission)
            ->exists();
    }
}