<?php

namespace Modules\Permission\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;


class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
  
    /**
     * Determine whether the user can view the permission.
     *
     * @param  \App\User  $user
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function can_view(User $user, Post $post)
    {
        return true;
    }

    /**
     * Determine whether the user can create permissions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function can_create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the permission.
     *
     * @param  \App\User  $user
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function can_update(User $user, Permission $permission)
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can delete the permission.
     *
     * @param  \App\User  $user
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function can_delete(User $user, Permission $permission)
    {
        return $user->id === $post->user_id;
    }
}