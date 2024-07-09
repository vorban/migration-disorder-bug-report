<?php

namespace Vorban\Disorder;

use Illuminate\Support\ServiceProvider;

class DisorderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'disorder');
    }

    public function register()
    {
        //
    }
}
