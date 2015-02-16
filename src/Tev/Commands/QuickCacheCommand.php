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
        if (defined('WP_CACHE') && WP_CACHE && class_exists('\quick_cache')) {
            $wiped = quick_cache::wipe();
            WP_CLI::success("$wiped file(s) were cleared from the cache.");
        } else {
            WP_CLI::warning('Quick Cache is not installed or enabled');
        }
    }
}
