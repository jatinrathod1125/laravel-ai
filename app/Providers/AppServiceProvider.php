<?php

namespace App\Providers;

use App\Models\Plans;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        //
        Schema::defaultStringLength(191);

        View::composer('layouts.model', function ($view) {
            $view->with(
                'plans',
                Plans::with('features')->get()
            );
        });
    }
}
