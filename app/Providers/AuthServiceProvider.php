<?php

namespace App\Providers;

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
        // 'App\Model' => 'App\Policies\ModelPolicy',
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
        
        Gate::define('isAdmin',function($user){
            return $user->role ==='Admin';
        });
        Gate::define('isUser',function($user){
            return $user->role ==='User';
        });
        
         Gate::define('isIntern',function($user){
            return $user->role ==='Intern';
        });
        Gate::define('isTrainer',function($user){
            return $user->role ==='Trainer';
        });
        
         Gate::define('isProject_manager',function($user){
            return $user->role ==='Project Manager';
        });
        
         Gate::define('isSuper_admin',function($user){
            return $user->role ==='Super Admin';
        });
        
         Gate::define('isFinance_officer',function($user){
            return $user->role ==='Finance Officer';
        });
        
         Gate::define('isStudent',function($user){
            return $user->role ==='Student';
        });
       
       
    }
}
