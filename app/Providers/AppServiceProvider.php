<?php

namespace App\Providers;

use App\Billing\Stripe;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.slidebar', function ($view){

            
            $archives = \App\Post::archives();

            $tags = \App\Tag::pluck('name');
             
            $view->with(compact('archives','tags'));

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
     $this->app->singleton(Stripe::class, function(){

            return new Stripe(config('services.stripe.secret'));
        });
        
    }
}
