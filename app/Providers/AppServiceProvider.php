<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum; 

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
        // Blade::componentNamespace('Resources\\Views\\Components\\Starter', 'starter');
        // for a custom class 
        // Blade::componentNamespace('App\\View\\Components\\Core', 'core-components');
        // for custom anonymous path
        Blade::anonymousComponentPath(resource_path('views/components/starter'), 'starter');
        
    }
}
