<?php

namespace App\Policies;

use App\User;
use App\Offre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class OffrePolicy
{
    use HandlesAuthorization;
    public function before($user,$ability){
        
     
    }
    /**
     * Determine whether the user can view any offres.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function view(User $user, Offre $offre)
    {
       
    }

    /**
     * Determine whether the user can create offres.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $user=Auth::user()->role_id;
        return in_array($user, [
         5,
            
        ]);
       
    }

    /**
     * Determine whether the user can update the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function update(User $user, Offre $offre)
    {
        
        return $user->id === $offre->user_id;
    }

    /**
     * Determine whether the user can delete the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function delete(User $user, Offre $offre)
    {
      
        return $user->id === $offre->user_id;
    }

    /**
     * Determine whether the user can restore the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function restore(User $user, Offre $offre)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function forceDelete(User $user, Offre $offre)
    {
        //
    }
}
