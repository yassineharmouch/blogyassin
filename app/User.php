<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];







   

    public function cvs(){
        return $this->hasMany('App\Cv');
    }

    
    public function cours(){
        return $this->hasMany('App\Cour');
    }


    public function offres(){
        return $this->hasMany('App\Offre');
    }
    public function notes(){
        return $this->hasMany('App\Note');
    }
    public function emplois(){
        return $this->hasMany('App\Emploi');
    }
    public function annonces(){
        return $this->hasMany('App\Annonce');
    }
}