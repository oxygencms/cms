<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhrasePolicy extends BasePolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     *
     * @return mixed
     */
    public function index(User $user)
    {
        if ($user->can('see_phrases') || $user->can('manage_phrases')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can create phrases.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->can('create_phrase') || $user->can('manage_phrases')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the phrase.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function update(User $user)
    {
        if ($user->can('update_phrase') || $user->can('manage_phrases')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the phrase.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function delete(User $user)
    {
        if ($user->can('delete_phrase') || $user->can('manage_phrases')) {
            return true;
        }

        return false;
    }
}
