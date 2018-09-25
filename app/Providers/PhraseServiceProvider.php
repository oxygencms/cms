<?php

namespace App\Providers;

use App\Services\PhraseLoader;
use Illuminate\Translation\TranslationServiceProvider;

class PhraseServiceProvider extends TranslationServiceProvider
{
    /**
     * Register the phrase loader.
     */
    protected function registerLoader()
    {
        $this->app->singleton('translation.loader', function ($app) {
            return new PhraseLoader($app['files'], $app['path.lang']);
        });
    }
}
