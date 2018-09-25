<?php

namespace App\Observers;

use App\Models\Block;
use App\Services\HtmlBlocks;
use Illuminate\Support\Facades\Cache;

class BlockObserver
{
    /**
     * Handle to the block "created" event.
     *
     * @param Block $block
     * @return void
     */
    public function created(Block $block)
    {
        //
    }

    /**
     * Handle the block "updated" event.
     * Replace it in cache.
     *
     * @param Block $block
     * @return void
     */
    public function updated(Block $block)
    {
        info('observer updated');
        Cache::tags(HtmlBlocks::$tags)->forget("models.block.$block->name");

        Cache::tags(HtmlBlocks::$tags)->forever("models.block.$block->name", $block);
    }

    /**
     * Handle the block "deleted" event.
     * Remove it from cache.
     *
     * @param Block $block
     * @return void
     */
    public function deleted(Block $block)
    {
        Cache::tags(HtmlBlocks::$tags)->forget("models.block.$block->name");
    }
}
