<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
                // Should return TRUE or FALSE
                Gate::define('isArtisan', function(User $user) {
                    return $user->role == 'artisan';
                });
                Gate::define('isCustomer', function(User $user) {
                    return $user->role == 'customer';
                });
                Gate::define('isDeliveryman', function(User $user) {
                    return $user->role == 'deliveryman';
                });


    }
}
