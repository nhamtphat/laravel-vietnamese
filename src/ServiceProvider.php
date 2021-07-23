<?php

namespace NhamtPhat\Laravel\Vietnamese;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class ServiceProvider.
 */
class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/lang/vi' => resource_path('lang/vi'),
        ]);
    }
}
