<?php

namespace App\Providers;
use App\Setting;
use App\Cat;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.inc.header',function($view){
            $view->with('cat',Cat::select('id','name')->get());
            $view->with('sett',Setting::select('logo','favicon')->first());
        });

        view()->composer('front.inc.footer',function($view){
            
            $view->with('sett',Setting::first());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
