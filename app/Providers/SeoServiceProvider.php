<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Artesaos\SEOTools\Facades\SEOTools;

class SeoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        SEOTools::addImages([url('/pics/default.jpg')]);
    }

    public function register()
    {
        //
    }
}
