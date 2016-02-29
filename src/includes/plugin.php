<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\Skeleton\Pro;

use WebSharks\WpSharks\Skeleton\Pro\Classes\App;

if (!defined('WPINC')) {
    exit('Do NOT access this file directly: '.basename(__FILE__));
}
require_once __DIR__.'/stub.php';

new App();
