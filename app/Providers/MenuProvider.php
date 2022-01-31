<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DataModel;

class MenuProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*', function($view){
          $menu = new DataModel();
            $leftmenu = $menu->getmenu();
          return $view->with($leftmenu);
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
