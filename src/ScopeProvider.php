<?php

namespace AdLara\Scope;

use Illuminate\Support\ServiceProvider;

class ScopeProvider extends ServiceProvider
{
    public function register()
    {
        $urlSegements = request()->segments();
        $adminRoute = config('adlara.admin_route');

        if (isset($urlSegements[0]) && ($urlSegements[0] == $adminRoute)) {

            $this->app->app_scope = 'admin';
            config(['adlara.app_scope' => 'admin']);
            
        } else {
            
            $this->app->app_scope = 'front';

        }

    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/adlara.php' => config_path('adlara.php')
        ], 'adlarascope');
    }
}