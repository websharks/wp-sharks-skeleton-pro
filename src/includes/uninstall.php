<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\Skeleton\Pro;

use WebSharks\WpSharks\Skeleton\Pro\Classes\App;

if (!defined('WPINC')) {
    exit('Do NOT access this file directly: '.basename(__FILE__));
}
require __DIR__.'/rv.php'; // Setup `wp_sharks_core_rv` config.

if (require(dirname(__DIR__).'/vendor/websharks/wp-sharks-core-rv/src/includes/check.php')) {
    require_once __DIR__.'/stub.php';
    new App(['§uninstall' => true]);
}
