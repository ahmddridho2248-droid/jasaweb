<?php

namespace App\Policies;

use App\Models\Fitur;
use App\Models\User;

class FiturPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function view(User $user, Fitur $fitur): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function create(User $user): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function update(User $user, Fitur $fitur): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function delete(User $user, Fitur $fitur): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function restore(User $user, Fitur $fitur): bool
    {
        return $user->hasRole('Super Admin');
    }

    public function forceDelete(User $user, Fitur $fitur): bool
    {
        return $user->hasRole('Super Admin');
    }
}
