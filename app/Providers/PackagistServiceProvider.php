<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Spatie\Packagist\Packagist;
use Illuminate\Support\ServiceProvider;

class PackagistServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton(Packagist::class, function () {
            $client = new Client();

            return new Packagist($client);
        });
    }
}
