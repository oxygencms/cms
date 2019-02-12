<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JavaScript;

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
    public function register()
    {
        $this->loadPhrasesToJavascript();
    }

    /**
     * Load the translations, phrases, locale & locales to Javascript.
     *
     * @return void
     */
    private function loadPhrasesToJavascript(): void
    {
        if (config('phrases.load_to_javascript', false)) {
            $groups = ['db', 'headings', 'labels', 'buttons', 'links'];

            $translations = [];

            foreach ($groups as $group) {
                $translations[$group] = app('translation.loader')->load(app()->getLocale(), $group);
            }

            JavaScript::put([
                'translations' => $translations,
                'locale' => $this->app->getLocale(),
                'locales' => config('oxygen.locales'),
            ]);
        }
    }
}
