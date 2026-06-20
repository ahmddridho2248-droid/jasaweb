<?php

namespace App\Policies;

use App\Models\PaketJasa;
use App\Models\User;

class PaketJasaPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function view(User $user, PaketJasa $paketJasa): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function create(User $user): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function update(User $user, PaketJasa $paketJasa): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function delete(User $user, PaketJasa $paketJasa): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function restore(User $user, PaketJasa $paketJasa): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function forceDelete(User $user, PaketJasa $paketJasa): bool
    {
        return $user->hasRole('Super Admin');
    }
}
