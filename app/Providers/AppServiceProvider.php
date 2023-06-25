<?php

namespace App\Providers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $etud=DB::table('students')->get();
        View::share('etud',$etud);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
    
    }
}
