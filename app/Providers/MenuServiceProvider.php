<?php

namespace App\Providers;

use App\Models\Link;
use App\Models\Menu;
use App\Services\MenuLoader;
use App\Observers\MenuObserver;
use App\Observers\LinkObserver;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Menu::observe(MenuObserver::class);

        Link::observe(LinkObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('menus', MenuLoader::class);
    }
}
