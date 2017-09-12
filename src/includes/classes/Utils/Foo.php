<?php
/**
 * Foo utils.
 *
 * @author @wpsharks
 * @copyright WP Sharks™
 */
declare(strict_types=1);
namespace WebSharks\WpSharks\Skeleton\Pro\Classes\Utils;

use WebSharks\WpSharks\Skeleton\Pro\Classes;
use WebSharks\WpSharks\Skeleton\Pro\Interfaces;
use WebSharks\WpSharks\Skeleton\Pro\Traits;
#
use WebSharks\WpSharks\Skeleton\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\Skeleton\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\Skeleton\Pro\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes\Core\Error;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Foo utils.
 *
 * @since $%v Initial release.
 */
class Foo extends SCoreClasses\SCore\Base\Core
{
    /**
     * Example utility.
     *
     * @since $%v Initial release.
     *
     * @param array $args Input args.
     *
     * @return string Return value.
     */
    public function bar(array $args = []): string
    {
        // Do something here.
        return ''; // Returns a string.
    }

    /**
     * On `hook_name` hook.
     *
     * @since $%v Initial release.
     */
    public function onHookName()
    {
        // Do something here.
    }
}
