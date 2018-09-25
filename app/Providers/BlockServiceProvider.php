<?php

namespace App\Providers;

use App\Models\Block;
use App\Observers\BlockObserver;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BlockServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Block::observe(BlockObserver::class);

        Blade::directive('block', function (string $expression) {
            return "<?php if ( ! App\Services\HtmlBlocks::setUp($expression) ) { ?>";
        });

        Blade::directive('endblock', function () {
            return "<?php } echo App\Services\HtmlBlocks::tearDown() ?>";
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
