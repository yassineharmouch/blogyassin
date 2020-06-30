<?php

namespace App\Policies;

use App\Cv;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class CvPolicy
{
    use HandlesAuthorization;
     public function before($user,$ability){
         if(($user->role_id==5)&&($ability!='delete')&&($ability!='update')&&($ability!='create')){
             return true;
         }
     }
    /**
     * Determine whether the user can view any cvs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the cv.
     *
     * @param  \App\User  $user
     * @param  \App\Cv  $cv
     * @return mixed
     */
    public function view(User $user, Cv $cv)
    {
        return true ;
    }

    /**
     * Determine whether the user can create cvs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $user=Auth::user()->role_id;
        return in_array($user, [
            3, 
            
            ]);
    }

    /**
     * Determine whether the user can update the cv.
     *
     * @param  \App\User  $user
     * @param  \App\Cv  $cv
     * @return mixed
     */
    public function update(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can delete the cv.
     *
     * @param  \App\User  $user
     * @param  \App\Cv  $cv
     * @return mixed
     */
    public function delete(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can restore the cv.
     *
     * @param  \App\User  $user
     * @param  \App\Cv  $cv
     * @return mixed
     */
    public function restore(User $user, Cv $cv)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the cv.
     *
     * @param  \App\User  $user
     * @param  \App\Cv  $cv
     * @return mixed
     */
    public function forceDelete(User $user, Cv $cv)
    {
        //
    }
}
