<?php

namespace App\Policies;

use App\Cour;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class CourPolicy
{
    use HandlesAuthorization;
    public function before($user,$ability){
        if(($user->role_id===3)&&($ability!='delete')&&($ability!='update')&&($ability!='create' )){
            return true;
        }
    }
    /**
     * Determine whether the user can view any cours.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the cour.
     *
     * @param  \App\User  $user
     * @param  \App\Cour  $cour
     * @return mixed
     */
    public function view(User $user, Cour $cour)
    {
        return true;
    }

    /**
     * Determine whether the user can create cours.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    
   {
    $user=Auth::user()->role_id;
    return in_array($user, [
     4,
        
    ]);
       
    }

    /**
     * Determine whether the user can update the cour.
     *
     * @param  \App\User  $user
     * @param  \App\Cour  $cour
     * @return mixed
     */
    public function update(User $user, Cour $cour)
    {
        return $user->id === $cour->user_id;
    }

    /**
     * Determine whether the user can delete the cour.
     *
     * @param  \App\User  $user
     * @param  \App\Cour  $cour
     * @return mixed
     */
    public function delete(User $user, Cour $cour)
    {
        return $user->id === $cour->user_id;
    }

    /**
     * Determine whether the user can restore the cour.
     *
     * @param  \App\User  $user
     * @param  \App\Cour  $cour
     * @return mixed
     */
    public function restore(User $user, Cour $cour)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the cour.
     *
     * @param  \App\User  $user
     * @param  \App\Cour  $cour
     * @return mixed
     */
    public function forceDelete(User $user, Cour $cour)
    {
        //
    }
}
