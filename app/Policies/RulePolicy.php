<?php

namespace App\Policies;

use App\Models\Rule;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RulePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true; // Ubah sesuai kebijakan akses
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Rule $rule): bool
    {
        return $user->id === $rule->user_id; // Contoh: hanya pemilik yang bisa melihat
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true; // Bisa dibuat aturan lebih lanjut
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Rule $rule): bool
    {
        return $user->id === $rule->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Rule $rule): bool
    {
        return $user->id === $rule->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Rule $rule): bool
    {
        return $user->id === $rule->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Rule $rule): bool
    {
        return $user->id === $rule->user_id;
    }
}
