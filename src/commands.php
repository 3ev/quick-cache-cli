<?php

if (defined('WP_CLI') && WP_CLI) {
    WP_CLI::add_command('quick-cache', 'Tev\Commands\QuickCacheCommand');
}
