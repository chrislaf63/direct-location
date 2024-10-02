<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Delete;
use App\Http\View\Composers\CategoryComposer;
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
        Schema::defaultStringLength(191);
        Blade::component('Delete', Delete::class);
        View::composer('layouts.front.header-fixed', CategoryComposer::class);
        View::composer('layouts.front.header-static', CategoryComposer::class);
    }
}
