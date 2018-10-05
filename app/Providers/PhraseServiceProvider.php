<?php

namespace App\Providers;

use Oxygencms\Phrases\Services\PhraseLoader;
use Illuminate\Translation\TranslationServiceProvider;

class PhraseServiceProvider extends TranslationServiceProvider
{
    /**
     * Register the phrase loader.
     *
     * TODO: move this provider to the package!
     *
     */
    protected function registerLoader()
    {
        $this->app->singleton('translation.loader', function ($app) {
            return new PhraseLoader($app['files'], $app['path.lang']);
        });
    }
}
