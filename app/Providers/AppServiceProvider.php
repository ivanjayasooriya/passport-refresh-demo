<?php

namespace App\Providers;

use Carbon\CarbonInterval;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

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
        // Enable Password Grant
        Passport::enablePasswordGrant();

        // Access token expires after 15 minutes
        Passport::tokensExpireIn(
            CarbonInterval::minutes(15)
        );

        // Refresh token expires after 30 days
        Passport::refreshTokensExpireIn(
            CarbonInterval::days(30)
        );
    }
}
