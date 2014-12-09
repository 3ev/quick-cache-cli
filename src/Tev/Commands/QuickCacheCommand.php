<?php
namespace Tev\Commands;

use WP_CLI;
use WP_CLI_Command;
use quick_cache;

/**
 * Manage the Quick Cache plugin.
 */
class QuickCacheCommand extends WP_CLI_Command
{
    /**
     * Clear the cache.
     */
    public function clear($args = array(), $assoc_args = array())
    {
        $wiped = quick_cache::wipe();

        WP_CLI::success("$wiped file(s) were cleared from the cache.");
    }
}
