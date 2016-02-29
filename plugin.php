<?php
/*
Version: 16xxxx
Text Domain: wps-skeleton
Plugin Name: Skeleton Pro

Author: WP Sharks™
Author URI: https://wpsharks.com/

License: GPL-3.0+
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Plugin URI: https://wpsharks.com/product/skeleton/
Description: WP Sharks™ plugin skeleton.
*/
if (!defined('WPINC')) {
    exit('Do NOT access this file directly: '.basename(__FILE__));
}
if ($is_wp_sharks_core_active) {
    require_once __DIR__.'/src/includes/stub.php';
}
