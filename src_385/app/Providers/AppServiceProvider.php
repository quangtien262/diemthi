<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //Utils
        $this->app->singleton(
                'ClassCommon', function () {
            return new \App\Services\Utils\ClassCommon;
        });
        $this->app->singleton(
                'ClassEmail', function () {
            return new \App\Services\Utils\ClassEmail;
        });
        $this->app->singleton(
                'ClassValidationRequest', function () {
            return new \App\Services\Utils\ClassValidationRequest;
        });
        
        //Entity
        $this->app->singleton(
                'ClassTables', function () {
            return new \App\Services\Entity\ClassTables;
        });
        $this->app->singleton(
                'ClassConfig', function () {
            return new \App\Services\Entity\ClassConfig;
        });
        $this->app->singleton(
                'EntityCommon', function () {
            return new \App\Services\Entity\EntityCommon;
        });
        $this->app->singleton(
                'ClassCategory', function () {
            return new \App\Services\Entity\ClassCategory;
        });
    }
    
    
}
