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
        'App\Models\Page' => 'App\Policies\PagePolicy',
        'App\Models\Link' => 'App\Policies\LinkPolicy',
        'App\Models\Menu' => 'App\Policies\MenuPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        'App\Models\Role' => 'App\Policies\RolePolicy',
        'App\Models\Block' => 'App\Policies\BlockPolicy',
        'App\Models\Phrase' => 'App\Policies\PhrasePolicy',
        'App\Models\Permission' => 'App\Policies\PermissionPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-backoffice', function ($user) {

            if ($user->superuser) {
                return true;
            }

            if ($user->can('manage_back_office') || $user->hasRole('observer')) {
                return true;
            }

            return false;
        });
    }
}
