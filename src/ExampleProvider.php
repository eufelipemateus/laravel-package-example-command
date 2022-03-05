<?php

namespace FelipeMateus\ExampleCommand;

use Illuminate\Support\ServiceProvider;

class ExampleProvider extends ServiceProvider{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(){

        if ($this->app->runningInConsole()) {
            $this->commands([
                \FelipeMateus\ExampleCommand\Commands\ExampleCommand::class,
            ]);
        }
    }

}
