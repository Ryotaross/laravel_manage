<?php

namespace App\Policies;

use App\Mission;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MissionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any missions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user,Mission $mission)
    {
        //
        return $user->id === $mission->user_id;
    }

    /**
     * Determine whether the user can view the mission.
     *
     * @param  \App\User  $user
     * @param  \App\Mission  $mission
     * @return mixed
     */
    public function view(User $user, Mission $mission)
    {
        //
        return $user->id === $mission->user_id;
    }

    /**
     * Determine whether the user can create missions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the mission.
     *
     * @param  \App\User  $user
     * @param  \App\Mission  $mission
     * @return mixed
     */
    public function update(User $user, Mission $mission)
    {
        //
        return $user->id === $mission->user_id;
    }

    /**
     * Determine whether the user can delete the mission.
     *
     * @param  \App\User  $user
     * @param  \App\Mission  $mission
     * @return mixed
     */
    public function delete(User $user, Mission $mission)
    {
        //
        return $user->id === $mission->user_id;
    }

    /**
     * Determine whether the user can restore the mission.
     *
     * @param  \App\User  $user
     * @param  \App\Mission  $mission
     * @return mixed
     */
    public function restore(User $user, Mission $mission)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the mission.
     *
     * @param  \App\User  $user
     * @param  \App\Mission  $mission
     * @return mixed
     */
    public function forceDelete(User $user, Mission $mission)
    {
        //
    }
}
