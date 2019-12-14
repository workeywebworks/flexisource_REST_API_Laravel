<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
//use Illuminate\Http\Resources\Json\Resource;
class AppServiceProvider extends ServiceProvider
{
   
    public function register()
    {
        //
    }

 
    public function boot()
    {
      //  Resource::withoutWrapping();
        Schema::defaultStringLength(191);
    }
}
