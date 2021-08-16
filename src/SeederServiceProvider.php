<?php
namespace Gi30\Seeder;

use Illuminate\Support\ServiceProvider;

class SeederServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/public' => public_path('sql'),]);

        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations')
        ]);
        $this->publishes([
            __DIR__.'/database/seeders/' => database_path('seeders')
        ]);

    }

    public function register()
    {

    }
}