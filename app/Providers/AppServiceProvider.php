<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categoria;
use App\Parametro;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu_categorias = Categoria::all();
        session(['menu_categorias' => $menu_categorias ]);
        view()->share('menu_categorias', session('menu_categorias') );

        $parametros = Parametro::all();
        session(['parametros' => $parametros ]);
        view()->share('parametros', session('parametros') );
        // dd($menu_categorias);
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
