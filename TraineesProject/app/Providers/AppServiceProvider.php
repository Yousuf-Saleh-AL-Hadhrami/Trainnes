<?php

namespace App\Providers;

<<<<<<< HEAD
use Carbon\Carbon;
=======
>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap(); // for Bootstrap 5

<<<<<<< HEAD
        // Carbon::setLocale('en');

=======
>>>>>>> a08e8aa6b2fd5cad4aebd753b6c8da312818dde8
    }
}
