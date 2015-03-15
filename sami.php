<?php

/**
 * Research client Sami configuration
 */

use Sami\Sami;

return new Sami(__DIR__ . '/src', [
    'title' => 'SellerLabs Research API PHP Client',
    'build_dir' => __DIR__ . '/docs/api',
    'cache_dir' => __DIR__ . '/storage/sami'
]);
