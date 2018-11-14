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

        // components for labels
        Blade::include('components.agents.show_type_label', 'agent_show_type_label'); 
        Blade::include('components.agents.show_city_label', 'agent_show_city_label'); 
        Blade::include('components.agents.show_price_label', 'agent_show_price_label'); 

        // Agents component
        Blade::include('components.agents.agents', 'agents'); 
        Blade::include('components.agents.agent', 'agent'); 
        // show rating
        Blade::include('components.agents.rating', 'rating'); 
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
