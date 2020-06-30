<?php

namespace App\Policies;

use App\User;
use App\Annonce;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
class AnnoncePolicy
{
    use HandlesAuthorization;
     public function before($user,$ability){
         if(($user->role_id==5)&&($ability!='delete')&&($ability!='update')&&($ability!='create')){
             return true;
         }
     }
    /**
     * Determine whether the user can view any annonces.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the annonce.
     *
     * @param  \App\User  $user
     * @param  \App\annonce  $annonce
     * @return mixed
     */
    public function view(User $user, Annonce $annonce)
    {
        return true ;
    }

    /**
     * Determine whether the user can create annonces.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $user=Auth::user()->role_id;
        return in_array($user, [
            5,
            1, 
            
            ]);
    }

    /**
     * Determine whether the user can update the annonce.
     *
     * @param  \App\User  $user
     * @param  \App\annonce  $annonce
     * @return mixed
     */
    public function update(User $user, Annonce $annonce)
    {
        return $user->id === $annonce->user_id;
    }

    /**
     * Determine whether the user can delete the annonce.
     *
     * @param  \App\User  $user
     * @param  \App\annonce  $annonce
     * @return mixed
     */
    public function delete(User $user, Annonce $annonce)
    {
        return $user->id === $annonce->user_id;
    }

    /**
     * Determine whether the user can restore the annonce.
     *
     * @param  \App\User  $user
     * @param  \App\annonce  $annonce
     * @return mixed
     */
    public function restore(User $user, Annonce $annonce)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the annonce.
     *
     * @param  \App\User  $user
     * @param  \App\annonce  $annonce
     * @return mixed
     */
    public function forceDelete(User $user, Annonce $annonce)
    {
        //
    }
}
