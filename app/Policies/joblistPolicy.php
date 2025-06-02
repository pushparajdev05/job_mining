<?php

namespace App\Policies;

use App\Models\employer;
use App\Models\User;
use App\Models\joblist;
use Illuminate\Auth\Access\Response;

class joblistPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, joblist $joblist): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, joblist $job): bool
    {
        // dd($job -> employer->user);
        if($job->employer->user->is($user))
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, joblist $job): bool
    {
        if($job->employer->user->is($user))
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, joblist $joblist): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, joblist $joblist): bool
    {
        return false;
    }
}
