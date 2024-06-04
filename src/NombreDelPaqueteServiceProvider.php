<?php

namespace Vendor\NombreDelPaquete;

use Illuminate\Support\ServiceProvider;

class NombreDelPaqueteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publicar assets
        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/nombre-del-paquete'),
        ], 'public');

        // Registrar vistas
        $this->loadViewsFrom(__DIR__.'/resources/views', 'nombre-del-paquete');
    }

    public function register()
    {
        //
    }
}
