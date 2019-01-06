<?php

namespace Modules\Permission\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use Modules\Permission\Entities\Post;
use Auth;

class PostPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
      
    }

    /**
     * Determine whether the user can view the permission.
     *
     * @param  \App\User  $user
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function view(User $user, Post $post)
    {
        $a=Auth::user()->role_users()->with('permission')->get();
        $b=$a->first()->permission->pluck('permission');

        if ($b->contains('Can_read')) {
            return true;
        }
        else{
            return $user->id === $post->user_id;
        }
    }

    /**
     * Determine whether the user can create permissions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    { 
        $a=Auth::user()->role_users()->with('permission')->get();
        $b=$a->first()->permission->pluck('permission');
        
        if ($b->contains('Can_create')) {
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Determine whether the user can update the permission.
     *
     * @param  \App\User  $user
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function update(User $user, Post $post)
    {
        $a=Auth::user()->role_users()->with('permission')->get();
        $b=$a->first()->permission->pluck('permission');

        if ($b->contains('Can_update')) {
            return true;
        }
        else{
            return $user->id === $post->user_id;
        }

    }

    /**
     * Determine whether the user can delete the permission.
     *
     * @param  \App\User  $user
     * @param  \App\Permission  $permission
     * @return mixed
     */
    public function delete(User $user, Post $post)
    {
        $a=Auth::user()->role_users()->with('permission')->get();
        $b=$a->first()->permission->pluck('permission');
        
        if ($b->contains('Can_delete')) {
            return true;
        }
        else{
            return $user->id === $post->user_id;
        }
    }
}