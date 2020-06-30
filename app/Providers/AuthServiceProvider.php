<?php

namespace App\Providers;
use App\Policies\AnnoncePolicy;
use App\Policies\OffrePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        '\App\Model' => '\App\Policies\ModelPolicy',
        '\App\Note' => '\App\Policies\NotePolicy',
        'App\Emploi' => 'App\Policies\EmploiPolicy',
        'App\Cv'  =>  'App\Policies\CvPolicy',
        'App\Cour' => 'App\Policies\CourPolicy',
        \App\Offre::class => OffrePolicy::class,
        \App\Annonce::class  => AnnoncePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
