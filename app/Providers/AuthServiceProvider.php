<?php

namespace App\Providers;

use App\Services\Auth\UserGuard;
use Illuminate\Support\Facades\Auth;
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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::extend('user', function ($app, $name, array $config) { //ne znam cemu ovo sluzi, guard 'user' radi i bez toga
            // Return an instance of Illuminate\Contracts\Auth\Guard...

            return new UserGuard(Auth::createUserProvider($config['provider']));
        });
    }
}
