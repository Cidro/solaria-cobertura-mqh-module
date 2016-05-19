<?php

namespace Asimov\Solaria\Modules\CoberturaMqh;

use Illuminate\Support\ServiceProvider;
use Route;

class CoberturaMqhModuleServiceProvider extends ServiceProvider{

    public function boot(){
        $this->registerRoutes();
        $this->registerViews();
        $this->publishMigrationsAndSeeds();
        $this->publishAssets();
    }

    /**
     * Registra una instancia del modulo en la aplicacion
     *
     * @return void
     */
    public function register() {
        $moduleLoader = $this->app->make('solaria.moduleloader');
        $moduleLoader->add(new CoberturaMqh());
    }

    /**
     * Registra las rutas del modulo
     */
    private function registerRoutes() {
        Route::group(['middleware' => 'auth', 'namespace' => 'Asimov\Solaria\Modules\CoberturaMqh\Http\Controllers'], function() {
            Route::controller('/backend/modules/cobertura-mqh', 'CoberturaController');
        });
    }

    /**
     * Registra las vistas del modulo
     */
    private function registerViews() {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'modulecoberturamqh');
    }

    /**
     * Publica las migraciones del modulo
     */
    private function publishMigrationsAndSeeds() {
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Publica los assets del modulo
     */
    private function publishAssets(){
        $this->publishes([
            __DIR__ . '/public/' => public_path('modules/cobertura-mqh')
        ], 'assets');
    }
}