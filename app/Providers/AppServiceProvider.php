<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Illuminate\Support\Facades\Schema;
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


        // Carbon::setLocale(Config::get('app.locale'));
        //ASSIGNING COMPONENTS

        // documents
        Blade::include('components.agents.show_type_label', 'agent_show_type_label'); 
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
