<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (request()->is('admin*')) {
            $this->configureAdminSettings();
        }
    }

    private function configureAdminSettings(): void
    {
        if (config('app.admin_home_url')) {
            config(['app.home_url' => config('app.admin_home_url')]);
        }

        if (config('auth.guards.admin')) {
            config(['auth.defaults.guard' => 'admin']);
        }

        if (config('auth.passwords.admins')) {
            config(['auth.defaults.passwords' => 'admins']);
        }

        if (config('session.admin_table')) {
            config(['session.table' => config('session.admin_table')]);
        }

        if (config('session.admin_cookie')) {
            config(['session.cookie' => config('session.admin_cookie')]);
        }
    }
}
