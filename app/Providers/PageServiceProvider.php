<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The namespace for the admin.
     *
     * @var string $admin_namespace
     */
    protected $admin_namespace = 'App\Http\Controllers\Admin';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        // Explicitly bind the page_slug because of the translations (json)
        Route::bind('page_slug', function ($slug) {

            $locale = session('app_locale') ?: app()->getLocale();

            $page = Page::bySlug($slug, $locale)->first();

            if ($page) {
                return $page;
            }

            $locales = config('app.locales');

            unset($locales[$locale]);

            // search for this slug in the reset of the locales
            foreach ($locales as $key => $name) {

                $page = Page::bySlug($slug, $key)->first();

                if ($page) {
                    session()->put('app_locale', $key);

                    return $page;
                }
            }

            return abort(404);
        });

        parent::boot();
    }

    /**
     * Define the routes for the pages.
     *
     * @return void
     */
    public function map()
    {
        $this->mapAdminRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the route for the showing a page.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::middleware(['web', 'admin'])
             ->namespace($this->admin_namespace)
             ->prefix('admin')
             ->group(function () {
                 Route::resource('page', 'PageController', ['except' => 'show']);
             });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(function () {
                 Route::get('/', 'HomeController@show')->name('home');
                 Route::get('{page_slug}', 'PageController@show')->name('page.show');
             });
    }


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
