<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('my-account', function(User $user) {
            if(auth()->user()->is_admin){
                return true;
            }else{
                return $user->id === auth()->id();
            }
        });

        Gate::define('admin', function(User $user){
            return $user->is_admin;
        });
        
        Gate::define('can-post', function(User $user){
            return $user->can_post;
        });
        
    }
}
