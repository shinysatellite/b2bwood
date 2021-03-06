<?php

namespace App\Providers;

use DebugBar\DebugBar;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
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

  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
      if(env('APP_DEBUG')){
          \Debugbar::enable();
      }else{
          \Debugbar::disable();
      }
  }
}
