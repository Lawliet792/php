<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Bahan;
use Illuminate\Auth\Access\HandlesAuthorization;

class BahanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the bahan can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the bahan can view the model.
     */
    public function view(User $user, Bahan $model): bool
    {
        return true;
    }

    /**
     * Determine whether the bahan can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the bahan can update the model.
     */
    public function update(User $user, Bahan $model): bool
    {
        return true;
    }

    /**
     * Determine whether the bahan can delete the model.
     */
    public function delete(User $user, Bahan $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the bahan can restore the model.
     */
    public function restore(User $user, Bahan $model): bool
    {
        return false;
    }

    /**
     * Determine whether the bahan can permanently delete the model.
     */
    public function forceDelete(User $user, Bahan $model): bool
    {
        return false;
    }
}
