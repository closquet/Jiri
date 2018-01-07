<?php

namespace Jiri\Policies;

use Jiri\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Jiri\User  $user
     * @param  \Jiri\User  $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Jiri\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Jiri\User  $user
     * @param  \Jiri\User  $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Jiri\User  $user
     * @param  \Jiri\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        //
    }
}
