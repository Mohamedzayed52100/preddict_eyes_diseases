<?php

namespace App\Providers;

// use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\View ;


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

        $data =DB::select('select * from users');

        View::share([
            'mess'=>'safa zayed',
            'data'=>$data,


        ]);

    }
}
