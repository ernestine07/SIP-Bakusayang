<?php

namespace App\Providers;

use App\Models\Kategori;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
        View::share('kategori', Kategori::orderBy('nama_kategori', 'desc')->get()); //asc,desc
    }

}
