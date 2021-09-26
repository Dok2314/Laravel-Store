<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        // define('DOLLAR','https://api.monobank.ua/bank/currency');
        // $data = file_get_contents(DOLLAR);
        // $course_dollar = json_decode($data);
        // $dollar = $course_dollar[0]->rateBuy;
        // View::share('dollar',$dollar);
    }
}
